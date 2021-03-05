<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function index()
		{
			return view('auth.login');
		}

		public function store(Request $request)
		{
			if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
				return \redirect('/dashboard');
			}
			return \redirect('login');
		}

		public function logout()
		{
			Auth::logout();
			return redirect('login');
		}
}
