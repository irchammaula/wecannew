<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;  // Pastikan untuk mengimpor Str

class SocialiteController extends Controller
{
    /**
     * Redirect the user to the Google authentication page.
     */
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from Google and either log them in or register them.
     */
    public function callback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();
<<<<<<< HEAD
            // dd($googleUser);
            // Cek apakah user dengan google_id sudah ada
=======

            dd($googleUser);

            // Check if the user already exists by google_id
>>>>>>> c767e3a3974a9f877227d9b5ffbaa4c02f025833
            $user = User::where('google_id', $googleUser->id)->first();

            if ($user) {
                Auth::login($user);
<<<<<<< HEAD
                session()->flash('success', 'Berhasil login dengan Google!');
                return redirect()->route('customer.dashboard');
                // return redirect()->route('customer.dashboard');
            }

            // Cek apakah email sudah terdaftar (tanpa google_id)
            $existingUser = User::where('email', $googleUser->email)->first();
            if ($existingUser && !$existingUser->google_id) {
                return redirect()->route('login')->with('error', 'Email sudah terdaftar tanpa Google. Silakan login manual.');
            }

            // Jika user ada tapi belum punya google_id, update data Google-nya
            if ($existingUser) {
                $existingUser->update([
                    'google_id' => $googleUser->id,
                    'avatar' => $googleUser->avatar,
                ]);

                Auth::login($existingUser);
                session()->flash('success', 'Berhasil login dengan Google!');
                // return redirect()->route('customer.dashboard');
                return redirect()->route('customer.dashboard');
            }

            // Jika benar-benar user baru
            $userData = User::create([
                'name' => $googleUser->name,
                'email' => $googleUser->email,
                'google_id' => $googleUser->id,
                'avatar' => $googleUser->avatar,
                'balance' => 0,
                'password' => Hash::make(Str::random(16)),
                'phone' => '000000',
            ]);

            Auth::login($userData);
            session()->flash('success', 'Berhasil login dengan Google!');
            // return redirect()->route('customer.dashboard');
            return redirect()->route('customer.dashboard');
        } catch (Exception $e) {
            return redirect()->route('login')->with('error', 'Gagal login dengan Google: ' . $e->getMessage());
        }
=======
                return redirect()->route('customer.dashboard');
            } else {
                $userData = User::create([
                    'name' => $googleUser->name,
                    'email' => $googleUser->email,
                    'google_id' => $googleUser->id,
                    'balance' => 0,
                    'password' => Hash::make(Str::random(16)), // Generate a random password for new users
                    'phone' => '000000', // Generate a random password for new users
                ]);

                if ($userData) {
                    Auth::login($userData);
                    return redirect()->route('customer.dashboard');
                }
            }
        } catch (Exception $e) {
            dd($e);
        }
        // Retrieve user from Google

>>>>>>> c767e3a3974a9f877227d9b5ffbaa4c02f025833
    }
}
