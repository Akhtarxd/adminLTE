<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class companySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
   for($i=0; $i<=50; $i++){

   
DB::table('companies')->insert([
    'name' => Str::random(10).'tuhin',
    'logo' => Str::random(10).'xyz  ',
    'email' => Str::random(10).'@example.com',
    'company_url' => Str::random(10).'abcd',
]);
    }
} 
}