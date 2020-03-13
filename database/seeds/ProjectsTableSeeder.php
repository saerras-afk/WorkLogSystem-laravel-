<?php

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Project::create([
            'projectName' => 'noah',
            'created_by' => 'Adrianne Rosales'
        ]);
    }
}
