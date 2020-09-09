<?php

use Illuminate\Database\Seeder;

class create_majors_table extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('majors')->insert([
        	'id_majors' => '1',
        	'majors_name' => 'Rekayasa Perangkat Lunak'
        ]);
        DB::table('majors')->insert([
            'id_majors' => '2',
            'majors_name' => 'Multimedia'
        ]);

    }
}
