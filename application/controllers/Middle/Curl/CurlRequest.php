<?php
    class Middle_Curl_CurlRequest_Controller {

        public static function SendRequest($url,$post='',$cookie='',$iscookiereturn=0){
            $curl=curl_init();

            curl_setopt($curl,CURLOPT_URL,$url);

            if($post){
                curl_setopt($curl,CURLOPT_POST,1);
                curl_setopt($curl,CURLOPT_POSTFIELDS,http_build_query($post));
            }

            if($cookie){
                curl_setopt($curl,CURLOPT_COOKIE,$cookie);
            }

            curl_setopt($curl, CURLOPT_HEADER, $iscookiereturn);
            curl_setopt($curl, CURLOPT_TIMEOUT, 10);
            curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);

            $responses=curl_exec($curl);

            if(curl_errno($curl))
            {
                return curl_errno($curl);
            }
            curl_close($curl);

            return $responses;

        }
    }