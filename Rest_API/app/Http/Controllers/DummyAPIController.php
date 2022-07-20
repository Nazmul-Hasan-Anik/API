<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DummyAPIController extends Controller
{
    //
    public function getData(){
      return ["name=>Anik","email=>anikology@gmail.com","dob=>1997"];
    }
}
