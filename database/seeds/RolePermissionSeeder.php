<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                $roleSuperAdmin = Role::create(['name' => 'superadmin']);
                $roleAdmin = Role::create(['name' => 'admin']);
                $roleEditor = Role::create(['name' => 'editor']);
                $roleUser = Role::create(['name' => 'user']);


                // Prmissions list as array
            $permissions = [
                // Dashboard Permissions
                    'dashboard.view',

                //Blog permissions
                    'blog.create',
                    'blog.view',
                    'blog.edit',
                    'blog.delete',
                    'blog.approve',
                //admin permissions
                    'admin.create',
                    'admin.view',
                    'admin.edit',
                    'admin.delete',
                    'admin.approve',

                //role permissions
                    'role.create',
                    'role.view',
                    'role.edit',
                    'role.delete',
                    'role.approve',

                //profile permissions
                    'profile.view',
                    'profile.edit',


            ];


                // Create & Assign Permissions



                    for ($i=0; $i < count($permissions) ; $i++) {
                        // Create Permission
                        $permission = Permission::create(['name' => $permissions[$i]]);
                        $roleSuperAdmin->givePermissionTo($permission);
                        $permission->assignRole($roleSuperAdmin);
                    }


    }
}
