<?php

use Illuminate\Database\Seeder;

class create_class_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classes')->insert([
            'class_id' => '1',
            'id_majors'  => '1',
        	'class_name' => 'XII Rekayasa Perangkat Lunak 1'
        ]);
            
        DB::table('classes')->insert([
            'class_id' => '2',
            'id_majors'  => '1',
            'class_name' => 'XII Rekayasa Perangkat Lunak 2'
        ]);


    }
}
