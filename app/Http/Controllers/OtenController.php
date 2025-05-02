<?php

namespace App\Http\Controllers;

use App\Models\UserBalance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;  // Pastikan Anda mengimpor model User jika diperlukan

class OtenController extends Controller
{
    // Menampilkan halaman login
    public function login(Request $request)
    {
        return view('login');
    }

    // Menampilkan halaman register
    public function register()
    {
        return view('register');
    }

    // Proses pendaftaran pengguna baru
    public function registeruser(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'name' => 'required|unique:users|max:255',  // Validasi nama unik
            'email' => 'required|email|max:255|unique:users',  // Validasi email unik
            'password' => 'required|string|min:8|confirmed',  // Validasi password dan konfirmasi password
            'phone' => 'required|max:255',  // Validasi nomor telepon
        ]);

        // Menyimpan pengguna baru
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']), // Pastikan password dienkripsi
            'phone' => $validated['phone'],
            'role_id' => 2,  // Misalnya, role_id untuk pengguna biasa (customer)
            'balance' => 0,
        ]);

        // UserBalance::create([
        //     'user_id' => $user->id,
        //     'balance' => 0, // Saldo awal
        // ]);

        // Setelah berhasil mendaftar, langsung login dan redirect ke halaman customer
        Auth::login($user);
<<<<<<< HEAD
        session()->flash('success', 'Berhasil Masuk!');
        return redirect()->route('customer.dashboard');
        // return redirect()->route('customer.dashboard');
=======
        return redirect()->route('customer.dashboard');
>>>>>>> c767e3a3974a9f877227d9b5ffbaa4c02f025833
    }

    // Proses autentikasi pengguna
    public function otentikasi(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        // Coba melakukan autentikasi
        if (Auth::attempt($credentials)) {
<<<<<<< HEAD
            // Regenerate session untuk keamanan
            $request->session()->regenerate();

            // Menambahkan pesan instruksi setelah login
            session()->flash('success', 'Selamat datang, ' . Auth::user()->name . '!');

            // Redirect berdasarkan role user
            if (Auth::user()->role_id == 1) {
                // Untuk Admin
                return redirect()->route('admin.dashboard')->with('success', 'Selamat datang Admin!');
            } elseif (Auth::user()->role_id == 2) {
                // Untuk Customer
                return redirect()->route('customer.dashboard')->with('success', 'Selamat datang Customer!');
            }
        } else {
            // Jika login gagal
            session()->flash('error', 'Email atau password salah!');
            return back()->with('error', 'Email atau password salah!');
        }

        // Jika gagal, kembali ke halaman login dengan error
        session()->flash('error', 'Email atau password salah.');
=======
            $request->session()->regenerate(); // Regenerate session untuk keamanan

            // Menambahkan pesan instruksi setelah login

            // Redirect berdasarkan role user
            if (Auth::user()->role_id == 1) {
                return redirect()->route('admin.dashboard'); // Admin dashboard
            } elseif (Auth::user()->role_id == 2) {
                return redirect()->route('customer.dashboard'); // Customer dashboard
            }
        }

        // Jika gagal, kembali ke halaman login dengan error
>>>>>>> c767e3a3974a9f877227d9b5ffbaa4c02f025833
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->onlyInput('email');
    }


<<<<<<< HEAD


=======
>>>>>>> c767e3a3974a9f877227d9b5ffbaa4c02f025833
    // Logout dan menghapus session
    public function logout(Request $request)
    {
        // Logout pengguna dan hapus session
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirect ke halaman login
        return redirect('/');
    }
}
