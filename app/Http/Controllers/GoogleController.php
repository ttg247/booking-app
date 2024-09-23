<?php

namespace App\Http\Controllers;

use Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Google_Client;
use Google_Service_Calendar as CalendarService; // Alias for Google_Service_Calendar
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')
        ->scopes([
            'https://www.googleapis.com/auth/calendar', // Full access to the calendar
            'https://www.googleapis.com/auth/calendar.events',
            'https://www.googleapis.com/auth/calendar.readonly',
        ])
        ->redirect();
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
        
        return redirect()->route('home');
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

    public function getEvents(): JsonResponse
    {
        $user = Auth::user();
        
        $client = new Google_Client();
        $client->setAccessToken($user->google_access_token);

        $service = new CalendarService($client);
        $calendarId = 'primary'; // or the user's specific calendar ID
        $events = $service->events->listEvents($calendarId);

        $calendarEvents = [];

        foreach ($events->getItems() as $event) {
            $calendarEvents[] = [
                'id' => $event->getId(),
                'title' => $event->getSummary(),
                'start' => $event->getStart()->getDateTime() ?: $event->getStart()->getDate(),
                'end' => $event->getEnd()->getDateTime() ?: $event->getEnd()->getDate(),
            ];
        }

        return response()->json($calendarEvents);
    }
}