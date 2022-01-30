<?php

namespace App\Http\Controllers;

use App\Models\Gastar;
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
}
