<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role_tech = Role::where('name', 'tech')->first();
        $role_admin = Role::where('name', 'admin')->first();

        $adminUser = new User();
        $adminUser->name = "Admin User";
        $adminUser->email = "i.thomson@ljmu.ac.uk";
        $adminUser->password = bcrypt('secret');
        $adminUser->save();
        $adminUser->roles()->attach($role_admin);

        $techUser = new User();
        $techUser->name = "Tech User";
        $techUser->email = "tech@tech.com";
        $techUser->password = bcrypt('secret');
        $adminUser->save();
        $adminUser->roles()->attach($role_tech);

    }
}
