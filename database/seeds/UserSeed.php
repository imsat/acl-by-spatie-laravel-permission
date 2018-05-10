<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 =  User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@gmail.com',
            'password' => bcrypt('123456')
        ]);
        $user1->assignRole('super-admin');
        $roles1 = $user1->roles;
        foreach ($roles1 as $role)
        {
            $permissions = $role->permissions;
            $user1->givePermissionTo($permissions);
        }
        $user2 =  User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456')
        ]);
        $user2->assignRole('admin');
        $roles2 = $user1->roles;
        foreach ($roles2 as $role)
        {
            $permissions = $role->permissions;
            $user2->givePermissionTo($permissions);
        }


        $user3 =  User::create([
            'name' => 'Employee',
            'email' => 'employe@gmail.com',
            'password' => bcrypt('123456')
        ]);
        $user3->assignRole('employee');
        $roles3 = $user1->roles;
        foreach ($roles3 as $role)
        {
            $permissions = $role->permissions;
            $user3->givePermissionTo($permissions);
        }

    }
}
