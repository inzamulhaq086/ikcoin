<?php

namespace App\Http\Controllers;

use App\Models\Gastar;
use App\Models\RoadMap;
use Illuminate\Http\Request;

class IndexController extends Controller
{
   public function showIndex(){
      $data['gastars']= Gastar::all();
      $data['roadmaps']= RoadMap::paginate(14);
      return view('frontend.index', $data);

   }
}
