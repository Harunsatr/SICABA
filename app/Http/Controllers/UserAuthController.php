<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Schema;
use App\Http\Controllers\Blueprint;
use App\Http\Controllers\QueryException;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Session;
use function Symfony\Component\String\b;

class UserAuthController extends Controller
{
    public function redirect()
{
    return Socialite::driver('google')->redirect();
}

public function handleGoogleCallback()
{
    try {

        $user = Socialite::driver('google')->user();
        $finduser = User::where('provider_id', $user->id)->first();

        if($finduser){
            Auth::login($finduser);
            Session::flash('user', $finduser);
            return redirect(route('home'));

        } else{
            $newUser = User::create([
                'name' => $user->name,
                'email' => $user->email,
                'provider_id'=> $user->id,
                'provider_token'=> $user->token,
                'provider_refresh_token'=> $user->refreshToken,
            ]);

            Auth::login($newUser);
            Session::flash('user', $newUser);
            // return Inertia::location('/');
            // blade
            return redirect(route('home'));
        }

    } catch (Exception $e) {
        dd($e->getMessage());
    }
}

public function logout(Request $request)
{
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();
    Session::regenerate();

    return redirect('/');
}

public function up()
{
    Schema::table('users', function (Blueprint $table) {
        $table->string('provider_id')->nullable()->after('password');
    });
}

public function down()
{
    Schema::table('users', function (Blueprint $table) {
        $table->dropColumn('provider_id');
    });
}

// login google
public function register(Request $request)
{
    // Validasi data dari request
    $validatedData = $request->validate([
        'email' => 'required|email|unique:users,email',
        // Tambahkan aturan validasi lainnya di sini
    ]);
}

public function register(Request $request)
{
    try {
        // Validasi data masukan
        $validatedData = $request->validate([
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            // Tambahkan aturan validasi lainnya di sini
        ]);

        // Simpan data ke dalam database
        $user = new User();
        $user->email = $request->email;
        $user->password = bcrypt($request->password); // Encrypt password sebelum disimpan
        // Tambahkan kolom lain jika diperlukan
        $user->save();

        // Jika berhasil, lanjutkan dengan tindakan selanjutnya
        // Misalnya, arahkan pengguna ke halaman tertentu atau kirimkan pesan berhasil
    } catch (QueryException $e) {
        // Kesalahan jika ada duplikasi entri
        if ($e->errorInfo[1] == 1062) {
            return redirect()->back()->withInput()->withErrors(['email' => 'Email sudah digunakan.']);
        } else {
            // Tangani kesalahan lainnya
        }
    }
}

}
