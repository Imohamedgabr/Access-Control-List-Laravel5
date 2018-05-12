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
        $role_user = new Role();
        $role_user->name = 'User';
        $role_user->description = 'A normal User';
        $role_user->save();

        $role_Sho2oon = new Role();
        $role_Sho2oon->name = 'Sho2oon';
        $role_Sho2oon->description = 'Sho2oon User';
        $role_Sho2oon->save();

        $role_Tamreed = new Role();
        $role_Tamreed->name = 'Tamreed';
        $role_Tamreed->description = 'Tamreed User';
        $role_Tamreed->save();

        $role_admin = new Role();
        $role_admin->name = 'Admin';
        $role_admin->description = 'An Admin';
        $role_admin->save();
    }
}
