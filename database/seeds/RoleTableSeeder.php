<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_loaner = new Role();
        $role_loaner->name = 'tech';
        $role_loaner->description = 'Technical Support user';
        $role_loaner->save();

        $role_admin = new Role();
        $role_admin->name = 'admin';
        $role_admin->description = 'an admin user';
        $role_admin->save();
        
    }
}
