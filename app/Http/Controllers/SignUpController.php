<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Provinsi;
use Illuminate\Http\Request;

class SignUpController extends Controller
{
    public function index(){
        // $provinsi = Provinsi::all();

        // dd($provinsi[0]->kota);
        return view('signup.index', [
            'title' => 'Sign Up',
            'active' => 'signup',
        ]);
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'email' => 'required|email:dns|max: 255|unique:users',
            'username' => 'required|min: 5|regex:/^[a-zA-Z0-9_-]+$|max: 255|unique:users',
            'name' => 'required|max: 255',
            'password' => 'required|confirmed|min:8',
            'kota_id' => 'required|',
            'dob' => 'required',
            'noHp' => 'required|min: 10',
            'account-type' => 'required'
        ]);
        User::create($validatedData);
        return redirect('/login')->with('success', 'Akun berhasil dibuat, silahkan masuk!');
    }
}
