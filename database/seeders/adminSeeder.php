<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admin')->insert([
            'name'=>'Admin User',
            'email'=> 'admin@gmail.com',
            'password'=>bcrypt('admin12345'),
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
    }
}
