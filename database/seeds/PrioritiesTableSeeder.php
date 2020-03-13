<?php

use Illuminate\Database\Seeder;
use App\Models\Priority;

class PrioritiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Priority::create([
            'priorityName' => 'Critical'
        ]);

        Priority::create([
            'priorityName' => 'High'
        ]);

        Priority::create([
            'priorityName' => 'Medium'
        ]);

        Priority::create([
            'priorityName' => 'Low'
        ]);
    }
}
