<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceGallery extends Model
{
	protected $fillable = ['service_id','url','caption'];
	
	public function service(){
        return $this->belongsTo('App\Service');
    }
}
