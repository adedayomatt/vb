<?php

namespace App\Traits;


trait GetResource
{
    
    // Get and return a resource either by its ID or slug
    protected function find($model,$identifier){
        if(is_numeric($identifier)){
            return $model::findorfail($identifier);
        }
        else if(is_string($identifier)){
            return $model::where('slug',$identifier)->firstorfail();
        }
    }

}
