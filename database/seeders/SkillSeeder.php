<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    public function run(): void
    {
        $skills = [
            // Programming Languages
            ['name' => 'PHP', 'category' => 'language', 'proficiency' => 'advanced', 'order' => 1],
            ['name' => 'Kotlin', 'category' => 'language', 'proficiency' => 'advanced', 'order' => 2],
            ['name' => 'JavaScript', 'category' => 'language', 'proficiency' => 'advanced', 'order' => 3],
            ['name' => 'HTML', 'category' => 'language', 'proficiency' => 'expert', 'order' => 4],
            ['name' => 'CSS', 'category' => 'language', 'proficiency' => 'expert', 'order' => 5],
            ['name' => 'SQL', 'category' => 'language', 'proficiency' => 'advanced', 'order' => 6],

            // Frameworks & Libraries
            ['name' => 'Laravel', 'category' => 'framework', 'proficiency' => 'advanced', 'order' => 7],
            ['name' => 'Laravel Filament', 'category' => 'framework', 'proficiency' => 'advanced', 'order' => 8],
            ['name' => 'Android Jetpack', 'category' => 'framework', 'proficiency' => 'advanced', 'order' => 9],
            ['name' => 'Bootstrap', 'category' => 'framework', 'proficiency' => 'advanced', 'order' => 10],
            ['name' => 'Tailwind CSS', 'category' => 'framework', 'proficiency' => 'advanced', 'order' => 11],

            // Tools & Platforms
            ['name' => 'Git', 'category' => 'tool', 'proficiency' => 'advanced', 'order' => 12],
            ['name' => 'GitHub', 'category' => 'tool', 'proficiency' => 'advanced', 'order' => 13],
            ['name' => 'MySQL', 'category' => 'tool', 'proficiency' => 'advanced', 'order' => 14],
            ['name' => 'Android Studio', 'category' => 'tool', 'proficiency' => 'advanced', 'order' => 15],
            ['name' => 'VS Code', 'category' => 'tool', 'proficiency' => 'expert', 'order' => 16],
            ['name' => 'Figma', 'category' => 'tool', 'proficiency' => 'intermediate', 'order' => 17],

            // Methodologies
            ['name' => 'Clean Architecture', 'category' => 'methodology', 'proficiency' => 'advanced', 'order' => 18],
            ['name' => 'MVVM', 'category' => 'methodology', 'proficiency' => 'advanced', 'order' => 19],
            ['name' => 'RESTful API', 'category' => 'methodology', 'proficiency' => 'advanced', 'order' => 20],
        ];

        foreach ($skills as $skill) {
            Skill::create($skill);
        }
    }
}
