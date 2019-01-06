<?php

namespace App\Http\Controllers;

use App\ProductTag;
use App\Traits\GetResource;
use Illuminate\Http\Request;

class ProductTagController extends Controller
{
    use GetResource;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('product.tag.index')->with('producttags',ProductTag::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.tag.create');
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
            'tag_name' => ['required']
        ]);
        $tag = new ProductTag();
        $tag->name = $request->tag_name;
        $tag->description = $request->description;
        $tag->slug = str_slug($request->tag_name);
        $tag->save();

        return redirect()->route('product.tag.show',[$tag->slug])->with('success','New product tag created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('product.tag.show')->with('producttag',$this->find(ProductTag::class,$id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('product.tag.edit')->with('producttag',$this->find(ProductTag::class,$id));
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
            'tag_name' => ['required','unique:producttags']
        ]);
        $tag = $this->find(ProductTag::class,$id);
        $tag->name = $request->tag_name;
        $tag->description = $request->description;
        $tag->slug = str_slug($request->tag_name);
        $tag->save();

        return redirect()->route('product.tag.show',[$tag->slug])->with('success','Product tag '.$tag->name.' updated');
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
