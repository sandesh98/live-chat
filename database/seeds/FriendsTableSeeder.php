<?php

use Illuminate\Database\Seeder;

class FriendsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('friend_user')
            ->insert([
                [
                    'user_id' => 1,
                    'friend_id' => 2
                ],
                [
                    'user_id' => 1,
                    'friend_id' => 3
                ],
                [
                    'user_id' => 2,
                    'friend_id' => 3
                ]
            ]);
    }
}
