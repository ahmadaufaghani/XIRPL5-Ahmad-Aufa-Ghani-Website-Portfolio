<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'Ahmad Aufa Ghani',
            'email'=>'3103120010@student.smktelkom-pwt.sch.id',
            'password'=>Hash::make('ghani2004'),
        ]);
    }
}
