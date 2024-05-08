<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        return view('dashboard.pages.user-profile', ['currentUserData' => $user]);
    }

    // Method to update current user data
    public function update(Request $request)
    {
        $user = Auth::user();

        // Validation
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            // Add more fields as needed
        ]);

        // Update user data
        $user->update($validatedData);

        return redirect()->back()->with('success', 'Profile updated successfully.');
    }
}
