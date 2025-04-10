<?php

namespace App\Http\Controllers;

use App\Models\RegistrationEntry;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function showForm()
    {
        // Get the current count of registrants for both breakout sessions
        $bs1Count = RegistrationEntry::where('breakout_session', 'bs1')->count();
        $bs2Count = RegistrationEntry::where('breakout_session', 'bs2')->count();

        // If both sessions are full, redirect to the closed_reg page
        if ($bs1Count >= 10 && $bs2Count >= 10) {
            return redirect()->route('sessions.closed');
        }

        // Otherwise, return the registration form
        return view('register', compact('bs1Count', 'bs2Count'));
    }

    public function handleFormSubmission(Request $request)
    {
        // Check if there are more than 2000 entries in the database
        $totalEntries = RegistrationEntry::count();
        if ($totalEntries >= 2000) {
            return redirect()->route('register.form')->withErrors(['msg' => 'The maximum number of registrations has been reached.']);
        }

        // Check if the selected breakout session is full
        if (
            ($request->breakout_session === 'bs1' && RegistrationEntry::where('breakout_session', 'bs1')->count() >= 10) ||
            ($request->breakout_session === 'bs2' && RegistrationEntry::where('breakout_session', 'bs2')->count() >= 10)
        ) {
            return redirect()->route('register.form')
                ->withErrors(['breakout_session' => 'The selected breakout session is already full.'])
                ->withInput();
        }

        // Validate the incoming request
        $validated = $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'contact_number' => 'required|string|max:15',
            'email' => 'required|email|unique:registration_entries,email',
            'lgu' => 'required|string',
            'designation' => 'required|string',
            'breakout_session' => 'required|string',
        ], [
            'email.unique' => 'This email address has already been used for registration. Please use a different email.',
        ]);

        // Create the registration entry
        RegistrationEntry::create($validated);

        return redirect()->route('register.form')->with('success', 'Registration successful!');
    }

    public function showRegistrations()
    {
        // Get 20 registrations per page
        $registrations = RegistrationEntry::paginate(20);

        // Count registrations for Breakout Session 1 and Breakout Session 2
        $bs1Count = RegistrationEntry::where('breakout_session', 'bs1')->count();
        $bs2Count = RegistrationEntry::where('breakout_session', 'bs2')->count();

        return view('admin.dashboard', compact('registrations', 'bs1Count', 'bs2Count'));
    }

    // Show the "Sessions Full" page if both breakout sessions are full
    public function showClosedReg()
    {
        return view('closed_reg'); // Render the closed_reg.blade.php view
    }
}
