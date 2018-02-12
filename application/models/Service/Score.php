<?php

class Service_Score_Model extends Service_Base_Model
{

    public static function All_Record(){
        $records=Dao_Score_Model::all();
        return $records;
    }

    public static function Search_Score($student_id,$academic_year=0,$term=0){

        if($academic_year)
            $oper1='=';
        else
            $oper1='>';
        if($term)
            $oper2='=';
        else
            $oper2='>';

        $condition=[['student_id','=',$student_id],
                    ['academic_year',$oper1,$academic_year],
                    ['term',$oper2,$term]
            ];

        $records=Dao_Score_Model::where($condition)->
        select('student_id','lesson_name','score','grade_point','credit')->get();
        return $records;
    }

    public static function Store($record){

        $condition=[
            ['student_id',$record['student_id']],
            ['academic_year',$record['academic_year']],
            ['term',$record['term']],
            ['lesson_name',$record['lesson_name']],
        ];

        $cord=Dao_Score_Model::where($condition)->first();
        if($cord->isEmpty()) {
            $cord = new Dao_Score_Model;
        }
        $cord->student_id=$record['student_id'];
        //$cord->lesson_id=$record['lesson_id'];
        $cord->score=$record['score'];
        $cord->lesson_name=$record['lesson_name'];
        $cord->academic_year=$record['academic_year'];
        $cord->term=$record['term'];
        $cord->grade_point=$record['grade_point'];
        $cord->credit=$record['credit'];

        if($cord->save()){
            return true;
        }
        else{
            return false;
        }
    }

}