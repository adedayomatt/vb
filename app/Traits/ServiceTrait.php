<?php

namespace App\Traits;

use App\Service;
use App\Traits\GetResource;
use App\Traits\BusinessTrait;
use Illuminate\Support\Facades\Auth;

trait ServiceTrait
{
    use GetResource,BusinessTrait;
    
    // Get and return the product resource either by ots ID or slug
    protected function getService($identifier){
        return $this->find(Service::class,$identifier);
    }

    // check if the authenticated vendor is the owner of the business and product
    
    /**
     * @param mixed $business business id/slug to verify
     * @param mixed $service service id/slug to verify
     */
    protected function authorizedBusiness($service,$product)
    {
       return $this->getBusiness($business)->ownedBy(Auth::guard('vendor')->id())
                &&
                $this->getService($service)->ownedBy(Auth::guard('vendor')->user()->business->id) ? true : false;
    }

    //where to redirect to when acceess is denied
    protected function redirectTo(){
        return route('home');
    }

    protected function validationRules(){
        return [
            'service_name' => ['required'],
            'category' => ['required'],
            'description' => [],
        ];
    }
}
