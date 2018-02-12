<?php

class Api_Grade_Search_Controller extends Api_Base_Controller
{

    protected function rules(): array
    {
        // TODO: Implement rules() method.
        return [
            'student_id'=>'digits_between:15,15|required',
            'term'=>'required|numeric|max:3|min:0',
            'academic_year'=>'required',
        ];
    }

    protected function messages(): array
    {
        // TODO: Implement messages() method.
        return [
            'student_id.required'=>'学号不能为空',
            'student_id.digits_between'=>'学号为15位',
            'academic_year.required'=>'学年不能为空',
            'term.required'=>'学期不能为空',
            'term.numeric'=>'学期必须为数字',
            'term.max'=>'学期数必须为0,1,2,3',
            'term.min'=>'学期数必须为0,1,2,3',
            ];
    }

    protected function process()
    {

        $Param = $this->getRequest()->getParams();
        $results = Service_Score_Model::Search_Score($Param['student_id'], $Param['academic_year'], $Param['term']);
        $respose = [];
        if ($results->isEmpty()) {
            $respose = [
                ['student_id' => $Param['student_id'],
                    'lesson_name' => '结果不存在',
                    'score' => '结果不存在',
                    'grade_point' => '结果不存在',
                    'credit' => '结果不存在',
                ]
            ];
        }
        else {
            foreach ($results as $result) {
                array_push($respose, $result);
            }
        }

        headers_sent() || header('Content-Type: application/json');

        $this->getResponse()->setBody(json_encode($respose, JSON_UNESCAPED_UNICODE));
    }

}