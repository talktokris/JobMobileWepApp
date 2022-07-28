<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country_list;
use App\Models\Education_list;
use App\Models\Experience_level_list;
use App\Models\Language_list;
use App\Models\Language_level_list;
use App\Models\Skill_list;
use App\Models\Skill_level_list;


class SettingController extends Controller
{
    public function countries(){


        $data= Country_list::get();

        return view("admin.settingCountry")->with(compact("data"));;

    }

    public function educationLevel(){

        $data= Education_list::get();

        return view("admin.settingEducationLevel")->with(compact("data"));;

    }


    public function experienceLevel(){

           $data= Experience_level_list::get();

        return view("admin.settingExperienceLevel")->with(compact("data"));;

    }

    public function skillLevel(){

        $data= Skill_level_list::get();

        return view("admin.settingSkillLevel")->with(compact("data"));;

    }

    public function language(){

        $data= Language_list::get();

        return view("admin.settingLanguage")->with(compact("data"));;

    }

    public function languageLevel(){

        $data=Language_level_list::get();

        return view("admin.settingLanguageLevel")->with(compact("data"));;

    }
}
