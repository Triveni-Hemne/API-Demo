<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\device;

class DeviceController extends Controller
{
//    function list(){
//      return device::all();
    
//    }
//    function listparams($id){
//      return device::find($id);
//     //  return $id?device::find($id):device::all();
//    }
   
   function list($id=null){
     return $id?device::find($id):device::all();
   }

//    function add(){
//         return ["result"=>"Data has been saved."];
//    }
   function add(Request $request){
    $device = new device();
    $device->name = $request->name;
    $device->member_id = $request->member_id;
    $result=$device->save();
    if($result){
        return ["result"=>"Data has been saved."];
    }
    else{
        return ["result"=>"Operation failed."];
    }
   }

   function update(Request $request){
    $device = device::find($request->id);
    $device->name = $request->name;
    $device->member_id = $request->member_id;
    $result = $device->save();
    if($result){
        return ["result"=>"Data has been updated"];
    }
    else{
        return ["result"=>"Operation failed"];
    }
   }

   
   function search($name){
    // this line for match all the string as it is
    // return device::where("name",$name)->get();

    // this line for if the string is not found then it matches all character found in string and return all the result than matched
    return device::where("name","like","%". $name ."%")->get();
  }

  function delete($id = 0){
       $device = device::find($id);
       if($device){
        $result = $device->delete();
        if($result){
         return ["result"=>"One Row will be deleted Successfuly"];
        }
        else{
         return ["result"=>"Operation failed"];
        }
       }
       else {
        return ["result"=>"Operation failed. Record Note found!"];
       }
       
  }
}