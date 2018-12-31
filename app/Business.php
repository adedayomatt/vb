<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
	protected $fillable = ['vendor_id','business_category_id','name','description','address','email','phone1','phone2','slug','coverphoto','avatar'];

	public function vendor(){
		return $this->belongsTo('App\Vendor');
	}
	public function products(){
		return $this->hasMany('App\Product');
    }
    public function services(){
		return $this->hasMany('App\Service');
	}
	public function category(){
		return $this->belongsTo('App\BusinessCategory');
    }
    public function tags(){
		return $this->belongsToMany('App\Businesstag');
    }
    public function photos(){
		return $this->hasMany('App\BusinessGallery');
	}

	public function settings(){
		return $this->hasOne('App\BizSetting');
	}
}
