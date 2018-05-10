<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Permission::create(['name' => 'users_manage']);
        Permission::create(['name' => 'edit_articles']);
        Permission::create(['name' => 'delete_articles']);
        Permission::create(['name' => 'publish_articles']);
        Permission::create(['name' => 'unpublish_articles']);
    }
}
