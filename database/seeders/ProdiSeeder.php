<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Prodi;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sipil = ['D3 - Teknik Sipil','D4 - Perencanaan Perumahan dan Pemukiman'];
        $elektro = ['D3 - Teknik Listrik' , 'D4 - Teknik Elektronika' , 'D3 - Teknik Informatika'];

        foreach ($sipil as $key => $value) {
            Prodi::create([
                'jurusan_id' => 1,
                'nama_prodi' => $value
            ]);
        }

        foreach ($elektro as $key => $value) {
            Prodi::create([
                'jurusan_id' => 3,
                'nama_prodi' => $value
            ]);
        }
    }
}
