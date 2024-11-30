<?php

namespace App\Http\Controllers\admin;

use App\Models\Industry;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class IndustryController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $datas=Industry::latest()->get();
       return view('admin.industry.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
   
        return view('admin.industry.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=new Industry();
        $data->name=$request->name;
        $data->category=$request->category;
        $data->establish=$request->establish;
        $data->total_employee=$request->total_employee;
        $data->address=$request->address;
        $data->description=$request->description;
        $data->status=$request->status;
        $simage = $request->file('image');
        if($simage)
        {
            $image_name= uniqid();
            $ext = strtolower($simage->getClientOriginalExtension());
            $image_full_name = $image_name. '.' .$ext;
            $upload_path = 'images/industry/';
            $image_url = $upload_path.$image_full_name;
            $success = $simage->move($upload_path, $image_full_name);
            if($success)
            {
                $data->image = $image_url;
            }

        }
        
        $bg_image = $request->file('bg_image');
        if($bg_image)
        {
            $image_name= uniqid();
            $ext = strtolower($bg_image->getClientOriginalExtension());
            $image_full_name = $image_name. '.' .$ext;
            $upload_path = 'images/industry/';
            $image_url = $upload_path.$image_full_name;
            $success = $bg_image->move($upload_path, $image_full_name);
            if($success)
            {
                $data->bg_image = $image_url;
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
        $data=Industry::find($id);
        return view('admin.industry.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data=Industry::find($id);
        $data->name=$request->name;
        $data->category=$request->category;
        $data->establish=$request->establish;
        $data->total_employee=$request->total_employee;
        $data->address=$request->address;
        $data->description=$request->description;
        $data->status=$request->status;
        $simage = $request->file('image');
        if($simage)
        {
            $image_name= uniqid();
            $ext = strtolower($simage->getClientOriginalExtension());
            $image_full_name = $image_name. '.' .$ext;
            $upload_path = 'images/industry/';
            $image_url = $upload_path.$image_full_name;
            $success = $simage->move($upload_path, $image_full_name);
            if($success)
            {
                $data->image = $image_url;
            }


        }
        
        $bg_image = $request->file('bg_image');
        if($bg_image)
        {
            $image_name= uniqid();
            $ext = strtolower($bg_image->getClientOriginalExtension());
            $image_full_name = $image_name. '.' .$ext;
            $upload_path = 'images/industry/';
            $image_url = $upload_path.$image_full_name;
            $success = $bg_image->move($upload_path, $image_full_name);
            if($success)
            {
                $data->bg_image = $image_url;
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
        $data=Industry::find($id);
        $data->delete();
        Toastr::success('Data Deleted Succssfull');
        return redirect()->back();
    }
}
