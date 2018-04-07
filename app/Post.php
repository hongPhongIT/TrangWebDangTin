<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
    	'text','title','description'
     ];

    public function images(){
    	return $this->hasMany('App\Image');
     }

}
