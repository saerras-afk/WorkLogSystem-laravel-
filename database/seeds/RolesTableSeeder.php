<?php

use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Role::create([
            'positionName' => 'Administrator',
        ]);

        Role::create([
            'positionName' => 'Project Manager',
        ]);

        Role::create([
            'positionName' => 'Scrum Master',
        ]);
        
        Role::create([
            'positionName' => 'Developer',
        ]);
        
        Role::create([
            'positionName' => 'Quality Assurance',
        ]);
    }
}
