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
}
