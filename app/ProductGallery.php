<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductGallery extends Model
{
	protected $fillable = ['product_id','url','caption'];
	
	public function product(){
        return $this->belongsTo('App\Product');
    }

	public function gallery(){
		$image = array();
		$image['src'] = $this->url === null ? asset('storage/images/product/gallery/default.png') : asset('storage/images/product/gallery/'.$this->url);
		$image['alt'] = $this->product->name.' by '.$this->product->business->name.' on '.config('app.name');
		return $image;
	}
}
