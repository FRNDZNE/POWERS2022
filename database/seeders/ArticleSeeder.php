<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::create([
            'event_id' => 1,
            'penulis' => 'Wahyu Rizky Ramadhan',
            'isi' => 'lorem lorem'
        ]);
    }
}
