<?php

namespace App\Traits;

use App\Product;
use App\Traits\GetResource;
use App\Traits\BusinessTrait;
use Illuminate\Support\Facades\Auth;

trait ProductTrait
{
    use GetResource,BusinessTrait;
    
    // Get and return the product resource either by ots ID or slug
    protected function getProduct($identifier){
        return $this->find(Product::class,$identifier);
    }

    // check if the authenticated vendor is the owner of the business and product
    /**
     * @param mixed business pusiness id/slug to verify
     * @param mixed product product id/slug to verify
     */
    protected function authorizedBusiness($business,$product)
    {
       return $this->getBusiness($business)->ownedBy(Auth::guard('vendor')->id())
                &&
                $this->getProduct($product)->ownedBy(Auth::guard('vendor')->user()->business->id) ? true : false;
    }

    //where to redirect to when acceess is denied
    protected function redirectTo(){
        return route('home');
    }

    protected function validationRules(){
        return [
            'product_name' => ['required'],
            'category' => ['required'],
            'description' => [],
            'price' => ['required']
        ];
    }
}
