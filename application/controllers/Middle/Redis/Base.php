<?php
    class Middle_Redis_Base_Controller {
        public static function setRedisConnection(){
            $redis=new Redis();
            $redis->connect('redis',6379);
            $redis->auth("abc123");
            return $redis;
        }
    }