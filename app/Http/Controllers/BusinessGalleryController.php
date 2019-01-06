<?php

namespace App\Http\Controllers;

use App\Business;
use App\BusinessGallery;
use App\Matto\FileUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use App\Traits\BusinessTrait;

class BusinessGalleryController extends Controller
{

    use BusinessTrait;

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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  mixed  $business - id/slug
     * @return \Illuminate\Http\Response
     */
    public function edit($business)
    {
        if(!$this->authorizedVendor($business)){
            return redirect()->intended($this->redirectTo())->with('info', 'You are not authorized!');
           }
           return view('business.gallery')->with('business',$this->getBusiness($business));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $business - id/slug
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $business,$type)
    {
        if(!$this->authorizedVendor($business)){
            return redirect()->intended($this->redirectTo())->with('info', 'You are not authorized!');
           }
   
        $business = $this->getBusiness($business);
        $rules = 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048';
        switch($type){
            case 'avatar':
                    $this->validate($request,[
                        'avatar' => $rules,
                    ]);
                    if($request->hasFile('avatar')){
                    $upload = new FileUpload(
                                $request,
                                $name = 'avatar',
                                $title = $business->slug,
                                $path = 'public/images/business/avatar/'
                            );
                    $business->avatar = isset($upload->slugs[0]) ? $upload->slugs[0] : null;
                    $business->save();
                    return redirect()->back()->with('info',$upload->report);
                }
            break;
    
            case 'cover':
                $this->validate($request,[
                    'cover' => $rules,
                ]);
                if($request->hasFile('cover')){
                    $upload = new FileUpload(
                                $request,
                                $name = 'cover',
                                $title = $business->slug,
                                $path = 'public/images/business/cover/'
                            );
                    $business->cover = isset($upload->slugs[0]) ? $upload->slugs[0] : null;
                    $business->save();
                    return redirect()->back()->with('info',$upload->report);
                }

            break;
    
            case 'gallery':
                $this->validate($request,[
                    'gallery[]' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5048'
                ]);
                $upload = new FileUpload($request,
                $name='gallery',
                $title= $business->slug,
                $path = 'public/images/business/gallery'
                );
                if($upload->totalSuccess > 0 && count($upload->slugs) >0){
                    foreach($upload->slugs as $slug){
                        BusinessGallery::create([
                            'business_id' => $business->id,
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
     * @param  mixed  $business - id/slug
     * @return \Illuminate\Http\Response
     */
    public function destroy($business)
    {
        if(!$this->authorizedVendor($business)){
            return redirect()->intended($this->redirectTo())->with('info', 'You are not authorized!');
           }
           //
    }
}
