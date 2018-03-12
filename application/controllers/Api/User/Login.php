<?php

 class Api_User_Login_Controller extends Api_Base_Controller{
     protected function rules(): array
     {
         // TODO: Implement rules() method.
         return[
           'swuId'=>'required|digits_between:15,15',
             'password'=>'required',];
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

     protected function process()
     {

         $records = $this->getRequest()->getParams();

         $message=['swuId'=>$records['swuId'],
                    'password'=>$records['password'],
             ];


         Middle_Redis_SendMessage_Controller::Send($message);
         /*    if (Service_User_Model::Exist($records)) {

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
                     $token=$records['swuId'];
                     $jwt=Middle_Token_Create_Controller::CreateToken($token);
                     $respose = ['Result' => 'Successful',
                         'token'=>$jwt,
                     ];
                 }

             }
*/
             //$this->getResponse()->setBody(json_encode($respose, JSON_UNESCAPED_UNICODE));
         }


 }