<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class usercontroller extends Controller
{

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:3',
            // Add more fields as needed
        ]);


        // Create a new user instance
        User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password'=> Hash::make ($validatedData['password']),
        ]);

        return redirect('welcome')->with('success', 'Registration Completed');
}

    public function dashboard(Request $request){


    }


    public function login(Request $request)
    {

        $data= $request->only("email","password");

         if(Auth::attempt($data)){

             $request->session()->put('user',Auth::user());

            return view('dashboard')->with('success', 'welcome');


         }

         return response('Login Failed');

    }

    public function logout(Request $request){

        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();


    return redirect('/');
    }




    }


