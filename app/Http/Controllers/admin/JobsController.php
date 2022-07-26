<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Job_ads_list;
use App\Models\Job_ads_job_description;
use App\Models\Job_ads_job_specification;
use App\Models\Job_apply_list;

class JobsController extends Controller
{
    public function store(){

        return view("admin.adminDashboard");

    }


    public function search(){

        $data= Job_ads_list::orderBy('id', 'DESC')->get();

        return view("admin.jobsSearch")->with(compact("data"));

    }
}