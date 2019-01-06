<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceGallery extends Model
{
	protected $fillable = ['service_id','url','caption'];
	
	public function service(){
        return $this->belongsTo('App\Service');
    }

    public function gallery(){
		$image = array();
		$image['src'] = $this->url === null ? asset('storage/images/service/gallery/default.png') : asset('storage/images/service/gallery/'.$this->url);
		$image['alt'] = $this->service->name.' by '.$this->service->business->name.' on '.config('app.name');
		return $image;
	}

}
