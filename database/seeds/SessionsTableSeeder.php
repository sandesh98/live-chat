<?php

use App\Session;
use Illuminate\Database\Seeder;

class SessionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Session::create([
            'user_id' => 1,
            'friend_id' => 2,
        ]);

        Session::create([
            'user_id' => 3,
            'friend_id' => 2,
        ]);
    }
}
