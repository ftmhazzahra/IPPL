<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScholarshipController extends Controller
{
    public function index()
    {
        // Contoh data dummy
        $scholarships = [
            [
                'name' => 'Beasiswa LPDP',
                'country' => 'Indonesia',
                'description' => 'Beasiswa untuk jenjang S2 dan S3 dari pemerintah Indonesia.',
                'levels' => ['S2', 'S3'],
            ],
            [
                'name' => 'Chevening',
                'country' => 'UK',
                'description' => 'Fully funded scholarship untuk S2 di Inggris.',
                'levels' => ['S2'],
            ],
            // Tambahkan data lain sesuai kebutuhan
        ];

        return view('scholarship', compact('scholarships'));
    }
}
