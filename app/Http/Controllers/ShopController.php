<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\review;
use App\User;
use App\service;
use App\service_time;
use App\shop_service;
use App\push_notification;
use App\shop_password;
use App\shop_package;
use App\used_package;
use Hash;
use DB;
use Mail;

class ShopController extends Controller
{

    public function viewShop($id){
        $shop_id = $id;
        $shop = User::find($id);
        $all_shop = User::all();
        $review = review::all();
        $service = service::all();
        $service_time = service_time::where('shop_id',$id)->get();
        $shop_service = shop_service::where('shop_id',$id)->get();
        return view('admin.view_shop',compact('shop','all_shop','service_time','shop_service','service','shop_id','review'));
    }

    public function saveShop(Request $request){
        $request->validate([
            'email'=> 'required|unique:users',
            'name'=>'required',
            // 'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            // 'password_confirmation' => 'min:6'
        ]);

        //image upload
        $fileName = null;
        if($request->file('trade_license')!=""){
            $image = $request->file('trade_license');
            $fileName = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('upload_files/'), $fileName);
        }

        $shop = new User;
        $shop->name = $request->name;
        $shop->email = $request->email;
        $shop->phone = $request->phone;
        // $shop->password = Hash::make($request->password);
        $shop->shop_name = $request->shop_name;
        $shop->nationality = $request->nationality;
        $shop->emirates_id = $request->emirates_id;
        $shop->passport_number = $request->passport_number;
        $shop->shop_package = $request->shop_package;
        $shop->shop_commission = $request->shop_commission;
        $shop->trade_license = $fileName;

        if($request->file('passport_copy')!=""){
            $fileName = null;
            $image = $request->file('passport_copy');
            $fileName = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('upload_files/'), $fileName);
        $shop->passport_copy = $fileName;
        }
        if($request->file('emirated_id_copy')!=""){
            $fileName = null;
            $image = $request->file('emirated_id_copy');
            $fileName = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('upload_files/'), $fileName);
        $shop->emirated_id_copy = $fileName;
        }
        $shop->save();

        $user = User::find($shop->id);
        $user->role_id = 'admin';
        $user->user_id = $shop->id;
        $user->save();

            $days = array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
            for ($i = 0; $i < 7; $i++) {
                $service_time = new service_time;
                $service_time->shop_id = $shop->id;
                $service_time->days = $days[$i];
                $service_time->save();
            }

        $shop_password = new shop_password;
        $shop_password->date = date('Y-m-d');
        $shop_password->end_date = date('Y-m-d', strtotime("+14 days"));
        $shop_password->shop_id = $shop->id;
        $shop_password->shop_name = $shop->shop_name;
        $shop_password->owner_name = $shop->name;
        $shop_password->email = $shop->email;
        $shop_password->save();


        $shop_package = shop_package::find($shop->shop_package);
        $expiry_date = '';
        if($shop_package->validity == '1'){
            $expiry_days = $shop_package->validity_count;
            $remind_days = $shop_package->validity_count - $shop_package->package_renewal_remember_days;
            $expiry_date = date('Y-m-d', strtotime("+".$expiry_days." days"));
            $remind_date = date('Y-m-d', strtotime("+".$remind_days." days"));
        }
        else{
            $expiry_days = $shop_package->validity_count * 30;
            $remind_days = $expiry_days - $shop_package->package_renewal_remember_days;
            $expiry_date = date('Y-m-d', strtotime("+".$expiry_days." days"));
            $remind_date = date('Y-m-d', strtotime("+".$remind_days." days"));
        }

        $used_package = new used_package;
        $used_package->package_id = $shop->shop_package;
        $used_package->active_date = date('Y-m-d');
        $used_package->expiry_date = $expiry_date;
        $used_package->remind_date = $remind_date;
        $used_package->save();

        $shop_update = User::find($shop->id);
        $shop_update->used_package_id = $used_package->id;
        $shop_update->active_date = date('Y-m-d');
        $shop_update->expiry_date = $expiry_date;
        $shop_update->remind_date = $remind_date;
        $shop_update->save();

        $all = $shop_password::find($shop_password->id);
        Mail::send('mail.shop_send_mail',compact('all'),function($message) use($all){
            $message->to($all['email'])->subject('Create your Own Password');
            $message->from('aravind.0216@gmail.com','I-shop Website');
        });

        return response()->json('successfully save'); 
    }

    public function updateShop(Request $request){
        $request->validate([
            'email'=>'required|unique:users,email,'.$request->id,
            'name'=> 'required',
            // 'password' => 'nullable|min:6|required_with:password_confirmation|same:password_confirmation',
            // 'password_confirmation' => 'nullable|min:6'
        ]);

        $shop = User::find($request->id);
        $shop->name = $request->name;
        $shop->email = $request->email;
        $shop->phone = $request->phone;
     //    if($request->password != ''){
     //    $shop->password = Hash::make($request->password);
    	// }
        $shop->shop_name = $request->shop_name;
        $shop->nationality = $request->nationality;
        $shop->emirates_id = $request->emirates_id;
        $shop->passport_number = $request->passport_number;
        //$shop->shop_package = $request->shop_package;
        $shop->shop_commission = $request->shop_commission;
        
        
        if($request->file('trade_license')!=""){
            $old_image = "upload_files/".$request->trade_license;
            if (file_exists($old_image)) {
                @unlink($old_image);
            }
            $fileName = null;
            $image = $request->file('trade_license');
            $fileName = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('upload_files/'), $fileName);
        $shop->trade_license = $fileName;
        }

        if($request->file('passport_copy')!=""){
            $old_image = "upload_files/".$request->passport_copy;
            if (file_exists($old_image)) {
                @unlink($old_image);
            }
            $fileName = null;
            $image = $request->file('passport_copy');
            $fileName = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('upload_files/'), $fileName);
        $shop->passport_copy = $fileName;
        }

        if($request->file('emirated_id_copy')!=""){
            $old_image = "upload_files/".$request->emirated_id_copy;
            if (file_exists($old_image)) {
                @unlink($old_image);
            }
            $fileName = null;
            $image = $request->file('emirated_id_copy');
            $fileName = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('upload_files/'), $fileName);
        $shop->emirated_id_copy = $fileName;
        }

        $shop->save();
        return response()->json('successfully update'); 
    }
    public function Shop(){
        $shop = User::all();
        $shop_package = shop_package::all();
        return view('admin.shop',compact('shop','shop_package'));
    }
    public function editShop($id){
        $shop = User::find($id);
        return response()->json($shop); 
    }
    
    public function deleteShop($id){
        $shop = User::find($id);
        $old_image = "upload_files/".$shop->trade_license;
        if (file_exists($old_image)) {
            @unlink($old_image);
        }
        $shop->delete();
        return response()->json(['message'=>'Successfully Delete'],200); 
    }



    public function saveAddService(Request $request){
        $shop_service = new shop_service;
        $shop_service->shop_id = $request->shop_id;
        $shop_service->service_id = $request->service_id;
        $shop_service->price = $request->price;
        $shop_service->duration = $request->duration;
        $shop_service->save();

        return response()->json('successfully save'); 
    }
    public function updateAddService(Request $request){
        $shop_service = shop_service::find($request->id);
        $shop_service->shop_id = $request->shop_id;
        $shop_service->service_id = $request->service_id;
        $shop_service->price = $request->price;
        $shop_service->duration = $request->duration;
        $shop_service->save();
        return response()->json('successfully update'); 
    }

    public function editAddService($id){
        $shop_service = shop_service::find($id);
        return response()->json($shop_service); 
    }
    
    public function deleteAddService($id){
        $shop_service = shop_service::find($id);
        $shop_service->delete();
        return response()->json(['message'=>'Successfully Delete'],200); 
    }

    public function updateTime(Request $request){

        for ($x=0; $x<count($_POST['timing_id']); $x++) 
        {
            $service_time = service_time::find($_POST['timing_id'][$x]);
            $service_time->open_time = $_POST['open_time'][$x];
            $service_time->close_time = $_POST['close_time'][$x];
            $service_time->status = $_POST['status'][$x];
            $service_time->save();
        }

        return response()->json('Successfully Update'); 
    }

    public function shopNotification(){
        $shop_push_notification = push_notification::all();
        $shop = User::all();
        return view('admin.shop_notification',compact('shop_push_notification','shop'));
    }

    public function updateShopNotification($id,$status){
        $push_notification = push_notification::find($id);
        $push_notification->status = $status;
        $push_notification->save();
        return response()->json(['message'=>'Successfully Update'],200); 
    }


    public function getPackagePlan($id){ 
    
    $shop = User::find($id);
    
    $data = shop_package::all();

$output ='';
foreach ($data as $key => $value) {
    if($value->id == $shop->shop_package){
        $output .= '<input checked type="radio" name="upgrade_plan" id="'.$value->id.'" value="'.$value->id.'"><label class="four col" for="'.$value->id.'">'.$value->package_name.'</label>';
    }
    else{
        $output .= '<input  type="radio" name="upgrade_plan" id="'.$value->id.'" value="'.$value->id.'"><label class="four col" for="'.$value->id.'">'.$value->package_name.'</label>';
    }

}
      
      echo $output;
      
    }


    public function updatePlan(Request $request){

        $shop_package = shop_package::find($request->upgrade_plan);
        $expiry_date = '';
        if($shop_package->validity == '1'){
            $expiry_days = $shop_package->validity_count;
            $remind_days = $shop_package->validity_count - $shop_package->package_renewal_remember_days;
            $expiry_date = date('Y-m-d', strtotime("+".$expiry_days." days"));
            $remind_date = date('Y-m-d', strtotime("+".$remind_days." days"));
        }
        else{
            $expiry_days = $shop_package->validity_count * 30;
            $remind_days = $expiry_days - $shop_package->package_renewal_remember_days;
            $expiry_date = date('Y-m-d', strtotime("+".$expiry_days." days"));
            $remind_date = date('Y-m-d', strtotime("+".$remind_days." days"));
        }

        $used_package = new used_package;
        $used_package->package_id = $request->upgrade_plan;
        $used_package->active_date = date('Y-m-d');
        $used_package->expiry_date = $expiry_date;
        $used_package->remind_date = $remind_date;
        $used_package->save();

        $shop_update = User::find($request->id);
        $shop_update->shop_package = $request->upgrade_plan;
        $shop_update->used_package_id = $used_package->id;
        $shop_update->active_date = date('Y-m-d');
        $shop_update->expiry_date = $expiry_date;
        $shop_update->remind_date = $remind_date;
        $shop_update->save();

        return response()->json('successfully save'); 
    }


}
