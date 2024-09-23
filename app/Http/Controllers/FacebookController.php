<?php

namespace App\Http\Controllers;

use Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FacebookController extends Controller
{
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookCallback()
    {
        $facebookUser = Socialite::driver('facebook')->stateless()->user();
        $this->loginOrRegisterFacebookUser($facebookUser);
        
        return redirect('/dashboard');
    }

    protected function loginOrRegisterFacebookUser($facebookUser)
    {
        $user = User::where('email', $facebookUser->getEmail())
                    ->orWhere('facebook_id', $facebookUser->getId())
                    ->first();

        if ($user) {
            // Update the user's Facebook ID and avatar if not set
            if (!$user->facebook_id) {
                $user->update([
                    'facebook_id' => $facebookUser->getId(),
                    'facebook_avatar' => $facebookUser->getAvatar(),
                ]);
            }
            Auth::login($user);
        } else {
            $user = User::create([
                'name' => $facebookUser->getName(),
                'email' => $facebookUser->getEmail(),
                'facebook_id' => $facebookUser->getId(),
                'facebook_avatar' => $facebookUser->getAvatar(),
                'password' => bcrypt('default_password'), // Optional
                'role' => 'owner',
            ]);

            Auth::login($user);
        }
    }
}
