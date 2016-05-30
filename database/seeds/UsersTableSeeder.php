<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds
     *
     * @return void
     */
    public function run()
    {
        $this->createUsers();
    }

    private function createUsers()
    {
        $generic_password = Hash::make('password');

        $users =
            [
                [
                    'first_name' => 'Leia',
                    'last_name'  => 'Organa',
                    'username'   => 'loregano',
                    'email'      => 'loregano@galaxyfarfaraway.net',
                    'occupation' => 'Rebel',
                    'password'   => $generic_password,
                ],
                [
                    'first_name' => 'Luke',
                    'last_name'  => 'Skywalker',
                    'username'   => 'lskywalker',
                    'email'      => 'lskywalker@galaxyfarfaraway.net',
                    'occupation' => 'Jedi Master',
                    'password'   => $generic_password,
                ],
                [
                    'first_name' => 'Han',
                    'last_name'  => 'Solo',
                    'username'   => 'solocup',
                    'email'      => 'solocup@galaxyfarfaraway.net',
                    'occupation' => 'Smuggler',
                    'password'   => $generic_password,
                ],
                [
                    'first_name' => 'Chewbacca',
                    'last_name'  => '',
                    'username'   => 'chewonthis',
                    'email'      => 'chewonthis@galaxyfarfaraway.net',
                    'occupation' => 'First Officer',
                    'password'   => $generic_password,
                ],
                [
                    'first_name' => 'R2-D2',
                    'last_name'  => '',
                    'username'   => 'artoo',
                    'email'      => 'artoo@galaxyfarfaraway.net',
                    'occupation' => 'Rebel Spy',
                    'password'   => $generic_password,
                ],
                [
                    'first_name' => 'C-3PO',
                    'last_name'  => '',
                    'username'   => 'threepo',
                    'email'      => 'threepo@galaxyfarfaraway.net',
                    'occupation' => 'Droid',
                    'password'   => $generic_password,
                ],
                [
                    'first_name' => 'Darth',
                    'last_name'  => 'Vader',
                    'username'   => 'lilorphanannie',
                    'email'      => 'lilorphanannie@galaxyfarfaraway.net',
                    'occupation' => 'Sith Lord',
                    'password'   => $generic_password,
                ],
            ];

        return \Illuminate\Support\Facades\DB::table('users')->insert($users);
    }
}
