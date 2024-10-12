<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@test.com',
            'role' => 'admin',
        ]);

        User::factory()->create([
            'name' => 'Yemil Godinez',
            'email' => 'yemil@test.com',
            'role' => 'user',
        ]);

        User::factory()->create([
            'name' => 'Robin Superhero',
            'email' => 'robin@test.com',
            'role' => 'user',
        ]);
    }
}
