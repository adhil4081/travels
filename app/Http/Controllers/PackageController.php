<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function index($country=null){
        return view('packagetravel',['country'=>$country]);
    }
}
