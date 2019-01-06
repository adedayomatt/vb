<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductGallery;
use App\Matto\FileUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use App\Traits\ProductTrait;

class ProductGalleryController extends Controller
{
    use ProductTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($business,$product)
    {
        if(!$this->authorizedBusiness($business,$product)){
            return redirect()->intended($this->redirectTo())->with('info', 'You are not authorized!');
           }
           return view('product.gallery')->with('product',$this->getProduct($product));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $business,$product,$type)
    {
        if(!$this->authorizedBusiness($business,$product)){
            return redirect()->intended($this->redirectTo())->with('info', 'You are not authorized!');
           }

           $product = $this->getProduct($product);
           $rules = 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048';

           switch($type){
               case 'dp':
                       $this->validate($request,[
                           'display_photo' => $rules,
                       ]);
                       if($request->hasFile('display_photo')){
                       $upload = new FileUpload(
                                   $request,
                                   $name = 'display_photo',
                                   $title = str_slug($product->slug.' '.$business),
                                   $path = 'public/images/product/dp/'
                               );
                       $product->dp = isset($upload->slugs[0]) ? $upload->slugs[0] : null;
                       $product->save();
                       return redirect()->back()->with('info',$upload->report);
                   }
               break;
           
               case 'gallery':
                   $this->validate($request,[
                       'gallery[]' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5048'
                   ]);
                   $upload = new FileUpload($request,
                   $name='gallery',
                   $title = str_slug($product->slug.' '.$business),
                   $path = 'public/images/product/gallery'
                   );
                   if($upload->totalSuccess > 0 && count($upload->slugs) >0){
                       foreach($upload->slugs as $slug){
                           ProductGallery::create([
                               'product_id' => $product->id,
                               'url' => $slug
                           ]);
                       }
                   }
                   return redirect()->back()->with('info',$upload->report);
               break;
               
           }
       }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($business,$product)
    {
        if(!$this->authorizedBusiness($business,$product)){
            return redirect()->intended($this->redirectTo())->with('info', 'You are not authorized!');
           }
           
    }
}
