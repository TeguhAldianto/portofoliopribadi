<?php

namespace App\Http\Controllers;

use App\Models\Experience;

class AboutController extends Controller
{
    public function index()
    {
        $education = Experience::byType('education')->ordered()->get();

        return view('about', compact('education'));
    }
}
