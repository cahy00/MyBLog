<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
		protected $guarded = [];

		// public function categories()
		// {
		// 	return $this->hasOne(Category::class);
		// }

		public function tags()
		{
			return $this->hasMany(Tag::class);
		}

		
}
