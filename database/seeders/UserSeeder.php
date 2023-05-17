<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'first_name' => 'Russell',
                'last_name' => 'Masato',
                'phone' => '+1 785 403 0758',
                'email' => 'devlord0625@gmail.com',
                'password' => bcrypt('123456'),
                'saved_articles' => 'none',
                'news_feed' => 'node, react',
                'created_at' => '2023-05-16 05:22:39',
                'updated_at' => '2023-05-16 21:31:29',
            ],
            [
                'first_name' => 'Leo',
                'last_name' => 'Masaki',
                'phone' => '+1 519 555 0195',
                'email' => 'devking877@gmail.com',
                'password' => bcrypt('123456'),
                'saved_articles' => 'none',
                'news_feed' => 'Typescript, Vue',
                'created_at' => '2023-05-16 21:33:01',
                'updated_at' => '2023-05-16 21:33:01',
            ],
            // Add more users as needed
        ];
        
        DB::table('users')->insert($users);
    }
}
