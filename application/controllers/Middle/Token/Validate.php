<?php
    use \Firebase\JWT\JWT;

    class Middle_Token_Validate_Controller {
        public static function Validate($jwt){
            $key="341204";

            $decoded=JWT::decode($jwt,$key,array('HS256'));
            $decoded_array=(array)$decoded;
            echo print_r($decoded_array,true);
            if(!$decoded_array["swuId"])
                return false;
            else
                return true;

        }
    }