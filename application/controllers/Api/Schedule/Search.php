<?php

class Api_Schedule_Search_Controller extends Api_Base_Controller
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
            'AcademicYear'=>'|numeric|max:3000|min:2000|required',
        ];
    }

    protected function messages(): array
    {
        // TODO: Implement messages() method.
        return [
            'StudentId.required'=>'学号不能为空',
            'StudentId.digits_between'=>'学号为15位数字',

            'Term.required'=>'学期不能为空',
            'Term.numeric'=>'学期必须为数字',
            'Term.max'=>'学期数必须为1,2,3',
            'Term.min'=>'学期数必须为1,2,3',

            'AcademicYear.required'=>'学年不能为空',
            'AcademicYear.numeric'=>'学年必须为数字',
            'AcademicYear.max'=>'请输入正确的学年数',
            'AcademicYear.min'=>'请输入正确的学年数'
            ];
    }

    protected function process()
    {

        $Param = $this->getRequest()->getParams();
        $results = Service_Schedule_Model::Search_Schedule($Param['StudentId'], $Param['AcademicYear'], $Param['Term']);

        if ($results->isEmpty()) {
            $this->success=false;
            $this->code=500;
            $this->msg="信息不存在";
        }else {
            foreach ($results as $result) {

                $result1=['StudentId'=>$result->student_id,
                        'LessonName'=>$result->lesson_name,
                        'AcademicYear'=>$result->academic_year,
                        'Term'=>$result->term,
                        'Teacher'=>$result->teacher,
                        'Term'=>$result->term,
                        'Weeks'=>$result->weeks,
                        'Time'=>$result->time,
                        'Week'=>$result->week,
                        'Campus'=>$result->campus,
                        'Classroom'=>$result->classroom,
                        'Academic_Title'=>$result->academic_title
                    ];

                array_push($this->data, $result1);
            }
            $this->success=true;
            $this->code=200;
        }

    }
}