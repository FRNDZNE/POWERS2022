<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@powers.com',
            'password' => bcrypt('rahasia'),
            'jurusan_id' => 1,
            'prodi_id' => 1
        ]);

        $admin->attachRole('admin');
        $admin->attachPermission('yes');

    }
}
