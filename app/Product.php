<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $fillable = ['business_id','product_category_id','name','price','description','slug'];
	
	public function business(){
		return $this->belongsTo('App\Business');
	}
	public function category(){
		return $this->belongsTo('App\ProductCategory');
	}
	public function photos(){
		return $this->hasMany('App\ProductGallery');
	}
	public function tags(){
		return $this->belongsToMany('App\Producttag');
	}
}
