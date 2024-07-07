<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'role_id' => 1,
            'name' => 'admin User',
            'email' => 'admin@admin.com',
        ]);

        User::factory()->create([
            'role_id' => 2,
        ]);
    }
}
