<?php

namespace App\Http\Requests\Teacher;

use Illuminate\Foundation\Http\FormRequest;

class TeacherCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'teacher_name' => ['required'],
            'dob' => ['required'],
            'email' => ['required', 'email'],
            'gender' => ['required'],
            'mobile_no' => ['required', 'numeric'],
            'address' => ['required'],
            'joining_date' => ['required'],
            'education_qualification' => ['required'],
            'position' => ['required'],
            'profile_image' => ['nullable', 'image']
        ];
    }
}