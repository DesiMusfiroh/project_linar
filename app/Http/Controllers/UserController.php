<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // mengambil semua data user
    	$pengguna = User::all();
    	// return data ke view
    	return view('user', ['user' => $user]);
    }
}
