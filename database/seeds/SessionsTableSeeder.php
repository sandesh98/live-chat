<?php

use Illuminate\Database\Seeder;
use App\Session;

class SessionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Session::create([
            'user1_id' => 1,
            'user2_id' => 2,
        ]);
    }
}
