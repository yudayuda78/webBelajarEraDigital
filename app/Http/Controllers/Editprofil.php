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
        return view('maintenance', compact('user'), [
            'title' => 'Edit Profil'
        ]);
        
    }

    public function update(Request $request)
    {
        $user = User::find(Auth::user()->id);
        
        $request->validate([
            'username' => 'required|max:255|unique:users, username, ' .$user->id,
            'email' => 'required|email:dns',
            'namalengkap' => 'required|max:255',
            'nomortelepon' => 'required',
            'pekerjaan' => 'required'
            
        ]);

    

        $user->email = $request->input('email');
        $user->namalengkap = $request->input('namalengkap');
        $user->nomortelepon = $request->input('nomortelepon');

        $user->save();

        return redirect()->route('profil.edit')->with('updateberhasil', 'Profil berhasil diperbarui.');
        // dd(User::where('id', Auth::id())->first());

        
    }
}
