<?php

class Api_Grade_Search_Controller extends Api_Base_Controller
{

    protected function rules(): array
    {
        // TODO: Implement rules() method.
        return [];
    }

    protected function messages(): array
    {
        // TODO: Implement messages() method.
        return [];
    }

    protected function process()
    {
        // TODO: Implement process() method.
        var_dump($this->getRequest()->getParams());

    }

}