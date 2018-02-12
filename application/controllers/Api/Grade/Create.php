<?php


class Api_Grade_Create_Controller extends Api_Base_Controller
{

    protected function rules(): array
    {
        // TODO: Implement rules() method.
        return [
            'student_id'=>'digits_between:15,15|required',
            'score'=>'numeric|required|min:0|max:100',
            'lesson_name'=>'required',
            'academic_year'=>'required',
            'term'=>'required|numeric|max:3|min:1',
            'grade_point'=>'required|numeric|min:0',
            'credit'=>'required|numeric|min:0',
        ];
    }

    protected function messages(): array
    {
        // TODO: Implement messages() method.
        return [
            'student_id.required'=>'学号不能为空',
            'student_id.digits_between'=>'学号为15位',
            'score.required'=>'成绩不能为空',
            'score.numeric'=>'成绩必须为数字',
            'score.max'=>'成绩不能超过100',
            'score.min'=>'成绩不能低于0',
            'lesson_name.required'=>'课程名不能为空',
            'academic_year.required'=>'学年不能为空',
            'term.required'=>'学期不能为空',
            'term.numeric'=>'学期必须为数字',
            'term.max'=>'学期数必须为1,2,3',
            'term.min'=>'学期数必须为1,2,3',
            'grade_point.required'=>'绩点不能为空',
            'grade_point.numeric'=>'绩点必须为数字',
            'grade_point.min'=>'绩点不能为负数',
            'credit.required'=>'学分不能为空',
            'credit.numeric'=>'学分必须为数字',
            'credit.min'=>'学分不能为负数',
        ];
    }

    protected function process()
    {
        // TODO: Implement process() method.

        $records=$this->getRequest()->getParams();
        if(Service_Score_Model::Store($records))
            echo 'successful';

    }


}