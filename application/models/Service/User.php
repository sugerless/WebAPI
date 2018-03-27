<?php

class Service_User_Model extends Service_Base_Model{

    public static function Store($record){
        $codition=[
            ['swu_id',$record['swuId'],]
        ];
        $cord=Dao_User_Model::where($codition)->get();
        if($cord->isEmpty()){
            $cord=new Dao_User_Model();
        }
        else{
            $cord=$cord->first();
        }

        $cord->swu_id=$record['swuId'];
        $cord->password=md5($record['password']);

        if($cord->save()){
            return true;
        }
        else{
            return false;
        }
    }

    public static function Exist($record){

        $codition=[
            ['swu_id',$record['swuId']],
            ['password',md5($record['password'])],
            ];

        $cord=Dao_User_Model::where($codition)->select('swu_id')->get();

        if($cord->isEmpty()){
            return false;
        }
        else{
            return true;
        }
    }

}
