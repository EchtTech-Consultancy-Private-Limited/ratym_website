<?php

namespace App\Http\Requests\EmployeeDirectory;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\UniqueTitleNotSoftDeleted;
use Illuminate\Http\Request;

class EditEmployeeDirectoryValidation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
        ];
    }
}
