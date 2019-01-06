<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusinessGallery extends Model
{
	protected $fillable = ['business_id','url','caption'];
	
	public function business(){
        return $this->belongsTo('App\Business');
    }

	public function gallery(){
		$image = array();
		$image['src'] = $this->url === null ? asset('storage/images/business/gallery/default.png') : asset('storage/images/business/gallery/'.$this->url);
		$image['alt'] = $this->business->name.' on '.config('app.name');
		return $image;
	}
}
