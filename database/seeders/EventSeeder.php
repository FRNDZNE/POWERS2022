<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Event::create([
            'nama' => 'Powers Seminar 2022',
            'tanggal' => '2022-07-30',
            'tempat' => 'Aula Rumah Dinas Wakil Walikota',
            'foto' => 'belum ada'
        ]);
    }
}
