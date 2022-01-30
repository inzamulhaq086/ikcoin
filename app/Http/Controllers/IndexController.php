<?php

namespace App\Http\Controllers;

use App\Models\Gastar;
use Illuminate\Http\Request;

class IndexController extends Controller
{
   public function showIndex(){
      $data['gastars']= Gastar::all();
      return view('frontend.index', $data);
   }
}
