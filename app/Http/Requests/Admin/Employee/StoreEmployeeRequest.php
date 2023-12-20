<?php

namespace App\Http\Requests\Admin\Employee;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployeeRequest extends FormRequest
{
    public function rules()
    {
        return [
            'user_id' => ['required', 'exists:users,id'],
            'employee' => [
                'required',
                'min:1',
            ],
            'employee_number' => ['required', 'integer'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            // Add more validation rules as needed
        ];
    }
}
