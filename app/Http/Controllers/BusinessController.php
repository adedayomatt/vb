<?php

namespace App\Http\Controllers;

use App\Business;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Matto\FileUpload;

use App\Traits\BusinessTrait;

class BusinessController extends Controller
{

    use BusinessTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('business.index')->with('businesses',Business::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('business.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,$this->validationRules());
        
        $business = new Business();
        $business->vendor_id = Auth::guard('vendor')->id();
        $business->business_category_id = $request->category;
        $business->name = $request->business_name;
        $business->description = $request->description;
        $business->address = $request->business_address;
        $business->email = $request->email;
        $business->phone1 = $request->phone;
        $business->phone2 = $request->alternative_phone_no;
        $business->slug = $request->slug;
        $business->save();

        return redirect()->route('edit.business.gallery',[$business->slug])->with('new','true');
        }


    /**
     * Display the specified resource.
     *
     * @param  mixed  $business - id/slug
     * @return \Illuminate\Http\Response
     */
    public function show($business)
    {
        dd($this->getBusiness($business));
        return view('business.show')->with('business',);
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
        return view('business.edit')->with('business',$this->getBusiness($business));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $business - id/slug
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $business)
    {
        if(!$this->authorizedVendor($business)){
            return redirect()->intended($this->redirectTo())->with('info', 'You are not authorized!');
           }

        $this->validate($request,$this->validationRules());

        $business = $this->getBusiness($business);
        $business->business_category_id = $request->category;
        $business->name = $request->business_name;
        $business->description = $request->description;
        $business->address = $request->business_address;
        $business->email = $request->email;
        $business->phone1 = $request->phone;
        $business->phone2 = $request->alternative_phone_no;
        $business->slug = $request->slug;
        $business->save();

        return redirect()->route('business',[$business->slug])->with('success','updated');

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


       }
}
