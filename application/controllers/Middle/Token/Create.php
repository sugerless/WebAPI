<?php
    use \Firebase\JWT\JWT;

    class Middle_Token_Create_Controller {
        public static function CreateToken($token=array()){
            $key=date("H");
            $jwt=JWT::encode($token,$key);
            return $jwt;
        }
    }

