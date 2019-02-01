<?php

namespace App\Http\Controllers;

use App\Category;
use App\Traits\Resource;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    use Resource;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('category.index')->with('categories',Category::all());
    }

    public function businesses($category){
        $businesses = $this->find(Category::class,$category)->businessess;
        dd($businesses);
    }
    public function products($category){
        $products = $this->find(Category::class,$category)->products;
        dd($products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
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
            'name' => ['required','unique:categories']
        ]);
        $category = new Category();
        $category->name = $request->name;
        $category->description = $request->description;
        $category->slug = str_slug($request->name);
        $category->save();

        return redirect()->route('category.show',[$category->slug])->with('success','New category created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('category.show')->with('category',$this->find(Category::class,$id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('category.edit')->with('category',$this->find(Category::class,$id));
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
            'name' => ['required', 'unique:']
        ]);
        $category = $this->find(Category::class,$id);
        $category->name = $request->category;
        $category->description = $request->description;
        $category->slug = str_slug($request->name);
        $category->save();

        return redirect()->route('category.show',[$category->slug])->with('success',$category->name.' updated');
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
