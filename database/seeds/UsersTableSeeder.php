<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        $users = [
            [
                'id' => 1,
                'name' => 'My Name Admin',
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('password')
            ],
            [
                'id' => 2,
                'name' => 'My Name User',
                'username' => 'user',
                'email' => 'user@gmail.com',
                'password' => bcrypt('password')
            ],
        ];

        User::insert($users);
    }
}
