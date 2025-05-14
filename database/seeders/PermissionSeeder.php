<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = config('permissions.groups');

        foreach ($permissions as $group => $data) {
            foreach ($data['permissions'] as $permission) {
                Permission::firstOrCreate([
                    'name' => $group.'.'.$permission,
                    'guard_name' => 'web'
                ]);
            }
        }

        // Create admin role
        $adminRole = Role::firstOrCreate(['name' => 'Super Admin']);
        $adminRole->syncPermissions(Permission::all());
    }
}
