<?php

namespace App\Http\Requests\Roles;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\UniqueTitleNotSoftDeleted;
use Illuminate\Http\Request;

class EditRoleValidation extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(Request $request)
    {
        $Id = $request->get('id');
        return [
            'role_type'=> 'required|unique:role_type_users,role_type,'.$Id.',uid',
            'sort_order'=> 'required',
        ];
    }
    public function messages()
    {
        return [
           'role_type.unique'=> 'Enter Unique Role Name.',
            'role_type.required'=> 'Enter Role Name.',
            'sort_order.required'=> 'Enter Sort order.',
        ];
    }
}