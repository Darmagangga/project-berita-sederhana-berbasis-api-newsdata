<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register');
    }    

    public function add(Request $request){
        $credentials = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password'=> 'required'
        ]);

        $hashedPassword = Hash::make($credentials['password']);

        $user = new User();
        $user->email = $credentials['email'];
        $user->name = $credentials['email'];
        $user->password = $hashedPassword;
        $user->save();

    }
}
