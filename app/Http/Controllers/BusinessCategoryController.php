<?php

namespace App\Http\Controllers;

use App\BusinessCategory;
use App\Traits\GetResource;
use Illuminate\Http\Request;

class BusinessCategoryController extends Controller
{
    use GetResource;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('business.category.index')->with('businesscategories',BusinessCategory::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('business.category.create');
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
            'category_name' => ['required','unique:businesscategories']
        ]);
        $category = new BusinessCategory();
        $category->name = $request->category_name;
        $category->description = $request->description;
        $category->slug = str_slug($request->category_name);
        $category->save();

        return redirect()->route('biz.category.show',[$category->slug])->with('success','New business category created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('business.category.show')->with('businesscategory',$this->find(BusinessCategory::class,$id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('business.category.edit')->with('businesscategory',$this->find(BusinessCategory::class,$id));
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
            'category_name' => ['required']
        ]);
        $category = $this->find(BusinessCategory::class,$id);
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
