<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Controllers\Controller;
class MasteringController extends Controller
{
    //
    public function index(){
        // $data =[];
        // $data['links'] =[
        //     'Home'=>'index',
        //     'About'=>'about',
        //     'Product'=>'product'
        // ];
        return view("index");
    }
    public function about(){
        return view("about");
    }
    public function product(){
        return view("product");
    }
}
