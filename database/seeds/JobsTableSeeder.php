<?php

use Illuminate\Database\Seeder;
use DB;


class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jobs')->insert([
            'name' => str_random(10),
            'detials' => str_random(10),
            'numVecance' => 4,
        ]);
    }
}
