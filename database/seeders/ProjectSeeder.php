<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $projects = [
            [
                'title' => 'NVBite - AI Food Carbon Emission Detector',
                'slug' => 'nvbite-ai-carbon-emission',
                'description' => 'Developed as a Capstone Project for Bangkit Academy 2024, NVBite is an AI-powered Android application that detects carbon emissions from food. Collaborated with a cross-functional team including Machine Learning and Cloud Computing specialists to deliver this innovative sustainability solution.',
                'technologies' => ['Kotlin', 'Android Jetpack', 'Clean Architecture', 'MVVM', 'AI/ML Integration', 'RESTful API', 'Git', 'GitHub'],
                'role' => 'Mobile Development Lead',
                'github_url' => null,
                'demo_url' => null,
                'image' => null,
                'order' => 1,
                'is_featured' => true,
            ],
            [
                'title' => 'E-Commerce Platform for Batik UMKM',
                'slug' => 'ecommerce-batik-umkm',
                'description' => 'End-to-end e-commerce application developed as a Final Project at Universitas Negeri Surabaya. Designed to digitalize batik tulis artisan businesses, featuring comprehensive UI/UX design, front-end and back-end development. The platform enables localartisans to expand their market reach through an easy-to-use digital platform.',
                'technologies' => ['PHP', 'Laravel', 'MySQL', 'HTML', 'CSS', 'JavaScript', 'Bootstrap', 'Figma'],
                'role' => 'Full-Stack Developer & UI/UX Designer',
                'github_url' => null,
                'demo_url' => null,
                'image' => null,
                'order' => 2,
                'is_featured' => true,
            ],
            [
                'title' => 'Petty Cash Management System',
                'slug' => 'petty-cash-management',
                'description' => 'Full-stack web application developed during internship at PT EDI Indonesia for company cash flow management. Built interactive admin panel using Laravel Filament with dynamic data input features. Successfully reduced manual reporting time and improved financial data accuracy through comprehensive CRUD functionality and real-time cash flow tracking.',
                'technologies' => ['PHP', 'Laravel', 'Laravel Filament', 'MySQL', 'HTML', 'CSS', 'JavaScript'],
                'role' => 'Web Developer Intern',
                'github_url' => null,
                'demo_url' => null,
                'image' => null,
                'order' => 3,
                'is_featured' => true,
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
