<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('posts')->insert([
            [
                'post' => 'はじめての投稿です！',
                'user_id' => 1, // user1 の投稿
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post' => 'user2の投稿です。',
                'user_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post' => 'user3の投稿テスト。',
                'user_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
