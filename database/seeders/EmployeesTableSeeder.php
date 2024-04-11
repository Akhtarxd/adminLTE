<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employee::create([
            'fname' => 'John',
            'lname' => 'Doe',
            'company_id' => 1,
            'email' => 'abc@gmail.com',
            'phone' => '123456789',
            'password' => '12345',
            'adminStatus' => '1',
        ]);
    }
}
