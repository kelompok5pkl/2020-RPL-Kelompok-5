<?php

use Illuminate\Database\Seeder;

class SavingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('savings')->insert([
        	'id_class' => '1',
        	'nominal' => '2000',
        	'status' => 'sudah menabung'
        ]);
    }
}
