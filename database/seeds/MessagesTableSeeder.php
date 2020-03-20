<?php

use App\Message;
use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Message::create([
            'session_id' => 1,
            'body' => 'Hallo alles goed?'
        ]);

        Message::create([
            'session_id' => 1,
            'body' => 'Ja man met jou?'
        ]);
    }
}
