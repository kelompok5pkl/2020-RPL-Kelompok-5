<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
        			['id' =>'1','name' => 'admin','guard_name' => 'web',],
        			['id' =>'2','name' => 'guru','guard_name' => 'web',],
        		 ];
        \Spatie\Permission\Models\Role::insert($users);
    }
}
