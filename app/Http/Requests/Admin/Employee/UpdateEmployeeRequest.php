<?php

namespace App\Http\Requests\Admin\Employee;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEmployeeRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'employee_number' => ['string'],
            'image' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],

        ];
    }
}
