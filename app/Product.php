<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;

class Product extends Model
{
	use SearchableTrait;

	protected $fillable = ['business_id','category_id','name','price','description','slug','dp'];
	
	protected $searchable = [
		 'columns' => [
				'products.name' => 10,
				'products.description' => 10,
				'products.price' => 10,
				'businesses.name' =>8,
		],
		'joins' => [
			'businesses' => ['products.business_id','businesses.id']
		]
	];
	
	public function business(){
		return $this->belongsTo('App\Business');
	}
	public function category(){
		return $this->belongsTo('App\Category');
	}

	public function photos(){
		return $this->hasMany('App\ProductGallery');
	}
	public function tags(){
		return $this->belongsToMany('App\Tag');
	}

	public function relatedProducts(){
		$discussions = collect([]);
		$related_discussions = $discussions;

		foreach($this->tagIDs() as $tag){//Get other discussion that has the tags
			$discussion_IDs = array();
		   $IDs = DB::select("select discussion_id from discussion_tag where tag_id='$tag'");
		   foreach($IDs as $id){
			if($this->id !== $id->discussion_id) {
				array_push($discussion_IDs,$id->discussion_id);
			}  
		   }
			$related_discussions = $discussions->merge(Discussion::whereIn('id',$discussion_IDs)->get());
		}
	return $related_discussions;
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
			return $this->description == null ? '<small class="text-danger" ><i class="fa fa-exclamation-triangle"></i> No description </small>': str_limit(strip_tags($this->description),200);
		}
		return $this->description == null ? '<small class="text-danger" ><i class="fa fa-exclamation-triangle"></i> No description </small>': $this->description;
	}



}
