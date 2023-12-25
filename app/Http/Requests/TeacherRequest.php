<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeacherRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'string',
            'subject' => 'string',
            'age' => 'min:1|max:100',
            'id' => 'integer|exists:teachers,id',
        ];
    }
}
