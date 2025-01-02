<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('quiz')->insert([
            [
                'id' => 1,
                'title' => 'Data Analytics Python',
                'description' => 'Learn data analytics using Python.',
                'created_at' => now(),
                'updated_at' => now(),
                'course_id' => 1,
            ],
            [
                'id' => 2,
                'title' => 'UI/UX Design Basics',
                'description' => 'Fundamentals of UI/UX design.',
                'created_at' => now(),
                'updated_at' => now(),
                'course_id' => 2,
            ],
            [
                'id' => 3,
                'title' => 'Front-End React',
                'description' => 'Introduction to front-end with React.',
                'created_at' => now(),
                'updated_at' => now(),
                'course_id' => 3,
            ],
            [
                'id' => 4,
                'title' => 'Advanced Excel for Professionals',
                'description' => 'Master advanced Excel',
                'created_at' => now(),
                'updated_at' => now(),
                'course_id' => 4,
            ],
            [
                'id' => 5,
                'title' => 'Copywriting for Marketing',
                'description' => 'Enhance your marketing with effective copywriting.',
                'created_at' => now(),
                'updated_at' => now(),
                'course_id' => 5,
            ],
            [
                'id' => 6,
                'title' => 'Copywriting for Ads',
                'description' => 'Learn copywriting strategies for advertisements.',
                'created_at' => now(),
                'updated_at' => now(),
                'course_id' => 6,
            ],
        ]);
    }
}
