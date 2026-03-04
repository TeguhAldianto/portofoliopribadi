<?php

namespace App\Http\Controllers;

class ResumeController extends Controller
{
    public function index()
    {
        return view('resume');
    }

    public function download()
    {
        // Mencari file langsung di dalam folder public/
        $cvPath = public_path('CV_Teguh_Aldianto.pdf');

        // Pengecekan apakah file benar-benar ada di folder public/
        if (!file_exists($cvPath)) {
            abort(404, 'Maaf, file CV belum tersedia di server.');
        }

        // Memaksa browser untuk mengunduh file
        return response()->download($cvPath, 'CV_Teguh_Aldianto.pdf');
    }
}
