<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Progja;

class ProgjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Progja::create([
            'divisi_id' => 1,
            'nama' => 'Training PR',
            'desc' => 'Pelatihan anggota Public Relation',
            'foto' => 'belum ada'
        ]);
    }
}
