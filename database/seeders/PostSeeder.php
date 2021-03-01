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
					'image' => 'image.jpg',
					'category_id' => 1,
					'slug'  => 'ini-judul-pertama',
					'created_at' => now(),
					'updated_at' => now(),
				]);
    }
}
