<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard(){
        return view('seller.dashboard.index');
    }

    public function affiliate(){
        $user = User::find(Auth::user()->id);
        $roleId = 3;
        $hasRole = $user->roles()->where('role_id', $roleId)->exists();
        if($hasRole) {
            $role =  $user->roles()->where('role_id', $roleId)->first();
            $user->role = $role->role;
            $user->save();
        }
        return redirect()->back();
    }

    public function customer(){
        $user = User::find(Auth::user()->id);
        $roleId = 2;
        $hasRole = $user->roles()->where('role_id', $roleId)->exists();
        if($hasRole) {
            $role =  $user->roles()->where('role_id', $roleId)->first();
            $user->role = $role->role;
            $user->save();
        }
        return redirect()->back();
    }
}
