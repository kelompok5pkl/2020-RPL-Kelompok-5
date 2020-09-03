<?php

use Illuminate\Database\Seeder;

class create_student_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('students')->insert([
            'id_student'  => 1,
            'class_id' => 1,
        	'nisn' => '181910001',
        	'name_student' => 'Elsa Susilawati',
        	
        ]);
        
        DB::table('students')->insert([   
            'id_student'  => 2,
            'class_id' => 1,
            'nisn' => '181910002',
        	'name_student' => 'Rismawati ',
        

        ]);

    }
}
