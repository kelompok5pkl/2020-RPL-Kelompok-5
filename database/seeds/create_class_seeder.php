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
        DB::table('class')->insert([
            'id' => '1',
            'id_majors'  => '1',
        	'class_name' => 'XII Rekayasa Perangkat Lunak']);
            

        DB::table('class')->insert([
            'id'    => '2',
            'id_majors'   => '2',
            'class_name' => 'XII Multimedia' ]);
    }
}
