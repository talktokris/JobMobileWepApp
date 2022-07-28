<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserAdminController extends Controller
{
    //

    public function store(){

        return view("admin.adminDashboard");

    }

    public function search(){


        $data= User::where('role','>=',1)->get();

        return view("admin.usersSearch")->with(compact("data"));

    }
}
