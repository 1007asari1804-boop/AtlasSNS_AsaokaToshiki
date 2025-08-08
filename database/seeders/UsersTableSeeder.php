<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Users')->insert([
            ['username' => 'user1',
            'email' => 'user1@gmail.com',
            'password' => bcrypt('1111')],
            ['username' => 'user2',
            'email' => 'user2@gmail.com',
            'password' => bcrypt('2222')],
            ['username' => 'user3',
            'email' => 'user3@gmail.com',
            'password' => bcrypt('3333')],
        ]);
    }
}
