<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
	protected $fillable=[
		'file',
		'image_size'
	];
	
	protected $uploads = '/laravel-project/public/images/';
	
	
	public function getFileAttribute($photo){
		return $this->uploads . $photo;
	}
	
	
}
