<?php

namespace App\Http\Controllers;

use App\Models\Gastar;
use App\Models\RoadMap;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('backend.index');
    }
    public function buy(){
        return view('frontend.buy');
    }
    public function team(){
        return view('frontend.team');
    }
    public function business(){
        return view('frontend.business');
    }
    public function algarve(){
        return view('frontend.algarve');
    }
    public function gastar(){
        return view('backend.gastar');
    }
    public function gastarStore(Request $request){
        $request->validate([
            'title' => 'required|max:255',
            'discription' => 'required',
        ]); 
        $gaster = Gastar::create([
            'title' => $request->title,
            'discription' => $request->discription,
        ]);
        if(empty($gaster)){
            return back()->with('ERROR',"Something write  wrong");
        }
        return back()->with('SUCCESS',"Added Successfully");
    }
    public function roadmap(){
        return view('backend.roadmap');
    }
    public function roadmapStore(Request $request){
        $request->validate([
            'name' => 'required|max:25',
            'year' => 'required',
            'title' => 'required|max:120',
            'discription' => 'required',
            'coin_img' => 'required|mimes:jpg,bmp,png|max:2048',
        ]);

        $roadmap = RoadMap::create([
            'name' => $request->name,
            'year' => $request->year,
            'title' => $request->title,
            'discription' => $request->discription,
            'coin_img' => $request->file('coin_img')->store('images/coins'),
        ]);
        if(empty($roadmap)){
            return back()->with('ERROR',"Fill Kor age");
        }
        return back()->with('SUCCESS',"Valo Korsesis");
    }

}
