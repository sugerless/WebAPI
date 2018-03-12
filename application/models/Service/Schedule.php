<?php

class Service_Schedule_Model extends Service_Base_Model
{

    public static function All_Record(){
        $records = Dao_Schedule_Model::all();
        return $records;
    }

    public static function Search_Schedule($student_id,$academic_year,$term){
        $condition = [['student_id','=',$student_id],
            ['academic_year','=',$academic_year],
            ['term','=',$term]];
        $records= Dao_Schedule_Model::where($condition)->select('*')->get();
        return $records;
    }

    public static function Store($record){

        $condition=[
            ['student_id',$record['StudentId']],
            ['lesson_name',$record['LessonName']],
            ['academic_year',$record['AcademicYear']],
            ['term',$record['Term']],
            ['teacher',$record['Teacher']],
            ['weeks',$record['Weeks']],
            ['time',$record['Time']],
            ['week',$record['Week']],
            ['campus',$record['Campus']],
            ['classroom',$record['Classroom']],
            ['academic_title',$record['AcademicTitle']],
        ];

        $cord=Dao_Schedule_Model::where($condition)->get();
        if($cord->isEmpty()) {
            $cord = new Dao_Schedule_Model();
        }
        else{
            $cord=$cord->first();
        }
        $cord->student_id=$record['StudentId'];
        $cord->lesson_name=$record['LessonName'];
        $cord->academic_year=$record['AcademicYear'];
        $cord->term=$record['Term'];
        $cord->teacher=$record['Teacher'];
        $cord->weeks=$record['Weeks'];
        $cord->time=$record['Time'];
        $cord->week=$record['Week'];
        $cord->campus=$record['Campus'];
        $cord->classroom=$record['Classroom'];
        $cord->academic_title=$record['AcademicTitle'];
        return $cord->save() ;
    }

}
