<?php

namespace App\Traits;

use App\Business;
use App\Traits\GetResource;
use Illuminate\Support\Facades\Auth;

trait BusinessTrait
{
    use GetResource;
    // Get and return the business resource either by ots ID or slug
    protected function getBusiness($identifier){
       return $this->find(Business::class,$identifier);
    }

    // check if the authenticated vendor can access the resource
    /**
     * @param id Business id/slug to verify
     */
    protected function authorizedVendor($business)
    {
        return $this->getBusiness($business)->ownedBy(Auth::guard('vendor')->id());
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
