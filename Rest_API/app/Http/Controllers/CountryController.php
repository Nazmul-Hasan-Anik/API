<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
class CountryController extends Controller
{
    //
    public function all(){
      return response()->json(Country::get());
    }
    public function countrybyid($id){
      return response()->json(Country::find($id));
    }
    public function savecountry(Request $request)
    {
      $country=Country::create($request->all());
      return response()->json($country);
    }
}
