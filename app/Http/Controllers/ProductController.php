<?php

namespace App\Http\Controllers;

use App\Product;
use App\Traits\ProductTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Matto\FileUpload;


class ProductController extends Controller
{
    use ProductTrait;

    public function __construct(){
        $this->middleware(['auth:vendor','verifiedvendor'])->except(['search','index','show']);
    }

    public function search(Request $request){
        $keyword = $request->get('q');
        $from = $request->get('in');
        if($from !== null){
            $business = $this->getBusiness($from);
            return Product::where('business_id',$business->id)->search($keyword)->with('business')->get();
        }
        return Product::search($keyword)->with('business')->get();
        }

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('product.index')->with('products',Product::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($business)
    {
        if(!$this->authorizedVendor($business)){
            return redirect()->intended($this->redirectTo())->with('info', 'You are not authorized!');
        }
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $business)
    {
        if(!$this->authorizedVendor($business)){
            return redirect()->intended($this->redirectTo())->with('info', 'You are not authorized!');
        }
        
        $this->validate($request, $this->validationRules());

        $product = new Product();
        $product->business_id = Auth::guard('vendor')->user()->business->id;
        $product->category_id = $request->category;
        $product->name = $request->product_name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->slug = $this->generateSlug(Product::class,$request->product_name);
        $product->save();

        $product->tags()->attach($request->tags);

        return redirect()->route('edit.product.gallery',[Auth::guard('vendor')->user()->business->slug,$product->slug])->with('new','true');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($business,$product)
    {
        return view('themes.m4u.single-product')->with('product',$this->getProduct($product));
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
        return view('product.edit')->with('product',$this->getProduct($product));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $business,$product)
    {
        if(!$this->authorizedBusiness($business,$product)){
            return redirect()->intended($this->redirectTo())->with('info', 'You are not authorized!');
        }

        $this->validate($request, $this->validationRules());
        $product =$this->getProduct($product);
        $product->category_id = $request->category;
        $product->name = $request->product_name;
        $product->description = $request->description;
        $product->price = $request->price;
        $newSlug = $this->updateSlug($product,$request->product_name);
        $product->slug =  $newSlug;
        $product->save();

        if($request->exists('tags')){
            $product->tags()->sync($request->tags);
        }

        return redirect()->route('biz.product.show', [$product->business->slug,$newSlug]);
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
