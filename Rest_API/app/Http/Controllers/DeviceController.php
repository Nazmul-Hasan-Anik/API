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
    function add(Request $req){
      $device=new Devices;
      $device->device=$req->device;
      $device->year=$req->year;
      $result=$device->save();
      if($result)
      {
        return ["Result"=>"Data has been saved"];
      }
      else
      {
        return ["Result"=>"Data has not been saved"];
      }

    }
}
