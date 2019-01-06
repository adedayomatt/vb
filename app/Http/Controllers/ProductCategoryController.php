<?php

namespace App\Http\Controllers;

use App\ProductCategory;
use App\Traits\GetResource;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    use GetResource;
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('product.category.index')->with('productcategories',ProductCategory::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'category_name' => ['required','unique:productcategories']
        ]);
        $category = new ProductCategory();
        $category->name = $request->category_name;
        $category->description = $request->description;
        $category->slug = str_slug($request->category_name);
        $category->save();

        return redirect()->route('product.category.show',[$category->slug])->with('success','New product category created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('product.category.show')->with('productcategory',$this->find(ProductCategory::class,$id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('product.category.edit')->with('productcategory',$this->find(ProductCategory::class,$id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'category_name' => ['required','unique:productcategories']
        ]);
        $category = $this->find(ProductCategory::class,$id);
        $category->name = $request->category_name;
        $category->description = $request->description;
        $category->slug = str_slug($request->category_name);
        $category->save();

        return redirect()->route('biz.category.show',[$category->slug])->with('success',$category->name.' updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
