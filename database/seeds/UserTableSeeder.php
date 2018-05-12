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
        $role_user = Role::where('name', 'User')->first();
        $role_sho2oon = Role::where('name', 'Sho2oon')->first();
        $role_tamreed = Role::where('name', 'Tamreed')->first();
        $role_admin = Role::where('name', 'Admin')->first();

        $user = new User();
        $user->first_name = 'Mohamed';
        $user->last_name = 'User';
        $user->email = 'visitor@example.com';
        $user->password = bcrypt('visitor');
        $user->save();
        $user->roles()->attach($role_user);


        $sho2oon = new User();
        $sho2oon->first_name = 'Ahmed';
        $sho2oon->last_name = 'Sho2oon';
        $sho2oon->email = 'sho2oon@sho2oon.com';
        $sho2oon->password = bcrypt('sho2oon226');
        $sho2oon->save();
        $sho2oon->roles()->attach($role_sho2oon);


        $tamreed = new User();
        $tamreed->first_name = 'Esraa';
        $tamreed->last_name = 'Tamred';
        $tamreed->email = 'tamreed@tamreed.com';
        $tamreed->password = bcrypt('tamreed226');
        $tamreed->save();
        $tamreed->roles()->attach($role_tamreed);

        $admin = new User();
        $admin->first_name = 'Jermeen';
        $admin->last_name = 'Admin';
        $admin->email = 'jermeen@admin.com';
        $admin->password = bcrypt('jermeen7335');
        $admin->save();
        $admin->roles()->attach($role_admin);

        
    }
}
