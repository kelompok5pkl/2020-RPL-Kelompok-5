<?php

use Illuminate\Database\Seeder;

class MajorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('majors')->insert([
        	['majors_name' => 'RPL'],
            ['majors_name' => 'MM']

        ]);
    }
}
