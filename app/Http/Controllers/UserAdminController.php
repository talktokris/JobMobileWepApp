<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserAdminController extends Controller
{
    //


    public function edit(Request $request, $hash_id=null){


        $id= base64_decode($hash_id);






        $newsData = User::where('id', $id)->get();

         $role = Auth::user()->role;


            if ('POST' === $request->getMethod()){

              //  dd($request);
              $validatedData = $request->validate([
                'name' => 'required|string|min:3|max:100',
                'password' => 'required| min:6| max:25 |confirmed',
                'password_confirmation' => 'required| min:6',
                'status' => 'required|integer|between:0,10',

                ]);

                $data = $request->all();


              if(($role>=1) &&($hash_id!='')){

                        $hash_password= Hash::make($data['password']);


                        $newsEditSave = new User;
                        $id= base64_decode($hash_id);
                         $newsEditSave = User::where("id", $id)->update(["name" => $data['name'],"password" => $hash_password,"status" => $data['status']]);


                       //  $newsEditSave->save()->where("id", $id);

                        if($newsEditSave){   return redirect("/admin/users/search")->with(compact("newsData"))->with('flash_message_success', ' User  updated successfully');  }
                        else {   return redirect("/admin/users/search")->with(compact("newsData"))->with('flash_message_error', 'Oops ! Something went wrong, Please contact admin.');  }

                }




            }
            else {  return view("admin.userEdit")->with(compact("newsData")); }


    }


    public function store(Request $request){


        if($request->isMethod('post')){
            $data=$request->all();

        $validatedData = $request->validate([
            'name' => 'required|string|min:3|max:100',
            'email' => 'required|string|email|max:100|unique:users',
            'password' => 'required| min:6| max:25 |confirmed',
            'password_confirmation' => 'required| min:6',
            'status' => 'required|integer|between:0,10',

            ]);


            $role = Auth::user()->role;
           // $email = Auth::user()->email;

          //  $ip= request()->ip();

          if($role>=1){

            $data= $request->all();
            $newsSave = new User;
            $newsSave->name= $data['name'];
            $newsSave->role= 1;
            $newsSave->email= $data['email'];
            $newsSave->password= Hash::make($data['password']);
            $newsSave->status= 1;

            $newsSave->save();


            if(!$newsSave){      return redirect('/admin/users/search')->with('flash_message_error', 'Internal error. Please email to support@jobagency.com'); }
            else {   return redirect('/admin/users/search')->with('flash_message_success', 'User created successfully');}
          }
        }

        return view("admin.userCreate");

    }




    public function search(){


        $data= User::where('role','>=',1)->get();

        return view("admin.usersSearch")->with(compact("data"));

    }
}