<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\service;
use App\shop_role;
use Hash;
use Auth;
class WorkersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function saveWorkers(Request $request){
        $request->validate([
            'name'=> 'required',
            'email'=> 'required|unique:users',
            'role_id'=> 'required',
        ]);

        $service_ids='';
        $service_id;
        foreach($request->service_ids as $row){
            $service_id[]=$row;
        }
        $service_ids = collect($service_id)->implode(',');

        $shop_worker = new User;
        $shop_worker->name = $request->name;
        $shop_worker->phone = $request->phone;
        $shop_worker->email = $request->email;
        $shop_worker->role_id = $request->role_id;
        $shop_worker->service_ids = $service_ids;
        $shop_worker->user_id = Auth::user()->user_id;
        $shop_worker->password = Hash::make($request->password);
        $shop_worker->save();
        return response()->json('successfully save'); 
    }
    public function updateWorkers(Request $request){
        $request->validate([
            'name'=> 'required',
            'email'=>'required|unique:users,email,'.$request->id,
            'role_id'=> 'required',
        ]);

        $service_ids='';
        $service_id;
        foreach($request->service_ids as $row){
            $service_id[]=$row;
        }
        $service_ids = collect($service_id)->implode(',');
        
        $shop_worker = User::find($request->id);
        $shop_worker->name = $request->name;
        $shop_worker->phone = $request->phone;
        $shop_worker->role_id = $request->role_id;
        $shop_worker->service_ids = $service_ids;
        $shop_worker->email = $request->email;
        if($request->password != ''){
        $shop_worker->password = Hash::make($request->password);
    	}
        $shop_worker->save();
        return response()->json('successfully update'); 
    }

    public function Workers(){
        $shop_worker = User::where('role_id', '!=' ,'admin')->where('user_id',Auth::user()->user_id)->get();

        $shop_role = shop_role::where('shop_id',Auth::user()->user_id)->get();
        $service = service::all();
        return view('vendor.workers',compact('shop_worker','service','shop_role'));
    }
    
    public function editWorkers($id){
        $shop_worker = User::find($id);
        return response()->json($shop_worker); 
    }
    
    public function deleteWorkers($id){
        $shop_worker = User::find($id);
        $shop_worker->delete();
        return response()->json(['message'=>'Successfully Delete'],200); 
    }


    public function getWorkersServices($id){ 
        $data  = User::find($id);

        $service = service::all();

      $arraydata=array();
      foreach(explode(',',$data->service_ids) as $service_id){
        $arraydata[]=$service_id;
      }
      $output = '';
        foreach ($service as $value){
            if(in_array($value->id , $arraydata))
            {
                $output .='<option selected="true" value="'.$value->id.'">'.$value->service_name_english.'</option>'; 
            }
            else{
                $output .='<option value="'.$value->id.'">'.$value->service_name_english.'</option>'; 
            }
        }
      
      echo $output;
      
    }


}
