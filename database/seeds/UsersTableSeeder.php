<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = bcrypt('123123');

        User::create([
            'name' => 'Sandesh',
            'email' => 'test@test.com',
            'password' => $password
        ]);

        User::create([
            'name' => 'Martijn',
            'email' => 'martijn@test.com',
            'password' => $password
        ]);

        User::create([
            'name' => 'Bodhi',
            'email' => 'bodhi@test.com',
            'password' => $password
        ]);
    }
}
