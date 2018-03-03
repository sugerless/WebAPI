<?php
    use \Firebase\JWT\JWT;

    class Middle_Token_Validate_Controller {
        public static function Validate($jwt){
            $key=date("H");

            $decoded=JWT::decode($jwt,$key,array('HS256'));
            $decoded_array=(array)$decoded;

            if(!$decoded_array[0])
                return false;
            else
                return true;

        }
    }