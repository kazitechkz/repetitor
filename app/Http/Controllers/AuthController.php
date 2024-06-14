<?php

namespace App\Http\Controllers;

use App\Services\SMSC;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
}
