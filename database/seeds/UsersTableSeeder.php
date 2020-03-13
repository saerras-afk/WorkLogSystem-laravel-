<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'firstname' => 'Adrianne',
            'lastname' => 'Rosales',
            'username' => 'saerras',
            'password' => bcrypt('p@ssword123'),
            'roleId' => 1,
        ]);

        User::create([
            'firstname' => 'Jeanny',
            'lastname' => 'Alivio',
            'username' => 'beyet',
            'password' => bcrypt('temporary'),
            'roleId' => 2,
        ]);

        User::create([
            'firstname' => 'Jemalyn',
            'lastname' => 'Goyo',
            'username' => 'putot',
            'password' => bcrypt('temporary'),
            'roleId' => 3,
        ]);

        User::create([
            'firstname' => 'ako',
            'lastname' => 'gihapon',
            'username' => 'ayayka',
            'password' => bcrypt('p@ssword123'),
            'roleId' => 4,
        ]);

        User::create([
            'firstname' => 'Shannen',
            'lastname' => 'Antig',
            'username' => 'tester',
            'password' => bcrypt('password'),
            'roleId' => 5,
        ]);
    }
}
