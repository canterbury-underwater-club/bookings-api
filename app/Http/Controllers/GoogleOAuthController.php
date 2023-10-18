<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;

class GoogleOAuthController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->user();

        // $user->token;
        // TODO: log the user in

        return redirect()->route('voyager.dashboard');
    }
}
