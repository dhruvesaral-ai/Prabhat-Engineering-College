<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class studentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('student')->insert([
            'name'=> 'student',
            'email'=>'student@gmail.com',
            'password'=>bcrypt('student12345'),
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
    }
}
