<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $fillable = ['business_id','product_category_id','name','price','description','slug','dp'];
	
	public function business(){
		return $this->belongsTo('App\Business');
	}
	public function ProductCategory(){
		return $this->belongsTo('App\ProductCategory');
	}
	public function category(){
		return $this->ProductCategory();
	}
	public function photos(){
		return $this->hasMany('App\ProductGallery');
	}
	public function tags(){
		return $this->belongsToMany('App\Producttag');
	}

//check if the product belong to a particular business
	public function ownedBy($business_id){
			return $this->business_id === $business_id ? true : false;
		}
		
		public function dp(){
			$image = array();
			$image['src'] = $this->dp === null ? asset('storage/images/product/dp/default.png') : asset('storage/images/product/dp/'.$this->dp);
			$image['alt'] = $this->name.' by '.$this->business->name.' on '.config('app.name');
			return $image;
		}
		
	public function description($mode = 'snippet'){
		if($mode === 'snippet'){
			return $this->description == null ? '<small class="text-danger" ><i class="fa fa-exclamation-triangle"></i> No description </small>': str_limit(strip_tags($this->description),50);
		}
		return $this->description == null ? '<small class="text-danger" ><i class="fa fa-exclamation-triangle"></i> No description </small>': $this->description;
	}



}
