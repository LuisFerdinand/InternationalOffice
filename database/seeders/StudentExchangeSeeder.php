<?php

namespace Database\Seeders;

use App\Models\StudentExchange;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StudentExchangeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StudentExchange::factory()->count(10)->create();
    }
}
