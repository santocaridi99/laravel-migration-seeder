<?php

namespace App\Http\Controllers;
use App\Travel;
use Illuminate\Http\Request;

class TravelController extends Controller
{
    //
    public function index(){
        // query select all
        $data = Travel::all();
        return view('home',compact("data"));
    }
}
