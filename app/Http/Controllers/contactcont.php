<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contactusmodel;

class contactcont extends Controller
{
    function save(Request $req){

//        print_r($req->input());
        $data=new \App\Models\contactusmodel;
        $data->name=$req->name;
        $data->email=$req->email;
        $data->subject=$req->subject;
        echo $data->save();
        return redirect('/contact')->with('Success');


    }
}
