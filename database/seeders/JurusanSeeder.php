<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jurusan;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jurusan = ['Teknik Sipil', 'Teknik Mesin', 'Teknik Elektro', 'Teknik Arsitektur','Ilmu Kelautan dan Perikanan','Teknologi Pertanian','Administrasi Bisnis','Akuntansi'];

        foreach ($jurusan as $key => $value) {
            # code...
            Jurusan::create([
                'nama_jurusan' => $value
            ]);
        }
    }
}
