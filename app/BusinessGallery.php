<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusinessGallery extends Model
{
	protected $fillable = ['business_id','url','caption'];
	
	public function business(){
        return $this->belongsTo('App\Business');
    }

    public function url(){
        return asset('storage/images/business/gallery/'.$this->url);
    }
}
