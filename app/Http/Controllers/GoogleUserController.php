<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GoogleUser; // Pastikan Anda telah membuat model Eloquent yang sesuai

class GoogleUserController extends Controller
{
    public function store(Request $request)
    {
        // Contoh: menyimpan data pengguna saat pertama kali login
        $user = new GoogleUser();
        $user->google_id = $request->input('google_id');
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->save();

        return response()->json($user, 201);
    }

    // Anda dapat menambahkan metode lain sesuai kebutuhan, seperti untuk menampilkan informasi pengguna
}
