<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    function getData(){
        return ["name"=>"Triveni", "contact"=>"945949594596"];
      }
}
