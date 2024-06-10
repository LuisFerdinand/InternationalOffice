<?php

namespace Database\Seeders;

use App\Models\ShortCourse;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ShortCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ShortCourse::factory(10)->create();
    }
}
