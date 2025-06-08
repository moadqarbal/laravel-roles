<?php

namespace Database\Seeders;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'manage users']);
        Permission::create(['name' => 'manage roles']);
        Permission::create(['name' => 'manage products']);

        $admin = Role::create(['name' => 'admin']);
        $admin->givePermissionTo(['manage users', 'manage roles', 'manage products']);

        $user = Role::create(['name' => 'user']);
        $user->givePermissionTo(['manage products']);
    }

    
}
