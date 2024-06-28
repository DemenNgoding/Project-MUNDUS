<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function Babi(){
        echo "this is anjing";
        return "0";
    }

    public function get_register(){
        return view('register');
    }

    public function post_register(Request $request){
        $request->validate([
            'name' => 'required',
            'email'=> 'required',
            'password'=> 'required',
            'birthday' => 'required',
            'gender' => 'required',
            'cities' => 'required',
        ]);

        $data = $request->only('name', 'email', 'password');
        
        if (!$data) {
            return redirect()->back()->withErrors(['error' => 'Invalid data provided']);
        }

        logger()->debug('Form data:', $data);

        $user = User::create($request->except(['_token']));

        auth()->login($user);
        // Auth::login($user);

        event(new Registered($user));

        return redirect()->route('home')->with('success','Account created successfully.');
    }

    public function get_login() {
        return view('login');
    }

    public function post_login(Request $request) {
        $request->validate([
            'email' => 'required',
            'password'=> 'required',
        ]);

        $data = $request->only('email', 'password');

        if(Auth::attempt($data)) {
            return redirect()->intended('home');
        }

        return redirect()->back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
