<?php

namespace Database\Seeders;

use App\Models\Want;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Want::factory(2000)->create();
    }
}
