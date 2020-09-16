<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$role=new Role();
        $role->name='Admin';

       	$role->save();

       	$role1=new Role();
        $role1->name='Teacher';
        $role1->save();
        
        $role2=new Role();
        $role2->name='User';
        $role2->save();
    }
}
