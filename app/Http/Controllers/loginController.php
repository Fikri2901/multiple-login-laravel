<?php

namespace App\Http\Controllers;

use App\Models\M_Guru;
use App\Models\M_Siswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class loginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    //login multiple table
    public function login(Request $request)
    {
        $name = $request->input('name');
        $password = $request->input('pass');

        $user = User::where('name', $name)
            ->where('password', $password)
            ->first();

        $siswa = M_Siswa::where('name', $name)
            ->where('password', $password)
            ->first();

        $guru = M_Guru::where('name', $name)
            ->where('password', $password)
            ->first();

        if ($user || $siswa || $guru) {
            return view('masuk', ['user' => $user ?? $siswa ?? $guru]);
        } else {
            return redirect('/')->with('error', 'Invalid email or password');
        }
    }
}
