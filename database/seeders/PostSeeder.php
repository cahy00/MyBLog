<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
				Post::insert([
					'title' => 'ini judul pertama',
					'body'  => 'ini adalah isi dari judul pertama mohon maklum',
					'image' => 'Screenshot from 2021-01-21 19-49-24.png',
					'category_id' => 1,
					'slug'  => 'ini-judul-pertama'
				]);
    }
}
