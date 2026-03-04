<?php

namespace Database\Seeders;

use App\Models\Experience;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    public function run(): void
    {
        $experiences = [
            [
                'title' => 'D4 Manajemen Informatika',
                'company' => 'Universitas Negeri Surabaya',
                'location' => 'Surabaya, Indonesia',
                'start_date' => '2021-08-01',
                'end_date' => '2025-07-31',
                'description' => 'Graduated with Cumlaude honors (GPA: 3.81/4.00) from the Bachelor of Applied Science program in Information Management.',
                'achievements' => [
                    'Achieved GPA of 3.81/4.00 (Cumlaude)',
                    'Specialized in Web Full-Stack Development and Mobile Development',
                    'Completed comprehensive coursework in software engineering, database systems, and project management',
                ],
                'type' => 'education',
                'order' => 1,
            ],
            [
                'title' => 'Final Project Developer',
                'company' => 'Universitas Negeri Surabaya',
                'location' => 'Surabaya, Indonesia',
                'start_date' => '2025-03-01',
                'end_date' => '2025-07-31',
                'description' => 'Developed comprehensive e-commerce application for digitalizing batik tulis UMKM businesses.',
                'achievements' => [
                    'Designed and implemented end-to-end e-commerce platform',
                    'Created complete UI/UX design using Figma',
                    'Developed both front-end and back-end systems',
                    'Provided digital solution enabling market expansion for local artisans',
                ],
                'type' => 'project',
                'order' => 2,
            ],
            [
                'title' => 'Mobile Development Cohort',
                'company' => 'Bangkit Academy 2024 (Google, GoTo, Traveloka)',
                'location' => 'Remote',
                'start_date' => '2024-09-01',
                'end_date' => '2025-01-31',
                'description' => 'Selected participant in intensive independent study program focused on industry-standard Android development using Kotlin.',
                'achievements' => [
                    'Collaborated in cross-functional team to develop "NVBite" Capstone Project',
                    'Built AI-powered application for detecting carbon emissions from food',
                    'Implemented Clean Architecture and MVVM patterns',
                    'Utilized Git/GitHub for version control and team collaboration',
                    'Ensured code quality, readability, and efficient team workflows',
                ],
                'type' => 'other',
                'order' => 3,
            ],
            [
                'title' => 'Web Developer Intern',
                'company' => 'PT EDI Indonesia - Surabaya Branch',
                'location' => 'Surabaya, Indonesia',
                'start_date' => '2024-02-01',
                'end_date' => '2024-07-31',
                'description' => 'Full-stack web development internship focused on building internal financial management systems.',
                'achievements' => [
                    'Designed and built full-stack Petty Cash Management application',
                    'Developed interactive admin panel using Laravel Filament',
                    'Created dynamic data input features',
                    'Reduced manual reporting time and improved data accuracy',
                    'Designed relational database schema',
                    'Implemented complex CRUD functionality for real-time cash flow tracking',
                ],
                'type' => 'internship',
                'order' => 4,
            ],
        ];

        foreach ($experiences as $experience) {
            Experience::create($experience);
        }
    }
}
