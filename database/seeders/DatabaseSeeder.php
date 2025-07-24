<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        echo "Running DatabaseSeeder...\n";

        DB::table('users')->insert([
            'name' => 'Test Parent',
            'email' => 'testparent@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('secret123'),
            'remember_token' => Str::random(10),
        ]);

        echo "Inserted Test Parent user.\n";
    }
}
