<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\SMSC;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function google()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {
        $user = Socialite::driver('google')->stateless()->user();

        $localUser = User::where('email', $user->email)->first();

        if ($localUser) {
            Auth::login($localUser);
        } else {
            $newUser = User::create([
                'email' => $user->email,
                'name' => $user->name
            ]);
            Auth::login($newUser);
        }

        return redirect(route('dashboard.index'));
    }
}
