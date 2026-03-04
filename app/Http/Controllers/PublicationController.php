<?php

namespace App\Http\Controllers;

use App\Models\Publication;

class PublicationController extends Controller
{
    public function index()
    {
        $publications = Publication::ordered()->get();

        return view('publications', compact('publications'));
    }
}
