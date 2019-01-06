<?php

namespace App\Http\Controllers;

use App\ServiceTag;
use App\Traits\GetResource;
use Illuminate\Http\Request;

class ServiceTagController extends Controller
{
    use GetResource;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('service.tag.index')->with('servicetags',ServiceTag::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('service.tag.create');
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
            'tag_name' => ['required','unique:servicetags']
        ]);
        $tag = new ServiceTag();
        $tag->name = $request->tag_name;
        $tag->description = $request->description;
        $tag->slug = str_slug($request->tag_name);
        $tag->save();

        return redirect()->route('service.tag.show',[$tag->slug])->with('success','New service tag created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('service.tag.show')->with('servicetag',$this->find(ServiceTag::class,$id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('service.tag.edit')->with('servicetag',$this->find(ServiceTag::class,$id));
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
            'tag_name' => ['required','unique:servicetags']
        ]);
        $tag = $this->find(ServiceTag::class,$id);
        $tag->name = $request->tag_name;
        $tag->description = $request->description;
        $tag->slug = str_slug($request->tag_name);
        $tag->save();

        return redirect()->route('service.tag.show',[$tag->slug])->with('success','Service tag '.$tag->name.' updated');
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
