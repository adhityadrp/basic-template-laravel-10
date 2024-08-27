<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create([
            'name' => 'Admin',
            // 'team_id' => 1
        ]);
        $permission = Permission::all();
        $admin->syncPermissions($permission);
        Role::create([
            'name' => 'User',
            // 'team_id' => 1
        ]);
    }
}
