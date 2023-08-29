<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    //
    public function index(){
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|max:255',
            'email' => 'required|email',
            'password' => 'required|min:3',

            'namalengkap' => 'required',
            'nomortelepon' => 'required',
            'pekerjaan' => 'required'
            // 'username' => ['required', 'min:3', 'max:255', 'unique:users']
        ]);

        User::create($validatedData);


        return redirect('/login');
    }
}
