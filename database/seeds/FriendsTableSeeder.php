<?php

use App\Friend;
use Illuminate\Database\Seeder;

class FriendsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Friend::create([
            'user_id' => 1,
            'friend_id' => 2,
        ]);

        Friend::create([
            'user_id' => 1,
            'friend_id' => 3,
        ]);
    }
}
