<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Job_ads_list;
use App\Models\Job_ads_job_description;
use App\Models\Job_ads_job_specification;
use App\Models\Member_favorite_job;
use App\Models\Job_apply_list;

use Intervention\Image\Facades\Image;

class JobsController extends Controller
{

    public function deleteSpecification(Request $request, $hash_id=null, $del_id=null){

        $role = Auth::user()->role;

          if(($role>=1) &&($hash_id!='')){



              $id = base64_decode($del_id);
            //  dd($id);
              $deleteNews = Job_ads_job_specification::where('id', '=', $id)->delete();
             // return $deleteNews;
              if($deleteNews){   return redirect('admin/jobs/jobs-view/'.$hash_id)->with('flash_message_success', 'Job specification deleted sucessfully');  }
              else {   return redirect('admin/jobs/jobs-view/'.$hash_id)->with('flash_message_error', 'Oops ! Something went wrong, Please contact admin.');  }

          }

          return redirect('admin/jobs/jobs-view/'.$hash_id);


    }

    public function deleteDescription(Request $request, $hash_id=null, $del_id=null){

        $role = Auth::user()->role;

          if(($role>=1) &&($hash_id!='')){



              $id = base64_decode($del_id);
              $deleteNews = Job_ads_job_description::where('id', '=', $id)->delete();
             // return $deleteNews;
              if($deleteNews){   return redirect('admin/jobs/jobs-view/'.$hash_id)->with('flash_message_success', 'Job description deleted sucessfully');  }
              else {   return redirect('admin/jobs/jobs-view/'.$hash_id)->with('flash_message_error', 'Oops ! Something went wrong, Please contact admin.');  }

          }

          return redirect('admin/jobs/jobs-view/'.$hash_id);


    }


    public function jobSpecificationStore(Request $request, $hash_id=null){



        if($request->isMethod('post')){
            $data=$request->all();

            $id= base64_decode($hash_id);

          //  dd($data['status']);

        $validatedData = $request->validate([
            'title' => 'required|string|min:5|max:150',
            'status' => 'required|integer|between:0,10',

            ]);

           // dd($id);

            $data= $request->all();
            $newsSave = new Job_ads_job_specification;
            $newsSave->job_ads_id= $id;
            $newsSave->title= $data['title'];
            $newsSave->status= $data['status'];
            $newsSave->save();


            if(!$newsSave){      return redirect('/admin/jobs/jobs-view/')->with('flash_message_error', 'Internal error. Please email to support@shreecollege.com'); }
            else {   return redirect('/admin/jobs/jobs-view/'.$hash_id)->with('flash_message_success', 'Job created successfully');}

        }

        return view("admin.jobsSpecificationCreate")->with('hash_id', $hash_id);


    }
    public function jobDescriptionStore(Request $request, $hash_id=null){



        if($request->isMethod('post')){
            $data=$request->all();

            $id= base64_decode($hash_id);

          //  dd($data['status']);

        $validatedData = $request->validate([
            'title' => 'required|string|min:5|max:150',
            'status' => 'required|integer|between:0,10',

            ]);

           // dd($id);

            $data= $request->all();
            $newsSave = new Job_ads_job_description;
            $newsSave->job_ads_id= $id;
            $newsSave->title= $data['title'];
            $newsSave->status= $data['status'];
            $newsSave->save();


            if(!$newsSave){      return redirect('/admin/jobs/jobs-view/')->with('flash_message_error', 'Internal error. Please email to support@shreecollege.com'); }
            else {   return redirect('/admin/jobs/jobs-view/'.$hash_id)->with('flash_message_success', 'Job created successfully');}

        }

        return view("admin.jobsDescriptionCreate")->with('hash_id', $hash_id);


    }


    public function imageUpload(Request $request, $hash_id=null){

        $News_listData= Job_ads_list::where('id','=', base64_decode($hash_id))->get();
        $id= base64_decode($hash_id);

        $savingPath='assets/images/jobs';

        if ('POST' === $request->getMethod()){

            $validatedData= $request->validate([
                'image_name'=>'required|mimes:png,jpg,jpeg|max:8048',

            ]);

            $data = $request->all();

            $imageName = $data['image_name'];

           // $get_id = $next_ID;
            $maxOriginalNameSize=20;
            $ImageNameOrg=$imageName->getClientOriginalName();
            if(strlen($ImageNameOrg) > $maxOriginalNameSize){ $ImageNewNameSet=substr($ImageNameOrg, 0, $maxOriginalNameSize);
                $ImageNewName= $ImageNewNameSet.'.'.$imageName->getClientOriginalExtension();
             }
            else { $ImageNewName = $ImageNameOrg;}// shorting the image name;

            $getImageName= date('Y-m-d-His').'-'.$ImageNewName;

            /* Saving the images Start */

            $thumbImgName='thumb-'.$getImageName;
            $largeImgName='large-'.$getImageName;

            $get_id = $id;

            $newPath= $savingPath.'/'.$get_id;

          if (!file_exists($newPath)) {  mkdir($newPath, 0777, true);  }

            $img = Image::make($imageName)->fit(800, 800, function ($constraint) {
                    $constraint->upsize();
            });

            $img->save($newPath.'/'.$thumbImgName, 60);

                $imageSave = Job_ads_list::where("id", $get_id)->update(["image" => $thumbImgName]);

            if($imageSave){
                     return redirect("/admin/jobs/jobs-search")->with('flash_message_success', ' Image uploaded successfully');  }
            else {   return  redirect("/admin/jobs/jobs-search")->with('flash_message_error', 'Oops ! Something went wrong, Please contact admin.');  }

        }

        return view("admin.jobsImageUpload")->with(compact("News_listData"))->with('hash_id', $hash_id);

    }


    public function store(Request $request){



        if($request->isMethod('post')){
            $data=$request->all();

        $validatedData = $request->validate([
            'title' => 'required|string|min:5|max:150',
            'subTitle' => 'required|string|min:10|max:150',
            'vacancies' => 'required|integer|between:0,300',
            'currency' => 'required|string|min:1|max:10',
            'salleryMin' => 'required|integer|between:0,900000',
            'salleryMax' => 'required|integer|between:0,900000',
            'jobCategory' => 'required|string|min:1|max:255',
            'education' => 'required|string|min:1|max:255',
            'skillRequire' => 'required|string|min:1|max:255',
            'location' => 'required|string|min:1|max:255',
            'date_expire' => 'required|string|min:1|max:10',
            'status' => 'required|integer|between:0,10',

            ]);


         //   $user_id = Auth::user()->id;
           // $email = Auth::user()->email;

            $ip= request()->ip();
           // $RandumSting= strtoupper(substr(md5(uniqid(rand(1,9))), 0, 8));
           // $message_thread=$user_id.'-'.$RandumSting;
            //$TimeStamp=date('Y-m-d H:i:s');

            if( $data['date_expire']>=1){

            $totalDays= $data['date_expire']*7;

            $date_expire_form = date('Y-m-d',strtotime("+".$totalDays." days", strtotime(date('Y-m-d'))));
            //dd($date_expire_form);
            }

            $data= $request->all();
            $newsSave = new Job_ads_list;
            $newsSave->title= $data['title'];
            $newsSave->subTitle= $data['subTitle'];
            $newsSave->currency= $data['currency'];
            $newsSave->vacancies= $data['vacancies'];
            $newsSave->salleryMin= $data['salleryMin'];
            $newsSave->salleryMax= $data['salleryMax'];

            $newsSave->jobCategory= $data['jobCategory'];
            $newsSave->education= $data['education'];
            $newsSave->skillRequire= $data['skillRequire'];
            $newsSave->location= $data['location'];
            $newsSave->date_expire= $date_expire_form;
            $newsSave->status= $data['status'];
            $newsSave->save();


            if(!$newsSave){      return redirect('admin/jobs/jobs-search')->with('flash_message_error', 'Internal error. Please email to support@shreecollege.com'); }
            else {   return redirect('admin/jobs/jobs-view/'. base64_encode($newsSave->id))->with('flash_message_success', 'Job created successfully');}

        }

        return view("admin.jobsCreate");


    }



    public function delete(Request $request, $hash_id=null){

      $role = Auth::user()->role;

        if(($role>=1) &&($hash_id!='')){



            $id = base64_decode($hash_id);
            $deleteNews = Job_ads_list::where('id', '=', $id)->delete();
           // return $deleteNews;
            if($deleteNews){   return redirect('admin/jobs/jobs-search')->with('flash_message_success', 'News deleted sucessfully');  }
            else {   return redirect('admin/jobs/jobs-search')->with('flash_message_error', 'Oops ! Something went wrong, Please contact admin.');  }

        }

        return redirect('admin/jobs/jobs-search');


    }

    public function edit(Request $request, $hash_id=null){


        $id= base64_decode($hash_id);






        $newsData = Job_ads_list::where('id', $id)->get();

         $role = Auth::user()->role;


            if ('POST' === $request->getMethod()){

              //  dd($request);
              $validatedData = $request->validate([
                'title' => 'required|string|min:5|max:150',
                'subTitle' => 'required|string|min:10|max:150',
                'vacancies' => 'required|integer|between:0,300',
                'currency' => 'required|string|min:1|max:20',
                'salleryMin' => 'required|integer|between:0,900000',
                'salleryMax' => 'required|integer|between:0,900000',
                'jobCategory' => 'required|string|min:1|max:255',
                'education' => 'required|string|min:1|max:255',
                'skillRequire' => 'required|string|min:1|max:255',
                'location' => 'required|string|min:1|max:255',
                'date_expire' => 'required|string|min:1|max:10',
                'status' => 'required|integer|between:0,10',

                ]);

                $data = $request->all();


              if(($role>=1) &&($hash_id!='')){

                        if( $data['date_expire']>=1){
                            $totalDays= $data['date_expire']*7;
                            $date_expire_form = date('Y-m-d',strtotime("+".$totalDays." days", strtotime(date('Y-m-d'))));
                        }



                        $newsEditSave = new Job_ads_list;
                        $id= base64_decode($hash_id);
                         $newsEditSave = Job_ads_list::where("id", $id)->update(["title" => $data['title'],"subTitle" => $data['subTitle'],"vacancies" => $data['vacancies'],"currency" => $data['currency'],"salleryMin" => $data['salleryMin']
                         ,"salleryMax" => $data['salleryMax'],"jobCategory" => $data['jobCategory'],"education" => $data['education'],"skillRequire" => $data['skillRequire']
                         ,"location" => $data['location'],"date_expire" => $date_expire_form,"status" => $data['status']]);


                       //  $newsEditSave->save()->where("id", $id);

                        if($newsEditSave){   return redirect("/admin/jobs/jobs-search")->with(compact("newsData"))->with('flash_message_success', ' News  updated successfully');  }
                        else {   return redirect("admin/search-news-posts")->with(compact("newsData"))->with('flash_message_error', 'Oops ! Something went wrong, Please contact admin.');  }

                }




            }
            else {  return view("admin.jobsEdit")->with(compact("newsData")); }


    }






    public function search(){

        $data= Job_ads_list::orderBy('id', 'DESC')->get();

        return view("admin.jobsSearch")->with(compact("data"));

    }



    public function view($hash_id=null){

        $id = base64_decode($hash_id);

        $data= Job_ads_list::where('id','=', $id)->with('getJobDescription')->with('getJobSpecification')->with('getFavInfo')->with('getJobApplyUsers')->get();
       // return $data;

       $Favdata= Member_favorite_job::where('job_ads_id','=', $id)->with('getMemberInfo')->get();
       $Applydata= Job_apply_list::where('job_ads_id','=', $id)->with('getApplyIdInfo')->get();
      // return $Applydata;


        return view("admin.jobsView")->with(compact("data"))->with(compact("Favdata"))->with(compact("Applydata"));

    }
}