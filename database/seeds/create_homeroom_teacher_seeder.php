<?php

use Illuminate\Database\Seeder;

class create_homeroom_teacher_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('homeroom_teacher')->insert([
        	'id_homeroom_teacher' => '2',
            'user_id' => '2',
        	'class_id' => '1'
        ]);

    }
}
