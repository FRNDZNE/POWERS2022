<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([
            'name' => 'yes',
            'display_name' => 'Diterima'
        ]);

        Permission::create([
            'name' => 'no',
            'display_name' => 'Belum Diterima'
        ]);
    }
}
