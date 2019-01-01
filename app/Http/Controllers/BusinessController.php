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
        return view('ven.business.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ven.business.create');
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

        return redirect()->route('business.gallery',['b' => $business->slug])->with('new','true');
        }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd($this->getBusiness($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!$this->authorized($id)){
            return redirect()->intended($this->redirectTo())->with('info', 'You are not authorized!');
        }
        return view('ven.business.edit')->with('business',$this->getBusiness($id));
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
        if(!$this->authorized($id)){
            return redirect()->intended($this->redirectTo())->with('info', 'You are not authorized!');
           }

        $this->validate($request,$this->validationRules());

        $business = $this->getBusiness($id);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!$this->authorized($id)){
            return redirect()->intended($this->redirectTo())->with('info', 'You are not authorized!');
           }
       }
}
