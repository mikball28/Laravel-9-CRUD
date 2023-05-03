<?php

namespace App\Http\Controllers;

use App\Models\AddData;
use Illuminate\Http\Request;

class AddDataController extends Controller
{
    public function index(){
        $addData = AddData::get();

        return view('index',compact('addData'));
    }
}
