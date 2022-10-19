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
            'first_name' => 'required',
            'last_name' => 'required',
            'title' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'hire_me' => 'required',
            'cv' => 'required',
            'avatar' => 'required',
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
            'hire_me.required' => 'Hire link is required',
            'cv.required' => 'Please insert your CV',
            'avatar.required' => 'Please insert your avatar',
        ];
    }
}
