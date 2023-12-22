<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'id'=>1,
            'name'=>'admin',
            'email'=>'admin@softui.com',
            'password'=>Hash::make('secret'),
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
    }
}
