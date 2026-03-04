<?php

namespace App\Http\Controllers;

use App\Models\Skill;

class SkillController extends Controller
{
    public function index()
    {
        $skillsGrouped = Skill::getAllGrouped();

        return view('skills', compact('skillsGrouped'));
    }
}
