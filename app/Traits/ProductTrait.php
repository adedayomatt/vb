<?php

namespace App\Traits;

use App\Business;
use Illuminate\Support\Facades\Auth;

trait BusinessTrait
{
    // Get and return the business resource either by ots ID or slug
    protected function getBusiness($identifier){
        if(is_numeric($identifier)){
            return Business::findorfail($identifier);
        }
        else if(is_string($identifier)){
            return Business::where('slug',$identifier)->firstorfail();
        }
    }

    // check if the authenticated vendor can access the resource
    protected function authorized($id){
        if(Auth::guard('vendor')->user()->business->id === $this->getBusiness($id)->id){
            return true;
        }
        return false;
    }

    //where to redirect to when acceess is denied
    protected function redirectTo(){
        return route('home');
    }
    protected function validationRules(){
        return [
            'business_name' => ['required'],
            'category' => ['required'],
            'description' => [],
            'business_address' => ['required'],
            'email' => ['required','email',''],
            'phone' => ['required'],
            'alternative_phone_no' => [],
            'slug' => ['required','']
        ];
    }
}
