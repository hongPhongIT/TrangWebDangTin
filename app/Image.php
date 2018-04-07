<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
    	'post_id','url'
    ];

    public function product() {
    	return $this->belongsTo('App\Product');
    }
}
