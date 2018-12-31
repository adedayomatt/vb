<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BizSetting extends Model
{
    protected $fillable = ['business_id','theme'];
    
	function business(){
		return $this->belongsTo('App\Business');
	}
}
