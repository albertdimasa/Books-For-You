<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();

            $findUser = User::where('google_id', $user->id)->first();

            if ($findUser) {

                Auth::login($findUser);

                return redirect('home');
            } else {
                $newUser = User::create([
                    'nama'         => $user->name,
                    'email'        => $user->email,
                    'gambar'       => $user->avatar,
                    'google_id'    => $user->id,
                ]);

                Auth::login($newUser);

                return redirect('home');
            }
        } catch (Exception $e) {
            // dd($e->getMessage());
            return redirect('/login')->with('status', 'Something went wrong or You have rejected the app!');
        }
    }
}
