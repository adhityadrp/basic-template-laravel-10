<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $resources = [
            'user', 'role', 'permission', 
            // 'rekap', 'absen',
            // 'pegawai', 'divisi', 'posisi',
            // 'kehadiran', 'dokumen', 'inventaris',
            // 'gaji', 'bio_pegawai', 'user_profile', 'bio_user',
        ];
        
        $functions = ['create', 'update', 'read', 'delete'];
        $guards = ['web'];
        foreach ($guards as $guard) {
            foreach ($resources as $resource) {
                foreach ($functions as $function) {
                    Permission::updateOrCreate(['name' => $function .'-'. $resource, 'guard_name' => $guard]);
                }
            }
        }
    }
}
