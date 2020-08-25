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
            'id_student'  => '1',
        	'nisn' => '181910001',
        	'name_student' => 'Elsa Susilawati',
        	'class_student' => '1'
        ]);
        
        DB::table('students')->insert([   
            'id_student'  => '2',
            'nisn' => '181910002',
        	'name_student' => 'Rismawati ',
        	'class_student' => '1'

        ]);

        DB::table('students')->insert([   
            'id_student'  => '3',
            'nisn' => '181910003',
            'name_student' => 'Muhammad Al-Fajri ',
            'class_student' => '1'

        ]); 

        DB::table('students')->insert([      
            'id_student'  => '4',
            'nisn' => '181910004',
            'name_student' => 'Bowie Sambora ',
            'class_student' => '1'

        ]);

        DB::table('students')->insert([ 
            'id_student'  => '5',
            'nisn' => '181910005',
            'name_student' => 'Indra Agus N ',
            'class_student' => '1'

        ]);

        DB::table('students')->insert([  
            'id_student'  => '6',
            'nisn' => '181910006',
            'name_student' => 'Sumiartini Sri Rahayu ',
            'class_student' => '1'

        ]);

        DB::table('students')->insert([     
            'id_student'  => '7',
            'nisn' => '181910007',
            'name_student' => 'Aulia Rahma Nursalam ',
            'class_student' => '1'

        ]);

        DB::table('students')->insert([     
            'id_student'  => '8',
            'nisn' => '181910008',
            'name_student' => 'Dede Suminar',
            'class_student' => '1'
        ]);

    }
}
