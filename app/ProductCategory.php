<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
	protected $fillable = ['name','description','slug'];
	
	public function products(){
		return $this->hasMany('App\Product');
	}
	
	public function description($mode = 'snippet'){
		if($mode === 'snippet'){
			return $this->description == null ? '<small class="text-danger" ><i class="fa fa-exclamation-triangle"></i> No description </small>': str_limit(strip_tags($this->description),50);
		}
		return $this->description == null ? '<small class="text-danger" ><i class="fa fa-exclamation-triangle"></i> No description </small>': $this->description;
	}

}
