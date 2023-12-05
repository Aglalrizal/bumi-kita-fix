<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SignUpController extends Controller
{
    public function index(){
        return view('signup.index', [
            'title' => 'Sign Up',
            'active' => 'signup'
        ]);
    }
    public function store(Request $request){
        // return $request->all();
        $validatedData = $request->validate([
            'email' => 'required|email:dns|max: 255|unique:users',
            'username' => 'required|min: 5|max: 255|unique:users',
            'name' => 'required|max: 255',
            'password' => 'required|confirmed|min:8',
            'address' => 'required|',
            'dob' => 'required',
            'noHp' => 'required|min: 10',
            'account-type' => 'required'
        ]);
        User::create($validatedData);
        return redirect('/login')->with('success', 'Account has been created, please login!');
    }
}
