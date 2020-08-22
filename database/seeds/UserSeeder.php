<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        'id' 	=> '1',
        'name'	=> 'Admin',
        'email'	=> 'admin@gmail.com',
        'password' => Hash::make('123'),
        ]);

        DB::table('users')->insert([
        'id' 	=> '2',
        'name'	=> 'Guru',
        'email'	=> 'guru@gmail.com',
        'password' => Hash::make('123'),
        ]);
    }
}
