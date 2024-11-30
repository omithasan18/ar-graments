<?php

namespace App\Http\Controllers\Frontend;


use App\Models\Client;
use App\Models\Message;
use App\Models\Subscribe;
use App\Models\SiteSetting;
use App\Models\Header;
use App\Models\Career;
use App\Models\Certification;
use App\Models\Collection;
use App\Models\Industry;
use App\Models\Management;
use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class HomeController extends Controller
{

    public function home()
    {
        $setting = SiteSetting::first();
        $header = Header::first();
        $careers = Career::where('status',1)->get()->take(3);
        $certifications = Certification::where('status',1)->get()->take(3);
        $collections = Collection::where('status',1)->get()->take(3);
        $industries = Industry::where('status',1)->get()->take(3);
        $managements = Management::where('status',1)->get()->take(3);
        $sliders = Slider::where('status',1)->get()->take(3);
        $clients = Client::where('status',1)->get();
        
        return view('admin.frontend.index',compact('setting','header','careers','certifications',
                'collections','industries','managements','sliders','clients'));
    }
    
    public function client()
    {
        $setting = SiteSetting::first();
        $header = Header::first();
        $clients = Client::where('status',1)->get();
        return view('admin.frontend.client',compact('setting','header','clients'));
    }
    
    public function industry()
    {
        $setting = SiteSetting::first();
        $header = Header::first();
        $industries = Industry::where('status',1)->get();
        return view('admin.frontend.industry',compact('setting','header','industries'));
    }
    
    public function collection()
    {
        $setting = SiteSetting::first();
        $header = Header::first();
        $collections = Collection::where('status',1)->get();
        return view('admin.frontend.collection',compact('setting','header','collections'));
    }
    
    public function career()
    {
        $setting = SiteSetting::first();
        $header = Header::first();
        $careers = Career::where('status',1)->get();
        return view('admin.frontend.career',compact('setting','header','careers'));
    }
    
    public function certification()
    {
        $setting = SiteSetting::first();
        $header = Header::first();
        $certifications = Certification::where('status',1)->get();
        return view('admin.frontend.certification',compact('setting','header','certifications'));
    }
    
    public function contact()
    {
        $setting = SiteSetting::first();
        $header = Header::first();
        return view('admin.frontend.contact',compact('setting','header'));
    }
    
    public function comphanyProfile()
    {
        $setting = SiteSetting::first();
        $header = Header::first();
        $industries = Industry::where('status',1)->get();
        return view('admin.frontend.comphany_profile',compact('setting','header','industries'));
    }
    
    public function ManagementProfile()
    {
        $setting = SiteSetting::first();
        $header = Header::first();
        $managements = Management::where('status',1)->get();
        return view('admin.frontend.management_profile',compact('setting','header','managements'));
    }
    
    public function messageSubmit(Request $request)
    {

        $this->validate($request, [
            'first_name' => 'required',
            'email' => 'required',
            'phone' => 'required|min:10',
            'message' => 'required',
        ]);
        
        $data = new Message();
        
        $data->first_name=$request->first_name;
        $data->last_name=$request->last_name;
        $data->company=$request->company;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->message=$request->message;
        $data->save();
        Toastr::success('Your Response has been saved!');
        return redirect()->back();
    }
    
    public function subscribeSubmit(Request $request)
    {
        $data=new Subscribe();

        $data->email=$request->email;
        $data->save();
        Toastr::success('Thanks for Subscribing');
        return redirect()->back();
    }
}
