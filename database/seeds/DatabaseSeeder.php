<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // urutan Multi Auth
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ModelHasRoleSeeder::class);

        // urutan dataseeder
         $this->call(create_majors_table::class);
         $this->call(create_class_seeder::class);
         $this->call(create_student_seeder::class);
         $this->call(create_homeroom_teacher_seeder::class);
         $this->call(create_saving_seeder::class);
        
    }
}
