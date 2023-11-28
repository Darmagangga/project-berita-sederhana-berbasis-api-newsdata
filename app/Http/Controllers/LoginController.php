<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function login(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|'
        ]);

       // Retrieve the user based on the email address
    $user = User::where('email', $credentials['email'])->first();

    // Check if the user exists and the provided password is correct
    if ($user) {
        // Check if the password is Bcrypt-hashed
        if (Hash::check($credentials['password'], $user->password)) {
            // Authentication passed for Bcrypt-hashed password...
            Auth::login($user);
            return redirect()->intended('/');
        } elseif ($credentials['password'] == $user->password) {
            // Authentication passed for non-hashed password...
            Auth::login($user);
            return redirect()->intended('/');
        }
    }

    // Authentication failed...
    return redirect()->route('login')->withErrors(['email' => 'Invalid credentials']);
}

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }


}
