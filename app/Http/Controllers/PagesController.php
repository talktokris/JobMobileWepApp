<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function index(){

    return view("public.landingPage");

    }

    public function privacy(){

        return view("public.privacyPolicyPage");

        }
}