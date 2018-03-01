<?php


class Api_Grade_Create_Controller extends Api_Base_Controller
{

    protected function rules(): array
    {
        // TODO: Implement rules() method.
        return [
            'StudentId'=>'digits_between:15,15|required',
            'Score'=>'numeric|required|min:0|max:100',
            'LessonName'=>'required',
            'AcademicYear'=>'required',
            'Term'=>'required|numeric|max:3|min:1',
            'GradePoint'=>'required|numeric|min:0',
            'Credit'=>'required|numeric|min:0',
        ];
    }

    protected function messages(): array
    {
        // TODO: Implement messages() method.
        return [
            'StudentID.required'=>'学号不能为空',
            'StudentID.digits_between'=>'学号为15位',
            'Score.required'=>'成绩不能为空',
            'Score.numeric'=>'成绩必须为数字',
            'Score.max'=>'成绩不能超过100',
            'Score.min'=>'成绩不能低于0',
            'LessonName.required'=>'课程名不能为空',
            'AcademicYear.required'=>'学年不能为空',
            'Term.required'=>'学期不能为空',
            'Term.numeric'=>'学期必须为数字',
            'Term.max'=>'学期数必须为1,2,3',
            'Term.min'=>'学期数必须为1,2,3',
            'GradePoint.required'=>'绩点不能为空',
            'GradePoint.numeric'=>'绩点必须为数字',
            'GradePoint.min'=>'绩点不能为负数',
            'Credit.required'=>'学分不能为空',
            'Credit.numeric'=>'学分必须为数字',
            'Credit.min'=>'学分不能为负数',
        ];
    }

    protected function process()
    {
        // TODO: Implement process() method.

        $records=$this->getRequest()->getParams();
        if(Service_Score_Model::Store($records))
            $respose=['Result'=>'Successful'];
        $this->getResponse()->setBody(json_encode($respose, JSON_UNESCAPED_UNICODE));

    }


}
