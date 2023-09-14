<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class PermissionsSeeder extends Seeder
{
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // Create default permissions
        Permission::create(['name' => 'list associes']);
        Permission::create(['name' => 'view associes']);
        Permission::create(['name' => 'create associes']);
        Permission::create(['name' => 'update associes']);
        Permission::create(['name' => 'delete associes']);

        Permission::create(['name' => 'list conjoints']);
        Permission::create(['name' => 'view conjoints']);
        Permission::create(['name' => 'create conjoints']);
        Permission::create(['name' => 'update conjoints']);
        Permission::create(['name' => 'delete conjoints']);

        Permission::create(['name' => 'list gerants']);
        Permission::create(['name' => 'view gerants']);
        Permission::create(['name' => 'create gerants']);
        Permission::create(['name' => 'update gerants']);
        Permission::create(['name' => 'delete gerants']);

        Permission::create(['name' => 'list allinfos']);
        Permission::create(['name' => 'view allinfos']);
        Permission::create(['name' => 'create allinfos']);
        Permission::create(['name' => 'update allinfos']);
        Permission::create(['name' => 'delete allinfos']);

        Permission::create(['name' => 'list leveefonds']);
        Permission::create(['name' => 'view leveefonds']);
        Permission::create(['name' => 'create leveefonds']);
        Permission::create(['name' => 'update leveefonds']);
        Permission::create(['name' => 'delete leveefonds']);

        Permission::create(['name' => 'list profiles']);
        Permission::create(['name' => 'view profiles']);
        Permission::create(['name' => 'create profiles']);
        Permission::create(['name' => 'update profiles']);
        Permission::create(['name' => 'delete profiles']);

        Permission::create(['name' => 'list societes']);
        Permission::create(['name' => 'view societes']);
        Permission::create(['name' => 'create societes']);
        Permission::create(['name' => 'update societes']);
        Permission::create(['name' => 'delete societes']);

        // Create user role and assign existing permissions
        $currentPermissions = Permission::all();
        $userRole = Role::create(['name' => 'user']);
        $userRole->givePermissionTo($currentPermissions);

        // Create admin exclusive permissions
        Permission::create(['name' => 'list roles']);
        Permission::create(['name' => 'view roles']);
        Permission::create(['name' => 'create roles']);
        Permission::create(['name' => 'update roles']);
        Permission::create(['name' => 'delete roles']);

        Permission::create(['name' => 'list permissions']);
        Permission::create(['name' => 'view permissions']);
        Permission::create(['name' => 'create permissions']);
        Permission::create(['name' => 'update permissions']);
        Permission::create(['name' => 'delete permissions']);

        Permission::create(['name' => 'list users']);
        Permission::create(['name' => 'view users']);
        Permission::create(['name' => 'create users']);
        Permission::create(['name' => 'update users']);
        Permission::create(['name' => 'delete users']);

        // Create admin role and assign all permissions
        $allPermissions = Permission::all();
        $adminRole = Role::create(['name' => 'super-admin']);
        $adminRole->givePermissionTo($allPermissions);

        $user = \App\Models\User::whereEmail('admin@admin.com')->first();

        if ($user) {
            $user->assignRole($adminRole);
        }
    }
}
