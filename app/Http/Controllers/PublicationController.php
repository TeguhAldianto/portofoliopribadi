<?php

namespace App\Http\Controllers;

use App\Models\Publication;

class PublicationController extends Controller
{
    public function index()
    {
        // Ambil artikel khusus yang di-"feature"
        $featuredPublication = \App\Models\Publication::where('is_featured', true)->first();

        // Ambil semua artikel lain yang BUKAN featured
        $publications = \App\Models\Publication::where('is_featured', false)
            ->orderBy('created_at', 'desc') // atau orderBy date
            ->get();

        return view('publications', compact('featuredPublication', 'publications'));
    }
}
