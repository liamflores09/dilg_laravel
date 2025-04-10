<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Models\RegistrationEntry;
use Illuminate\Support\Facades\Hash;  // <-- Add this import for Hash

class AdminLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $admin = Admin::where('username', $request->username)->first();

        if ($admin && Hash::check($request->password, $admin->password)) {
            session(['admin_id' => $admin->id]);
            return redirect()->route('admin.dashboard')->with('success', 'Successfully logged in!');
        } else {
            return back()->with('error', 'Invalid Username or Password');
        }
    }


    public function dashboard()
    {
        // Retrieve all entries from the registration_entries table
        $registrations = RegistrationEntry::all();

        // Pass the data to the dashboard view
        return view('admin.dashboard', compact('registrations'));
    }
    public function showRegistrations()
    {
        // Get 20 registrations per page
        $registrations = RegistrationEntry::paginate(20);

        // Count registrations for Breakout Session 1 and Breakout Session 2
        $bs1Count = RegistrationEntry::where('breakout_session', 'BS1')->count();
        $bs2Count = RegistrationEntry::where('breakout_session', 'BS2')->count();

        // Pass the registrations and counts to the view
        return view('admin.dashboard', compact('registrations', 'bs1Count', 'bs2Count'));
    }


}
