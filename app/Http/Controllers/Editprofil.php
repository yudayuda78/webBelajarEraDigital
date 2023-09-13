<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class editprofil extends Controller
{
    //
    public function edit()
    {
        $user = Auth::user();
        return view('user.editprofil', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        
        $request->validate([
            'username' => 'required|max:255|unique:users',
            'email' => 'required|email:dns',
            // 'password' => 'required|min:3|max:255',

            'namalengkap' => 'required|max:255',
            'nomortelepon' => 'required',
            'pekerjaan' => 'required'
            // 'username' => ['required', 'min:3', 'max:255', 'unique:users']
        ]);

        $user()->update([
            'username' => $request->username,
            'email' => $request->email,
            'namalengkap' => $request->namalengkap,
            'nomortelepon' => $request->nomortelepon,
            'pekerjaan' => $request->pekerjaan
        ]);



        return redirect()->route('profil.edit')->with('updateberhasil', 'Profil berhasil diperbarui.');

        // dd('oke');
    }
}
