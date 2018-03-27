<?php

class Api_Grade_Search_Controller extends Api_Base_Controller
{

    protected function method(): string
    {
        return 'GET';
    }

    protected function rules(): array
    {
        // TODO: Implement rules() method.
        return [
            'StudentId'=>'digits_between:15,15|required',
            'Term'=>'|numeric|max:3|min:0|required',
        ];
    }

    protected function messages(): array
    {
        // TODO: Implement messages() method.
        return [
            'StudentId.required'=>'学号不能为空',
            'StudentId.digits_between'=>'学号为15位',
            'Term.numeric'=>'学期必须为数字',
            'Term.max'=>'学期数必须为1,2,3',
            'Term.min'=>'学期数必须为1,2,3',
            'Term.required'=>'学期不能为空',
            ];
    }

    protected function process()
    {

        $Param = $this->getRequest()->getParams();
        $results = Service_Score_Model::Search_Score($Param['StudentId'], $Param['AcademicYear'], $Param['Term']);
        if ($results->isEmpty()) {
            $this->success=false;
            $this->code=500;
            $this->msg="信息不存在";
        }
        else {
            foreach ($results as $result) {

                $result1=['StudentId'=>$result->student_id,
                        'Score'=>$result->score,
                        'LessonName'=>$result->lesson_name,
                        'AcademicYear'=>$result->academic_year,
                        'Term'=>$result->term,
                        'GradePoint'=>$result->grade_point,
                        'Credit'=>$result->credit,
                    ];

                array_push($this->data, $result1);
            }
            $this->success=true;
            $this->code=200;
        }

    }

    /*function convertUnderline( $str , $ucfirst = true)
    {
        while(($pos = strpos($str , '_'))!==false)
            $str = substr($str , 0 , $pos).ucfirst(substr($str , $pos+1));

        return $ucfirst ? ucfirst($str) : $str;
    }*/


}