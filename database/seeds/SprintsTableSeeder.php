<?php

use Illuminate\Database\Seeder;
use App\Models\Sprint;

class SprintsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Sprint::create([
            'sprintNo' => 'sprint 1',
            'startDate' => new DateTime(),
            'releaseDate' => new DateTime(),
        ]);
    }
}
