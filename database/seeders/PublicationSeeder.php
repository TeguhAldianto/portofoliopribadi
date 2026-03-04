<?php

namespace Database\Seeders;

use App\Models\Publication;
use Illuminate\Database\Seeder;

class PublicationSeeder extends Seeder
{
    public function run(): void
    {
        $publications = [
            [
                'title' => 'The 2nd International Conference on Aligning Sustainability with Vocational Innovations (ICASVI 2025)',
                'type' => 'publication',
                'issuer' => 'ICASVI 2025',
                'date' => '2025-01-01',
                'url' => 'https://h7.cl/1m9Ep',
                'description' => 'Successfully published and presented an international-level scientific article related to vocational technology innovation.',
            ],
        ];

        foreach ($publications as $publication) {
            Publication::create($publication);
        }
    }
}
