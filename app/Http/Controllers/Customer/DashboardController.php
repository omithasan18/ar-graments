<?php

namespace App\Http\Controllers\Customer;

use App\Models\Type;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use App\Models\District;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function dashboard(){
        return view('frontend.user-dashboard.dashboard');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }


}
