<?php

use Illuminate\Database\Seeder;
use App\Models\Status;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Status::create([
            'statusName' => 'Waiting PM RA'
        ]);

        Status::create([
            'statusName' => 'Waiting Dev RA'
        ]);

        Status::create([
            'statusName' => 'Begin Development'
        ]);

        Status::create([
            'statusName' => 'Complete'
        ]);

    }
}
