<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//         \App\Models\User::factory(10)->create();

         \App\Models\User::factory()->create([
             'name' => 'super_admin',
             'email' => 'admin@greenukraine.ch',
         ]);

        \App\Models\User::factory()->create([
            'name' => 'Expert',
            'email' => 'expert@greenukraine.ch',
        ]);
    }
}
