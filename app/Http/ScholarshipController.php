<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScholarshipController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('q');
        $degree = $request->input('degree');

        $scholarships = collect(range(1, 20))->map(function ($i) {
            return [
                'id' => $i,
                'title' => "Beasiswa Contoh $i",
                'country' => ['Indonesia', 'UK', 'USA', 'Australia'][$i % 4],
                'description' => "Deskripsi singkat dari beasiswa ke-$i.",
                'degrees' => collect(['S1'])
                    ->merge($i % 2 === 0 ? ['S2'] : [])
                    ->merge($i % 3 === 0 ? ['S3'] : [])
                    ->all(),
            ];
        });

        if ($query) {
            $scholarships = $scholarships->filter(fn($item) =>
                str_contains(strtolower($item['title']), strtolower($query))
            );
        }

        if ($degree) {
            $scholarships = $scholarships->filter(fn($item) =>
                in_array($degree, $item['degrees'])
            );
        }

        return view('scholarship', [
            'scholarships' => $scholarships,
            'query' => $query,
            'degree' => $degree,
        ]);
    }
}
