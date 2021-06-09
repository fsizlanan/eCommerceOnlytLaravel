<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class KullaniciController extends Controller
{
    public function giris_form()
    {
        return view('kullanici.oturumac');
    }

    public function kaydol_form()
    {
        return view('kullanici.kaydol');
    }

    public function kaydol()
    {
        $this->validate(request(), 
        [
            'name' => 'required | max:60',
            'email' => 'required | email | unique:users',
            'password'=> 'required | confirmed | min:5 |max:15'
        ]);

        $kullanici = User::create([
            'name' => request('name'),
            'email' => request('email'),
            // 'email_verified_at'=>request('email_verified_at'),
            'password' => Hash::make(request('password')),
            'activation_code' => Str::random(10),
            'status' => 0
        ]);

        //  auth()->login($kullanici); 

        return redirect()->route('anasayfa');
    }
}
