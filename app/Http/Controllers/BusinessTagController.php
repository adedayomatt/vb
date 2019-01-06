<?php

namespace App\Http\Controllers;

use App\BusinessTag;
use App\Traits\GetResource;
use Illuminate\Http\Request;

class BusinessTagController extends Controller
{
    use GetResource;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('business.tag.index')->with('businesstags',BusinessTag::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('business.tag.create');
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
            'tag_name' => ['required','unique:businesstags']
        ]);
        $tag = new BusinessTag();
        $tag->name = $request->tag_name;
        $tag->description = $request->description;
        $tag->slug = str_slug($request->tag_name);
        $tag->save();

        return redirect()->route('biz.tag.show',[$tag->slug])->with('success','New business tag created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('business.tag.show')->with('businesstag',$this->find(BusinessTag::class,$id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('business.tag.edit')->with('businesstag',$this->find(BusinessTag::class,$id));
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
            'tag_name' => ['required','unique:businesstags']
        ]);
        $tag = $this->find(BusinessTag::class,$id);
        $tag->name = $request->tag_name;
        $tag->description = $request->description;
        $tag->slug = str_slug($request->tag_name);
        $tag->save();

        return redirect()->route('biz.tag.show',[$tag->slug])->with('success','New business tag created');
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
