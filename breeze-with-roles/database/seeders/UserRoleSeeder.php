<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserRole;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserRole::create([
            'user_id'   =>  1,
            'role_id'   =>  1
        ]);

        UserRole::create([
            'user_id'   =>  1,
            'role_id'   =>  1
        ]);

        UserRole::create([
            'user_id'   =>  1,
            'role_id'   =>  1
        ]);
    }
}
