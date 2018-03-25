<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

	public function category() {
		return $this->belongsTo('App\Category');
	}

	public function tags() {
		return $this->belongsToMany('App\Tag');
	}

	public function comments() {
		return $this->hasMany('App\Comment');
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
