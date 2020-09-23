<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\area;
use App\terms_and_condition;
use App\review;
use App\User;
use App\service;
use App\service_time;
use App\shop_service;
use App\shop_push_notification;
use App\shop_password;
use App\customer_password;
use App\customer;
use Hash;
use DB;
use Mail;

class PageController extends Controller
{

	public function home(){
        return view('pages.home');
	}
    public function aboutUs(){
        return view('pages.about');
    }
    public function Services(){
        return view('pages.services');
    }
    public function contactUs(){
        return view('pages.contact');
    }
    public function bodyWash(){
        return view('pages.body_wash');
    }
    public function interiorCleaning(){
        return view('pages.interior_cleaning');
    }
    public function engineDetailing(){
        return view('pages.engine_detailing');
    }
    public function carPolish(){
        return view('pages.car_polish');
    }

    public function ShopRegister(){
        $city = area::where('parent_id',0)->get();
        $area = area::where('parent_id','!=',0)->get();
        $terms = terms_and_condition::first();
        return view('pages.shop_register',compact('city','area','terms'));
    }
    public function saveShopRegister(Request $request){
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
        $shop->member_license = $request->member_license;
        $shop->shop_commission = $request->shop_commission;
        $shop->city = $request->city;
        $shop->area = $request->area;
        $shop->address = $request->address;
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
        $shop->signature_data = $request->imgData;
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

        $all = $shop_password::find($shop_password->id);
        Mail::send('mail.shop_send_mail',compact('all'),function($message) use($all){
            $message->to($all['email'])->subject('Create your Own Password');
            $message->from('aravind.0216@gmail.com','I-shop Website');
        });
        
        return response()->json('successfully save'); 
    }

    public function ShopValidate(Request $request){
        $request->validate([
            'email'=> 'required|unique:users',
            'owner_name'=>'required',
        ]);
        
        return response()->json(true); 
        //return response()->json(['error' => false, 'success' => true]);
    }

    public function shopCreatePassword($id){
        $shop = shop_password::find($id);
        return view('pages.shop_new_password',compact('shop','id'));
    }

    public function shopUpdatePassword(Request $request){
        $request->validate([
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6'
        ]);

        $shop = User::find($request->shop_id);
        $shop->password = Hash::make($request->password);
        $shop->save();

        $shop_password = shop_password::find($request->id);
        $shop_password->status = 1;
        $shop_password->save();
        
        return response()->json('successfully save'); 
    }


    public function customerCreatePassword($id){
        $customer = customer_password::find($id);
        return view('pages.customer_new_password',compact('customer','id'));
    }

    public function customerUpdatePassword(Request $request){
        $request->validate([
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6'
        ]);

        $customer = customer::find($request->customer_id);
        $customer->password = Hash::make($request->password);
        $customer->save();

        $customer_password = customer_password::find($request->id);
        $customer_password->status = 1;
        $customer_password->save();
        
        return response()->json('successfully save'); 
    }

    public function updateLogin(Request $request){
        $shop = User::find($request->id);
        $shop->signature_data = $request->data;
        $shop->login_status = 1;
        $shop->save();

        return response()->json(['message'=>'Successfully Update'],200); 
    }


    public function getArea($id){ 
    
    $data = area::where('parent_id',$id)->get();

$output ='<option value="">SELECT</option>';
foreach ($data as $key => $value) {
    
$output .= '<option value="'.$value->id.'">'.$value->area.'</option>';
}
      
      echo $output;
      
    }

    public function contactMail(Request $request){
        // $request->validate([
        //      'name'=>'required',
        //      'phone'=>'required',
        //      'email'=>'required',
        //      'message'=>'required',
        //      'g-recaptcha-response' => ['required', new ValidRecaptcha]
        // ]);
        $all = $request->all();
        Mail::send('pages.mail',compact('all'),function($message) use($all){
             $message->to('contact@lrbinfotech.com')->subject($all['subject']);
             $message->from('contact@lrbinfotech.com',$all['name']);
        });
        return response()->json(['message'=>'Successfully Send'],200); 
        //return back();
   }


}
