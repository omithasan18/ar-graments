<?php

namespace App\Http\Controllers\admin;

use App\Models\Header;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class HeaderController extends Controller
{
    public function index()
    {
        $data = Header::first();
        return view('admin.header.index',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $header = Header::first();
        if($header){
            $header->about_title = $request->about_title;
            $header->about_note = $request->about_note;
            $header->management_title = $request->management_title;
            $header->management_note = $request->management_note;
            $header->certification_title = $request->certification_title;
            $header->certification_note = $request->certification_note;
            $header->collection_title = $request->collection_title;
            $header->collection_note = $request->collection_note;
            $header->client_title = $request->client_title;
            $header->client_note = $request->client_note;
            $header->career_title = $request->career_title;
            $header->career_note = $request->career_note;
            $header->contact_title = $request->contact_title;
            $header->contact_note = $request->contact_note;
            $header->industry_title = $request->industry_title;
            $header->industry_note = $request->industry_note;
            $header->key_title = $request->key_title;
            $header->key_note = $request->key_note;
            $header->footer_title = $request->footer_title;
            $header->footer_note = $request->footer_note;

            if($header->update()){
                Toastr::success('Header  has been Updated successfully :-)','Success');
                return redirect()->back();
            }
            else{
                Toastr::error('Something went wrong :-)','Error');
                return redirect()->back();
            }
        }
        else{
            $header = new Header();
            $header->about_title = $request->about_title;
            $header->about_note = $request->about_note;
            $header->management_title = $request->management_title;
            $header->management_note = $request->management_note;
            $header->certification_title = $request->certification_title;
            $header->certification_note = $request->certification_note;
            $header->collection_title = $request->collection_title;
            $header->collection_note = $request->collection_note;
            $header->client_title = $request->client_title;
            $header->client_note = $request->client_note;
            $header->career_title = $request->career_title;
            $header->career_note = $request->career_note;
            $header->contact_title = $request->contact_title;
            $header->contact_note = $request->contact_note;
            $header->industry_title = $request->industry_title;
            $header->industry_note = $request->industry_note;
            $header->key_title = $request->key_title;
            $header->key_note = $request->key_note;
            $header->footer_title = $request->footer_title;
            $header->footer_note = $request->footer_note;

            if($header->save()){
                Toastr::success('Header  has been Updated successfully :-)','Success');
                return redirect()->back();
            }
            else{
                Toastr::error('Something went wrong :-)','Error');
                return redirect()->back();
            }
        }
    }
}
