<?php

namespace FreeTimeLtd\HomeManager\Core\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Enums\Roles;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    const ROLES = [
        'admin', 'manager', 'tenant', 'guest'
    ];

    const PERMISSIONS = [
        'view-house' => ['admin', 'manager', 'tenant'],
        'edit-house' => ['admin', 'manager'],
        'view-appartment' => ['admin', 'manager', 'tenant'],
        'edit-appartment' => ['admin', 'manager'],
        'view-roles-permissions' => ['admin'],
        'edit-roles-permissions' => ['admin'],
        'view-profiles' => ['admin', 'manager'],
        'edit-profiles' => ['admin', 'manager'],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = collect();

        foreach (static::ROLES as $roleName) {
            $roles->put($roleName, Role::create(['name' => $roleName]));
        }

        foreach (static::PERMISSIONS as $rule => $roleList) {
            $permission = Permission::create(['name' => $rule]);

            foreach ($roleList as $roleName) {
               $role = $roles->get($roleName);
                if (!is_null($role)) {
                    $permission->assignRole($role);
                }
            }
        }
    }
}
