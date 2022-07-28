<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\User;
use App\Models\Member_educations_data;
use App\Models\Member_experiences_data;
use App\Models\Member_favorite_job;
use App\Models\Member_job_preferences_data;
use App\Models\Member_languages_data;
use App\Models\Member_skill_data;
use App\Models\Member_tranings_data;

class ResumeController extends Controller
{
    //
    public function search(){


        $data= User::where([['status','=',1],['role','=',0]])->orderBy('id', 'DESC')->get();
      //  return $data;

        return view("admin.resumeSearch")->with(compact("data"));

    }

    public function recent(){

        $data= User::where([['status','=',1],['role','=',0]])->orderBy('id', 'DESC')->limit(100)->get();
        return view("admin.resumeRecent")->with(compact("data"));

    }


    public function view($hash_id=null){

        $id= base64_decode($hash_id);



        $data= User::where([['id','=',$id],['status','=',1]])->with('getEducation')->with('getExperiences')->with('getJobPreferences')->with('getTranings')->with('getSkill')->with('getLanguages')->get();
      // return $data;
     return view("admin.resumeView")->with(compact("data"));

    }




}
