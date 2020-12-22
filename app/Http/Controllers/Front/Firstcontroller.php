<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\controller;
use Illuminate\Http\Request;

class Firstcontroller extends Controller
{
    public function __construct()
    {
       // $this->middleware('auth');
    }

    public function showmycontroller()

    {
        $data=[];
        $data['ID']=5;
        $data['name']="Ahmed";
        $data['slogan']="الحمد لله";
        $datame=[];
        $obj=new \stdClass();
        $obj->ID=44;
        $obj->name="Ahmed abdel zaher";
        $obj->slogan="الحمد لله";
        return view('welcome',compact("datame"));
    }
    //
}
