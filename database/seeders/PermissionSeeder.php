<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        $siswaPermissions = [
            "project_access",
            "project_manage"
        ];

        $adminPermissions = [
            "project_access",
            "project_manage",
            "register_toggle",
            "siswa_access",
            "siswa_manage"
        ];

        $allPermission = array_unique(array_merge($siswaPermissions, $adminPermissions));

        foreach ($allPermission as $permission) {
            Permission::create([
                'name' => $permission,
            ]);
        }

        $role = Role::create(['name' => 'admin']);
        foreach ($adminPermissions as $permission) {
            $role->givePermissionTo($permission);
        }

        $role = Role::create(['name' => 'siswa']);
        foreach ($siswaPermissions as $permission) {
            $role->givePermissionTo($permission);
        }
    }
}
