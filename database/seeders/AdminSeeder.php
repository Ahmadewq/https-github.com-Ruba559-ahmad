<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('secretaries')->insert([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'phone' =>  '12345678',
            'password' => Hash::make('password'),
        ]);
    }
}
