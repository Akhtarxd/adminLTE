<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class users extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'fname' => 'admin',
            'lname' => 'erp',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
            'is_admin' => '1',
            'status' => '1',
            
        ]);
    }
}
