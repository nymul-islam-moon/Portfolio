<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HomeRequest extends FormRequest
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
    public function rules()
    {
        return [
            'first_name' => [
                'required',
                'string',
                'max:15',
            ],
            'last_name' => [
                'required',
                'string',
                'max:10',
            ],
            'title' => [
                'required',
                'string',
                'max:255',
            ],
            'email' => [
                'required',
                'email',
                'max:50',
                // 'unique:home,email',
            ],
            'phone' => [
                'required',
                'digits:11',
            ],
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => 'First name is required',
            'last_name.required' => 'Last name is required',
            'title.required' => 'Title is required',
            'email.required' => 'Email is required',
            'phone.required' => 'Phone number is required',
        ];
    }
}
