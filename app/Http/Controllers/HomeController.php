<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Skill;

class HomeController extends Controller
{
    public function index()
    {
        $featuredProjects = Project::featured()->ordered()->limit(3)->get();
        $skills = Skill::ordered()->limit(8)->get();

        return view('home', compact('featuredProjects', 'skills'));
    }
}
