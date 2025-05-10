<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Beasiswa;  // Pastikan menggunakan model Beasiswa

class ScholarController extends Controller
{
    public function index()
    {
        // Ambil semua data beasiswa dari database
        $beasiswa = Beasiswa::all();

        // Kirim data beasiswa ke view home
        return view('home', compact('beasiswa'));
    }
}
