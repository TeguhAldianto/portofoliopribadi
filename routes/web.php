<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    HomeController,
    AboutController,
    ExperienceController,
    ProjectController,
    PublicationController,
    SkillController,
    ResumeController,
    ContactController
};

// Public routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/experience', [ExperienceController::class, 'index'])->name('experience');
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/projects/{project:slug}', [ProjectController::class, 'show'])->name('projects.show');
Route::get('/publications', [PublicationController::class, 'index'])->name('publications');
Route::get('/skills', [SkillController::class, 'index'])->name('skills');

Route::get('/resume', [ResumeController::class, 'index'])->name('resume');
Route::get('/resume/download', [ResumeController::class, 'download'])->name('resume.download');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
