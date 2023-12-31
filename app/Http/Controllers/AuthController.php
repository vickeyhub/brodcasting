<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function index(){
        return view('auth.login');
    }

    public function registerIndex(){
        return view('auth.register');
    }
    public function login(Request $request)
    {
        // return $request->all();
        $validate = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($request->only('email','password'))) {

            $user = Auth::user();

            if($user->user_role == 'customer'){
                return redirect('/');
            }
            if($user->user_role == 'admin'){
                return redirect('/dashboard');
            }
            // Authentication passed
        }

        // Authentication failed
        return redirect('/login')->withError('Error: Authentication failed');

    }

    public function register(Request $request){
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'user_role' => 'customer'
        ]);
        // redirect to login page
        return redirect('/login');
    }
    

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
