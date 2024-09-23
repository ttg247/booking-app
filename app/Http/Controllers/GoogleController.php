<?php

namespace App\Http\Controllers;

use Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $googleUser = Socialite::driver('google')->stateless()->user();
        $this->loginOrRegisterGoogleUser($googleUser);
        
        // Store access and refresh tokens in the user's record
        Auth::user()->update([
            'google_access_token' => $googleUser->token,
            'google_refresh_token' => $googleUser->refreshToken,
        ]);
        
        return redirect('home');
    }

    protected function loginOrRegisterGoogleUser($googleUser)
    {
        $user = User::where('email', $googleUser->getEmail())
                    ->orWhere('google_id', $googleUser->getId())
                    ->first();

        if ($user) {
            // Update the user's Google ID and avatar if not set
            if (!$user->google_id) {
                $user->update([
                    'google_id' => $googleUser->getId(),
                    'google_avatar' => $googleUser->getAvatar(),
                ]);
            }
            Auth::login($user);
        } else {
            $user = User::create([
                'name' => $googleUser->getName(),
                'email' => $googleUser->getEmail(),
                'google_id' => $googleUser->getId(),
                'google_avatar' => $googleUser->getAvatar(),
                'password' => bcrypt('default_password'), // Optional
                'role' => 'owner',
            ]);

            Auth::login($user);
        }
    }
}