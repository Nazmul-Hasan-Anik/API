<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Devices;

class DeviceController extends Controller
{
    //
    function list($id=null){
      return $id?Devices::find($id):Devices::all();
    }
}
