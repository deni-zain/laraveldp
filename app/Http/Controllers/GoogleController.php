<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Laravel\Socialite\Facades\Socialite;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class GoogleController extends Controller
{
    public function redirectTogoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    public function HandleGoogleCallback(Request $request)
    {
        $user = Socialite::driver('google')->user();

        $this->_registerOrLoginUser($user);

        // Return home after login
        return redirect()->route('/input');
    }
}