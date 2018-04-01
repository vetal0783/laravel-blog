<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

	public function category() {
		return $this->belongsTo(Category::class);
	}

	public function tags() {
		return $this->belongsToMany(Tag::class);
	}

	public function comments() {
		return $this->hasMany(Comment::class);
	}

	/**
	 * 
	 * @param type $user_id
	 * @return type
	 */
	public function getPosts($user_id) {
		if (empty($user_id)) {
			return [];
		}

		$posts = Post::where('user_id', '=', $user_id)
				->orderBy('id', 'desc')
				->paginate(10);

		return $posts;
	}

}
