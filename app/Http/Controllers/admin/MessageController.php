<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\User;

class MessageController extends Controller
{
    public function send(){


        $data= User::where([['status','=,1'],['role','=,0']])->get();

        return view("admin.resumeSearch")->with(compact("data"))->get();

    }

    public function list(){

        return view("admin.resumeSearch");

    }

    public function track(){

        return view("admin.adminDashboard");

    }
}