<?php

namespace App\Http\Controllers;

use App\Models\Email;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function store(Request $request)
    {
        // Validasi form jika diperlukan
        $request->validate([
            'email' => 'required|email|unique:emails', // Pastikan email bersifat unik dalam tabel emails
        ]);

        // Simpan email ke dalam database
        Email::create([
            'email' => $request->email,
        ]);

        // Redirect atau berikan respon yang sesuai, misalnya:
        return redirect()->back()->with('success', 'Email berhasil disimpan.');
    }
}

