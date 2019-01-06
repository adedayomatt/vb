<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Businesstag extends Model
{
    protected $fillable = ['name','description','slug'];
    
    public function businesses(){
        return $this->belongsToMany('App\Business');
    }

    public function description($mode = 'snippet'){
		if($mode === 'snippet'){
			return $this->description == null ? '<small class="text-danger" ><i class="fa fa-exclamation-triangle"></i> No description </small>': str_limit(strip_tags($this->description),50);
		}
		return $this->description == null ? '<small class="text-danger" ><i class="fa fa-exclamation-triangle"></i> No description </small>': $this->description;
	}

}
