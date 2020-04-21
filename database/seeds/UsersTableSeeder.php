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
            'image' => 'https://scontent-amt2-1.xx.fbcdn.net/v/t1.0-9/57056206_2930863426923875_2141733468474703872_o.jpg?_nc_cat=105&_nc_sid=85a577&_nc_ohc=L8Tn2e2AXuMAX_nzziL&_nc_ht=scontent-amt2-1.xx&oh=77675e91ecd7fc5466db6541ff1b1c24&oe=5EC4E9BA',
            'password' => $password
        ]);

        User::create([
            'name' => 'Bodhi',
            'email' => 'bodhi@test.com',
            'image' => 'https://scontent-amt2-1.xx.fbcdn.net/v/t1.0-9/68644706_915280908864616_3153487567089827840_o.jpg?_nc_cat=100&_nc_sid=85a577&_nc_ohc=aQRxgamYEP8AX_IIHKd&_nc_ht=scontent-amt2-1.xx&oh=055664a8c0aa66888e4aa82651019ca4&oe=5EC5A35B',
            'password' => $password
        ]);
    }
}
