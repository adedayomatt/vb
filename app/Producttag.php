<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producttag extends Model
{
    protected $fillable = ['name','description','slug'];
    
    public function products(){
        return $this->belongsToMany('App\Product');
    }

    public function description($mode = 'snippet'){
		if($mode === 'snippet'){
			return $this->description == null ? '<small class="text-danger" ><i class="fa fa-exclamation-triangle"></i> No description </small>': str_limit(strip_tags($this->description),50);
		}
		return $this->description == null ? '<small class="text-danger" ><i class="fa fa-exclamation-triangle"></i> No description </small>': $this->description;
	}

}
