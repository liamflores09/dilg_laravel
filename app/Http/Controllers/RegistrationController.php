<?php

namespace App\Http\Controllers;

use App\Models\RegistrationEntry;
use Illuminate\Http\Request;


class RegistrationController extends Controller
{
    public function showForm()
    {
        return view('register');
    }

    public function handleFormSubmission(Request $request)
    {
        // Check if there are more than 2000 entries in the database
        $totalEntries = RegistrationEntry::count();
        if ($totalEntries >= 2000) {
            return redirect()->route('register.form')->withErrors(['msg' => 'The maximum number of registrations has been reached.']);
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
            'email.unique' => 'This email address has already been used for registration. Please use a different email. ',
        ]);

        // Try to create the entry in the database
        // try {
        //     RegistrationEntry::create($validated);
        // } catch (\Illuminate\Database\QueryException $e) {
        //     // Check if it's a duplicate email error (SQL error code for duplicate entry is 1062)
        //     if ($e->getCode() == '23000') {
        //         // Handle the duplicate email error
        //         return redirect()->route('register.form')
        //             ->withErrors(['email' => 'This email has already been registered.'])
        //             ->withInput();  // Use withInput() to retain form data
        //     }
        //     // Handle other exceptions
        //     return redirect()->route('register.form')->withErrors(['msg' => 'An error occurred. Please try again later.']);
        // }

        // Create the entry in the database
        RegistrationEntry::create($validated);

        return redirect()->route('register.form')->with('success', 'Registration successful!');
    }
    public function showRegistrations()
    {
        // Get 20 registrations per page
        $registrations = RegistrationEntry::paginate(20);

        // Count registrations for Breakout Session 1 and Breakout Session 2
        $bs1Count = RegistrationEntry::where('breakout_session', 'BS1')->count();
        $bs2Count = RegistrationEntry::where('breakout_session', 'BS2')->count();

        return view('admin.dashboard', compact('registrations', 'bs1Count', 'bs2Count'));
    }

}
