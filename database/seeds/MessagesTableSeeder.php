<?php

use App\Message;
use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Message::create([
            'user_id' => 1,
            'session_id' => 1,
            'body' => 'Bericht nummer 1',
        ]);

        Message::create([
            'user_id' => 2,
            'session_id' => 1,
            'body' => 'Bericht nummer 2',
        ]);
    }
}
