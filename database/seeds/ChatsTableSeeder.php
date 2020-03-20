<?php

use Illuminate\Database\Seeder;
use App\Chat;

class ChatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Chat::create([
            'user_id' => 1,
            'message_id' => 1,
            'session_id' => 1
        ]);
    }
}
