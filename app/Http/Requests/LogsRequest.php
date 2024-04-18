<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LogsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // Allow all users to access the form submission endpoint
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    { 
        return [
            'name' => 'required|min:3',
            'email' => 'required|email|unique:logs',
            'password' => 'required|min:4|max:9|confirmed',
        ];
    }
}
