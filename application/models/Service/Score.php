<?php

class Service_Score_Model extends Service_Base_Model
{

    public static function All_Record(){
        $records=Dao_Score_Model::all();
        return $records;
    }

    public static function Search_Score($student_id,$academic_year=0,$term=0){

        if($term)
            $oper2='=';
        else
            $oper2='>';

        if($academic_year)
            $oper1='=';
        else {
            $oper1 = '>';
            $oper2='>';
        }
        $condition=[['student_id','=',$student_id],
                    ['academic_year',$oper1,$academic_year],
                    ['term',$oper2,$term]
            ];

        $records=Dao_Score_Model::where($condition)->
        select('student_id','lesson_name','score','grade_point','credit','academic_year','term')->get();
        return $records;
    }

    public static function Store($record){

        $condition=[
            ['student_id',$record['StudentId']],
            ['academic_year',$record['AcademicYear']],
            ['term',$record['Term']],
            ['lesson_name',$record['LessonName']],
        ];

        $cord=Dao_Score_Model::where($condition)->get();
        if($cord->isEmpty()) {
            $cord = new Dao_Score_Model();
        }
        $cord->student_id=$record['StudentId'];
        //$cord->lesson_id=$record['lesson_id'];
        $cord->score=$record['Score'];
        $cord->lesson_name=$record['LessonName'];
        $cord->academic_year=$record['AcademicYear'];
        $cord->term=$record['Term'];
        $cord->grade_point=$record['GradePoint'];
        $cord->credit=$record['Credit'];

        if($cord->save()){
            return true;
        }
        else{
            return false;
        }
    }

}
