<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Bot\Botuser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BotuserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Botuser::factory(100)->create();
    }
}
