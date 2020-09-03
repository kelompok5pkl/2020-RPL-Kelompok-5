<?php

use Illuminate\Database\Seeder;

class create_saving_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('savings')->insert([
            'id_saving' => '1',
            'class_id' => '1',
            'id_teacher' => '2',
        	'id_student' => '1',
        	'nominal' => '2000'
        ]);
        DB::table('savings')->insert([
            'id_saving' => '2',
            'class_id' => '1',
            'id_teacher' => '2',
            'id_student' => '2',
            'nominal' => '2000'
        ]);
    }
}
