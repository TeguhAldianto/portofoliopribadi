<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function index(Request $request)
    {
        $query = Experience::query();

        if ($request->has('type') && $request->type !== 'all') {
            $query->byType($request->type);
        }

        $experiences = $query->ordered()->get();

        return view('experience', compact('experiences'));
    }
}
