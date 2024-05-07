<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed
            return response()->json(['status' => 'success'], 200);
        } else {
            // User not found or incorrect password
            $user = User::where('email', $request->email)->first();
            if (!$user) {
                // User not found
                return response()->json(['status' => 'error', 'code' => 404], 404);
            } else {
                // Incorrect password
                return response()->json(['status' => 'error', 'code' => 422], 422);
            }
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
