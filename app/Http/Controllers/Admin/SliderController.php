<?php

namespace App\Http\Controllers\admin;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class SliderController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $datas=Slider::latest()->get();
       return view('admin.slider.index',compact('datas'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=new Slider();
        $data->name=$request->name;
        $data->description=$request->description;
        $data->status=$request->status;
        $data->url = $request->url;
        $simage = $request->file('image');
        if($simage)
        {
            $image_name= uniqid();
            $ext = strtolower($simage->getClientOriginalExtension());
            $image_full_name = $image_name. '.' .$ext;
            $upload_path = 'images/slider/';
            $image_url = $upload_path.$image_full_name;
            $success = $simage->move($upload_path, $image_full_name);
            if($success)
            {
                $data->image = $image_url;
            }

        }
        $data->save();
        Toastr::success('Data Update succesfully');
        return redirect()->back();

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
        $data=Slider::find($id);
        return view('admin.slider.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data=Slider::find($id);
        $data->name=$request->name;
        $data->description=$request->description;
        $data->status=$request->status;
        $data->url = $request->url;
        $simage = $request->file('image');
        if($simage)
        {
            $image_name= uniqid();
            $ext = strtolower($simage->getClientOriginalExtension());
            $image_full_name = $image_name. '.' .$ext;
            $upload_path = 'images/slider/';
            $image_url = $upload_path.$image_full_name;
            $success = $simage->move($upload_path, $image_full_name);
            if($success)
            {
                $data->image = $image_url;
            }


        }
        $data->save();
        Toastr::success('Data Update succesfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data=Slider::find($id);
        $data->delete();
        Toastr::success('Data Deleted Succssfull');
        return redirect()->back();
    }
}
