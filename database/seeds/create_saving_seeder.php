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
        	'id_students' => '1',
        	'id_class' => '1',
        	'nominal' => '2000'
        ]);

        DB::table('savings')->insert([

            'id_saving' => '2',
            'id_students' => '2',
            'id_class' => '1',
            'nominal' => '1000'
        ]);

        DB::table('savings')->insert([

            'id_saving' => '3',
            'id_students' => '3',
            'id_class' => '1',
            'nominal' => '10000'

        ]);

        DB::table('savings')->insert([
            'id_saving' => '4',
            'id_students' => '4',
            'id_class' => '2',
            'nominal' => '10000'
        ]);

        DB::table('savings')->insert([
            'id_saving' => '5',
            'id_students' => '5',
            'id_class' => '2',
            'nominal' => '10000'
        ]);

        DB::table('savings')->insert([
            'id_saving' => '6',
            'id_students' => '6',
            'id_class' => '2',
            'nominal' => '10000'

        ]);

        DB::table('savings')->insert([
            'id_saving' => '7',
            'id_students' => '7',
            'id_class' => '3',
            'nominal' => '10000'

        ]);
        DB::table('savings')->insert([

            'id_saving' => '8',
            'id_students' => '8',
            'id_class' => '3',
            'nominal' => '10000'


        ]);
    }
}
