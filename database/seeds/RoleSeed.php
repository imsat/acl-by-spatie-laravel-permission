<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class RoleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create(['name' => 'super-admin']);
        $role->givePermissionTo(Permission::all());

        $role = Role::create(['name' => 'admin']);
        $role->givePermissionTo('edit_articles', 'delete_articles', 'publish_articles', 'unpublish_articles');

        $role = Role::create(['name' => 'employee']);
        $role->givePermissionTo('publish_articles', 'unpublish_articles');

    }
}
