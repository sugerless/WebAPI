<?php


class Api_Schedule_Create_Controller extends Api_Base_Controller
{

    protected function rules(): array
    {
        // TODO: Implement rules() method.
        return [
            'StudentId'=>'digits_between:15,15|required',
            'LessonName'=>'required',
            'AcademicYear'=>'required',
            'Term'=>'required|numeric|max:3|min:1',
            'Teacher'=>'required',
            'Weeks'=>'required',
            'Time'=>'required',
            'Week'=>'required',
            'Campus'=>'required',
            'Classroom'=>'required',
            'AcademicTitle'=>'required'
        ];
    }

    protected function messages(): array
    {
        // TODO: Implement messages() method.
        return [
            'StudentID.required'=>'学号不能为空',
            'StudentID.digits_between'=>'学号为15位数字',

            'LessonName.required'=>'课程名不能为空',

            'AcademicYear.required'=>'学年不能为空',

            'Term.required'=>'学期不能为空',
            'Term.numeric'=>'学期必须为数字',
            'Term.max'=>'学期数必须为1,2,3',
            'Term.min'=>'学期数必须为1,2,3',

            'Teacher.required'=>'任课教师不能为空',
            'Weeks.required'=>'周次不能为空',
            'Time.required'=>'上课节次不能为空',
            'Week.required'=>'上课时间不能为空',
            'Campus.required'=>'园区不能为空',
            'Classroom.required'=>'教室不能为空',
            'AcademicTitle.required'=>'教师职称不能为空',


        ];
    }

    protected function process()
    {
        // TODO: Implement process() method.

        $records=$this->getRequest()->getParams();
        if(Service_Schedule_Model::Store($records))
            $respose=['Result'=>'Successful'];
        $this->getResponse()->setBody(json_encode($respose, JSON_UNESCAPED_UNICODE));

    }


}
