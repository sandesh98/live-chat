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
            'image' => 'https://i.pinimg.com/280x280_RS/7c/64/22/7c64224f45f745dd0cdd6fa442904ff8.jpg',
            'password' => $password
        ]);

        User::create([
            'name' => 'Martijn',
            'email' => 'martijn@test.com',
            'image' => 'https://scontent-amt2-1.xx.fbcdn.net/v/t1.0-9/57056206_2930863426923875_2141733468474703872_o.jpg?_nc_cat=105&_nc_sid=85a577&_nc_ohc=uvhElWTD0P4AX_JOYiS&_nc_ht=scontent-amt2-1.xx&oh=1a56a80dfb3f55bebc5639ab119f99f5&oe=5E99683A',
            'password' => $password
        ]);

        User::create([
            'name' => 'Bodhi',
            'email' => 'bodhi@test.com',
            'image' => 'https://scontent-ams4-1.xx.fbcdn.net/v/t1.0-1/c0.0.160.160a/p160x160/68644706_915280908864616_3153487567089827840_o.jpg?_nc_cat=100&_nc_sid=dbb9e7&_nc_ohc=5y7VVhFezmIAX9A6vVH&_nc_ht=scontent-ams4-1.xx&oh=b9d42e065e07b20a70ddf67c5b440e4c&oe=5E9B7439',
            'password' => $password
        ]);
    }
}
