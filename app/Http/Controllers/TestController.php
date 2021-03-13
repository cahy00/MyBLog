<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class TestController extends Controller
{
	public function index()
	{
		$user = User::orderBy('created_at', 'ASC');
    return view('test', \compact('user'));

	}
}
