<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'admin',
            'display_name' => 'Admin'
        ]);

        Role::create([
            'name' => 'core'
        ]);

        Role::create([
            'name' => 'leader',
            'display_name' => 'Leader'
        ]);

        Role::create([
            'name' => 'vice',
            'display_name' => 'Vice Leader'
        ]);

        Role::create([
            'name' => 'sekretaris',
            'display_name' => 'Secretary'
        ]);

        Role::create([
            'name' => 'bendahara',
            'display_name' => 'Treasure'
        ]);

        Role::create([
            'name' => 'kadiv',
            'display_name' => 'Head Of'
        ]);

        Role::create([
            'name' => 'commitee',
            'display_name' => 'Staff Of'
        ]);

        Role::create([
            'name' => 'pr',
            'display_name' => 'Public Relation Division'
        ]);

        Role::create([
            'name' => 'mdd',
            'display_name' => 'Member Development Division'
        ]);

        Role::create([
            'name' => 'eo',
            'display_name' => 'Event Organizer Division'
        ]);

        Role::create([
            'name' => 'edu',
            'display_name' => 'Education Division'
        ]);

        Role::create([
            'name' => 'ranger',
            'display_name' => 'Ranger'
        ]);

        Role::create([
            'name' => 'new',
            'display_name' => 'New Ranger'
        ]);
    }
}
