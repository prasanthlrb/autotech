<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\shop_package;
use App\shop_package_item;


class PackageController extends Controller
{

    public function saveShopPackage(Request $request){
        $request->validate([
            'package_name'=>'required',
            'price'=>'required',
        ]);

        $shop_package = new shop_package;
        $shop_package->package_name = $request->package_name;
        $shop_package->price = $request->price;
        $shop_package->validity = $request->validity;
        $shop_package->validity_count = $request->validity_count;
        $shop_package->next_renewal_discount = $request->next_renewal_discount;
        $shop_package->package_renewal_remember_days = $request->package_renewal_remember_days;
        $shop_package->save();

        for ($x=0; $x<count($_POST['package_item']); $x++) 
        {
            $shop_package_item = new shop_package_item;
            $shop_package_item->package_id = $shop_package->id;
            $shop_package_item->package_item = $_POST['package_item'][$x];   
            $shop_package_item->save();
        }

        return response()->json('successfully save'); 
    }
    public function updateShopPackage(Request $request){
        $request->validate([
            'package_name'=>'required',
            'price'=>'required',
        ]);
        
        $shop_package = shop_package::find($request->id);
        $shop_package->package_name = $request->package_name;
        $shop_package->price = $request->price;
        $shop_package->validity = $request->validity;
        $shop_package->validity_count = $request->validity_count;
        $shop_package->next_renewal_discount = $request->next_renewal_discount;
        $shop_package->package_renewal_remember_days = $request->package_renewal_remember_days;
        $shop_package->save();

        $shop_package_item = shop_package_item::where('package_id',$request->id)->delete();

        for ($x=0; $x<count($_POST['package_item']); $x++) 
        {
            $shop_package_item = new shop_package_item;
            $shop_package_item->package_id = $shop_package->id;
            $shop_package_item->package_item = $_POST['package_item'][$x];   
            $shop_package_item->save();
        }
        return response()->json('successfully update'); 
    }

    public function ShopPackage(){
        $shop_package = shop_package::all();
        return view('admin.shop_package',compact('shop_package'));
    }
    public function editShopPackage($id){
        $shop_package = shop_package::find($id);
        return response()->json($shop_package); 
    }
    
    public function deleteShopPackage($id){
        $shop_package = shop_package::find($id);
        $shop_package->delete();
        return response()->json(['message'=>'Successfully Delete'],200); 
    }


    public function getShopPackageItem($id){ 
    
    $data = shop_package_item::where('package_id',$id)->get();

$count = 1;
$output ='';
foreach ($data as $key => $value) {
    
$output .= '<tr style="padding:20px;" value="'.$count.'" class="all_row" id="row'.$count.'">
    <td style="width:80%">
        <input class="form-control" type="text" name="package_item[]" value="'.$value->package_item.'" id="package_item'.$count.'" autocomplete="off"  />
    </td>
    <td style="width:20%" align="center">
        <button onclick="removeProductRow('.$count.')" id="removeProductRowBtn'.$count.'" class="btn btn-icon btn-danger rounded-circle" type="button" data-repeater-delete><i class="bx bx-x"></i></button>
    </td>
</tr>';
$count++;
}
      
      echo $output;
      
    }




}
