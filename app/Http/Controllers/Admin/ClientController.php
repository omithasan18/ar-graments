<?php

namespace App\Http\Controllers\Admin;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas=Client::latest()->get();
        return view('admin.client.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('admin.client.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $data=new Client();
       $data->status=$request->status;
       $simage = $request->file('image');
       if($simage)
       {
           $image_name= uniqid();
           $ext = strtolower($simage->getClientOriginalExtension());
           $image_full_name = $image_name. '.' .$ext;
           $upload_path = 'images/client/';
           $image_url = $upload_path.$image_full_name;
           $success = $simage->move($upload_path, $image_full_name);
           if($success)
           {
               $data->image = $image_url;
           }

       }
       $data->save();
       Toastr::success('Data saved succesfully');
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
        $data=Client::find($id);
        return view('admin.client.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data=Client::find($id);
        $data->status=$request->status;
        $simage = $request->file('image');
        if($simage)
        {
            $image_name= uniqid();
            $ext = strtolower($simage->getClientOriginalExtension());
            $image_full_name = $image_name. '.' .$ext;
            $upload_path = 'images/client/';
            $image_url = $upload_path.$image_full_name;
            $success = $simage->move($upload_path, $image_full_name);
            if($success)
            {
                $data->image = $image_url;
            }

        }
        $data->save();
        Toastr::success('Data saved succesfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data=Client::find($id);
        $data->delete();
        Toastr::success('Data Deleted succesfully');
        return redirect()->back();
    }
}
