<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tag;
use Illuminate\Support\Str;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
			
        $tag = New Tag;
				$tag->tag_name = 'marketing';
				$tag->post_id = 2;
				$tag->slug = Str::slug($tag->tag_name);
				$tag->save();

    }
}
