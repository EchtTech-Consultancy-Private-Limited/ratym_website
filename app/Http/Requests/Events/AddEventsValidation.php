<?php

namespace App\Http\Requests\Events;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\UniqueTitleNotSoftDeleted;
use Illuminate\Http\Request;

class AddEventsValidation extends FormRequest
{
     /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title_name_en'=>['required',
                    new UniqueTitleNotSoftDeleted('events_management', 'title_name_en', 'soft_delete'),
            ],
            'tabtype'=> 'required',
            'eventtype'=> 'required',
            'startdate'=> 'required',
            'enddate'=> 'required',
           // 'kt_description_en'=> 'required',
            //'kt_description_hi'=> 'required',
        ];
    }
    public function messages()
    {
        return [
            'tabtype.required'=> 'Select Tab Type',
            'eventtype.required'=> 'Select Event Type',
            'title_name_en.required'=> 'Enter Unique Title Name.',
            'title_name_en.unique'=> 'Enter Title Name.',
            'title_name_hi.required'=> 'Enter Hindi Title Name.',
            'startdate.required'=> 'Enter start Date.',
            'enddate.required'=> 'Enter End Date.',
           // 'kt_description_en.required'=> 'Enter description English.',
           // 'kt_description_hi.required'=> 'Enter description Hindi.',

        ];
    }
}
