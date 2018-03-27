<?php

 class Api_User_Login_Controller extends Api_Base_Controller{

     protected function method(): string
     {
         return 'GET';
     }

     protected function rules(): array
     {
         // TODO: Implement rules() method.
         return[
             'swuId'=>'required|digits_between:15,15',
             'password'=>'required',
             ];
     }

     protected function messages(): array
     {
         // TODO: Implement messages() method.
         return[
             'swuId.required'=>'学号不能为空',
             'swuId.digits_between'=>'学号为15位',
             'password.required'=>'密码不能为空',
         ];
     }
     protected function loginrequest($message){

         $url='URL';

         $post_data=array(
             "username"=>$message['swuId'],
             "password"=>$message['password'],
         );

         $responses=Middle_Curl_CurlRequest_Controller::SendRequest($url,$post_data);
         $data=json_decode($responses,true);
         if($data['code']=="200")
             return true;
         else if($data['code']=="400"){
             return false;
         }
     }
     protected function process()
     {

         $records = $this->getRequest()->getParams();

         $message=[
             'swuId'=>$records['swuId'],
             'password'=>$records['password'],
             ];

         //if(!$this->loginrequest($message))
         if(false){
             $this->success=false;
             $this->code=500;
             $this->msg="用户名或密码错误";
         }
         else{
             $time=time();
             $token=array(
                 "swuId"=>$records['swuId'],
                 "time"=>$time,
             );
             $jwt=Middle_Token_Create_Controller::CreateToken($token);
             $this->data = [
                 "token"=>$jwt,
             ];
             $this->success=true;
             $this->code=200;
         }

           /*if (Service_User_Model::Exist($records)) {

                 $jwt=$records['token'];

                 if(Middle_Token_Validate_Controller::Validate($jwt)) {
                     $respose = ['Result' => '验证成功'];
                 }
                 else{
                     $respose =['Result'=>'验证失败'];
                 }
             }

             else {

                 if (Service_User_Model::Store($records)) {
                     $time=time();
                     $token=array(
                         "swuId"=>$records['swuId'],
                         "time"=>$time,
                         );
                     $jwt=Middle_Token_Create_Controller::CreateToken($token);
                     $respose = [
                            "success"=>true,
                            "msg"=>"some information",
                            "code"=>200,//204
                            "token"=>$jwt,
                     ];
                 }

             }
            */
         }


 }