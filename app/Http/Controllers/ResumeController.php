<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

class ResumeController extends Controller
{
    public function index()
    {
        return view('resume');
    }

    public function download()
    {
        $cvPath = 'public/cv/teguh-aldianto-cv.pdf';

        if (!Storage::exists($cvPath)) {
            abort(404, 'CV file not found');
        }

        return Storage::download($cvPath, 'Teguh-Aldianto-Resume.pdf');
    }
}
