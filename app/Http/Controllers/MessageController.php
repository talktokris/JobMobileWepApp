<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\User;
use App\models\Push_message_list;

class MessageController extends Controller
{
    public function send($hash_id=null, Request $request){

        $id= base64_decode($hash_id);
        $userData= User::where('id', $id)->get();



        if($request->isMethod('post')){
            $data=$request->all();

        $validatedData = $request->validate([
            'title' => 'required|string|min:5|max:100',
            'sub_title' => 'required|string|min:5|max:50',
            'message' => 'required|string|min:5|max:300',
            'device_id' => 'required|string|min:1|max:150',
            'id' => 'required|integer|between:0,900000',

            ]);


         //   $user_id = Auth::user()->id;
           // $email = Auth::user()->email;

            $ip= request()->ip();
           // $RandumSting= strtoupper(substr(md5(uniqid(rand(1,9))), 0, 8));
           // $message_thread=$user_id.'-'.$RandumSting;
            //$TimeStamp=date('Y-m-d H:i:s');



            $data= $request->all();
            $newsSave = new Push_message_list;
            $newsSave->user_id= $data['id'];
            $newsSave->device_id= $data['device_id'];
            $newsSave->title= $data['title'];
            $newsSave->sub_title= $data['sub_title'];
            $newsSave->message= $data['message'];
            $newsSave->status= 1;
            $newsSave->save();


            if(!$newsSave){      return redirect('admin/resumes/view/'. base64_encode($data['id']))->with('flash_message_error', 'Internal error. Please email to support@stjobagency.com'); }
            else {

                $sendMessage= $this->SendMessageFunction($data['device_id'], $data['title'], $data['sub_title'], $data['message']);

                return redirect('admin/resumes/view/'. base64_encode($data['id']))->with('flash_message_success', 'Push notifications sent successfully');}

        }

        return view("admin.messageCreate")->with(compact("userData"));


    }

    public function list(){

        return view("admin.resumeSearch");

    }

    public function track(){


        $data= Push_message_list::where('status','=',1)->orderBy('id','DESC')->with('geMessageIdInfo')->get();
        // return $data;

        return view("admin.messageSearch")->with(compact("data"));

    }




    public function setMessage()
    {

        $device_id = 'ExponentPushToken[wwNKeiOpEvWrCBf3dnb2iV]';
        $title = 'Message Two';
        $subTitle = 'Message Two';
        $body = 'Hi Kris , How are you ?';

        $sendMessage= $this->SendMessageFunction($device_id, $title, $subTitle, $body);

    }





    public function SendMessageFunction($device_id, $title, $subTitle, $body)
    {
       // 'to' => 'ExponentPushToken[wwNKeiOpEvWrCBf3dnb2iV]',
       // 'priority'=>    'default' | 'normal' | 'high'


            $payload = array(
                'to' => $device_id,
                'sound' => 'default',
                'title' => $title,
                'subtitle' => $title,
                'body' => $body,
            );

            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => "https://exp.host/--/api/v2/push/send",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode($payload),
            CURLOPT_HTTPHEADER => array(
                "Accept: application/json",
                "Accept-Encoding: gzip, deflate",
                "Content-Type: application/json",
                "cache-control: no-cache",
                "host: exp.host"
                ),
            ));

            $response = curl_exec($curl);
            $err = curl_error($curl);

            curl_close($curl);
            $responsMsg='';

        if ($err) {  $responsMsg= "cURL Error #:" . $err ; } else {  $responsMsg = $response ; }

        return $responsMsg;
    }




}
