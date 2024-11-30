<?php

namespace App\Http\Controllers\Admin;

use App\Models\SiteSetting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class SiteSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=SiteSetting::first();
        return view('admin.sitesetting.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $sitesetting = SiteSetting::first();
        if($sitesetting){
            $sitesetting->site_name = $request->site_name;
            $sitesetting->email = $request->email;
            $sitesetting->phone = $request->phone;
            $sitesetting->address = $request->address;
            $sitesetting->facebook = $request->facebook;
            $sitesetting->twitter = $request->twitter;
            $sitesetting->linkedin = $request->linkedin;
            $sitesetting->instragram = $request->instragram;
            $sitesetting->youtube = $request->youtube;
            $sitesetting->whatsapp = $request->whatsapp;
            $sitesetting->years_of_experience = $request->years_of_experience;
            $sitesetting->customers = $request->customers;
            $sitesetting->projects = $request->projects;
            $sitesetting->awards = $request->awards;
            $sitesetting->opening_day = $request->opening_day;
            $sitesetting->opening_time = $request->opening_time;
            $sitesetting->map = $request->map;
            $sitesetting->meta_title = $request->meta_title;
            $sitesetting->meta_description = $request->meta_description;
            $sitesetting->meta_keywords = $request->meta_keywords;
            $simage = $request->file('icon');
            if($simage)
            {
                $image_name= uniqid();
                $ext = strtolower($simage->getClientOriginalExtension());
                $image_full_name = $image_name. '.' .$ext;
                $upload_path = 'images/site-setting/';
                $image_url = $upload_path.$image_full_name;
                $success = $simage->move($upload_path, $image_full_name);
                if($success)
                {
                    $sitesetting->icon = $image_url;
                }

            }

            $stimage = $request->file('fav_icon');
            if($stimage)
            {
                $image_name= uniqid();
                $ext = strtolower($stimage->getClientOriginalExtension());
                $image_full_name = $image_name. '.' .$ext;
                $upload_path = 'images/site-setting/';
                $image_url = $upload_path.$image_full_name;
                $success = $stimage->move($upload_path, $image_full_name);
                if($success)
                {
                    $sitesetting->fav_icon = $image_url;
                }

            }




            if($sitesetting->update()){
                Toastr::success('SiteSetting  has been Updated successfully :-)','Success');
                return redirect()->back();
            }
            else{
                Toastr::error('Something went wrong :-)','Error');
                return redirect()->back();
            }
        }
        else{
            $sitesetting=new SiteSetting();
            $sitesetting->site_name = $request->site_name;
            $sitesetting->email = $request->email;
            $sitesetting->phone = $request->phone;
            $sitesetting->address = $request->address;
            $sitesetting->facebook = $request->facebook;
            $sitesetting->twitter = $request->twitter;
            $sitesetting->linkedin = $request->linkedin;
            $sitesetting->instragram = $request->instragram;
            $sitesetting->youtube = $request->youtube;
            $sitesetting->whatsapp = $request->whatsapp;
            $sitesetting->years_of_experience = $request->years_of_experience;
            $sitesetting->customers = $request->customers;
            $sitesetting->projects = $request->projects;
            $sitesetting->awards = $request->awards;
            $sitesetting->opening_day = $request->opening_day;
            $sitesetting->opening_time = $request->opening_time;
            $sitesetting->map = $request->map;
            $sitesetting->meta_title = $request->meta_title;
            $sitesetting->meta_description = $request->meta_description;
            $sitesetting->meta_keywords = $request->meta_keywords;
            $simage = $request->file('icon');
            if($simage)
            {
                $image_name= uniqid();
                $ext = strtolower($simage->getClientOriginalExtension());
                $image_full_name = $image_name. '.' .$ext;
                $upload_path = 'images/site-setting/';
                $image_url = $upload_path.$image_full_name;
                $success = $simage->move($upload_path, $image_full_name);
                if($success)
                {
                    $sitesetting->icon = $image_url;
                }

            }

            $stimage = $request->file('fav_icon');
            if($stimage)
            {
                $image_name= uniqid();
                $ext = strtolower($stimage->getClientOriginalExtension());
                $image_full_name = $image_name. '.' .$ext;
                $upload_path = 'images/site-setting/';
                $image_url = $upload_path.$image_full_name;
                $success = $stimage->move($upload_path, $image_full_name);
                if($success)
                {
                    $sitesetting->fav_icon = $image_url;
                }

            }

            if($sitesetting->save()){
                Toastr::success('SiteSetting  has been Updated successfully :-)','Success');
                return redirect()->back();
            }
            else{
                Toastr::error('Something went wrong :-)','Error');
                return redirect()->back();
            }
        }
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
