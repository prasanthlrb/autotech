<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\shop_role;
use Auth;


class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function saveRole(Request $request){
        $request->validate([
            'role_name'=>'required',
        ]);

        $shop_role = new shop_role;
        $shop_role->shop_id = Auth::user()->id;
        $shop_role->role_name = $request->role_name;
        $shop_role->dashboard = $request->dashboard;
        $shop_role->appointment = $request->appointment;
        $shop_role->calendor = $request->calendor;
        $shop_role->push_notification = $request->push_notification;
        $shop_role->service = $request->service;
        $shop_role->review = $request->review;
        $shop_role->coupon = $request->coupon;
        $shop_role->workers = $request->workers;
        $shop_role->reports = $request->reports;
        $shop_role->roles = $request->roles;
        $shop_role->save();
        return response()->json('successfully save'); 
    }
    public function updateRole(Request $request){
        $request->validate([
            'role_name'=> 'required',
        ]);
        
        $shop_role = shop_role::find($request->id);
        $shop_role->role_name = $request->role_name;
        $shop_role->dashboard = $request->dashboard;
        $shop_role->appointment = $request->appointment;
        $shop_role->calendor = $request->calendor;
        $shop_role->push_notification = $request->push_notification;
        $shop_role->service = $request->service;
        $shop_role->review = $request->review;
        $shop_role->coupon = $request->coupon;
        $shop_role->workers = $request->workers;
        $shop_role->reports = $request->reports;
        $shop_role->roles = $request->roles;
        $shop_role->save();
        return response()->json('successfully update'); 
    }

    public function Role(){
        $role = shop_role::where('shop_id', Auth::user()->user_id)->get();
        return view('vendor.role',compact('role'));
    }
    
    public function editRole($id){
        $shop_role = shop_role::find($id);
        return response()->json($shop_role); 
    }
    
    public function deleteRole($id){
        $shop_role = shop_role::find($id);
        $shop_role->delete();
        return response()->json(['message'=>'Successfully Delete'],200); 
    }
}
