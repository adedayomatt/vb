<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Matto\FileUpload;

use App\Traits\ServiceTrait;

class ServiceController extends Controller
{
    use ServiceTrait;

    public function __construct(){
        $this->middleware(['auth:vendor','verifiedvendor'])->except(['index','show']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('service.index')->with('services',Service::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$business)
    {
        if(!$this->authorizedVendor($business)){
            return redirect()->intended($this->redirectTo())->with('info', 'You are not authorized!');
        }
        
        $this->validate($request, $this->validationRules());

        $service = new Service();
        $service->business_id = Auth::guard('vendor')->user()->business->id;
        $service->service_category_id = $request->category;
        $service->name = $request->service_name;
        $service->description = $request->description;
        $service->slug = str_slug($request->service_name);
        $service->save();

        return redirect()->route('edit.service.gallery',[Auth::guard('vendor')->user()->business->slug,$service->slug])->with('new','true');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($business,$service)
    {
        return view('service.show')->with('service',$this->getService($service));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($business,$service)
    {
        if(!$this->authorizedBusiness($business,$service)){
            return redirect()->intended($this->redirectTo())->with('info', 'You are not authorized!');
        }
        return view('service.edit')->with('product',$this->getService($service));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $business,$service)
    {
        if(!$this->authorizedBusiness($business,$service)){
            return redirect()->intended($this->redirectTo())->with('info', 'You are not authorized!');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($business,$service)
    {
        if(!$this->authorizedBusiness($business,$service)){
            return redirect()->intended($this->redirectTo())->with('info', 'You are not authorized!');
        }

    }
}
