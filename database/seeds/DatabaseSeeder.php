<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ProjectsTableSeeder::class);
        $this->call(SprintsTableSeeder::class);
        $this->call(StatusesTableSeeder::class);
        $this->call(PrioritiesTableSeeder::class);
    }
}
