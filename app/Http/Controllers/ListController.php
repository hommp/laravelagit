<?php

namespace App\Http\Controllers;

use App\Models\User; // Pastikan Anda menggunakan model User
use Illuminate\Http\Request;

class ListController extends Controller
{
    public function show()
    {
        // Mengambil semua pengguna dari database
        $users = User::all();

        // Mengirim data pengguna ke view
        return view('list', compact('users'));
    }
}
