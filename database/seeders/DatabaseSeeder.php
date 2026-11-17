<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(DepartmentSeeder::class);

        User::updateOrCreate(
            ['email' => 'admin@internsregistry.local'],
            [
                'name' => 'System Administrator',
                'password' => Hash::make('Admin#2026'),
                'is_active' => true,
            ]
        );
    }
}
