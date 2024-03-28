<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\device;

class DeviceController extends Controller
{
   function list(){
     return device::all();;
   }
}
