<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
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
            "name" => "required",
            "email" => "required",
            "subject" => "required",
            "message" => "required",
            "user_id" => "nullable",
        ];
    }

    function prepareForValidation()
    {
        $this->merge([
            "user_id" => (auth()->check()?auth()->id():null),
        ]);
    }
}
