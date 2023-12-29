<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeedbackValidation extends FormRequest
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
            'title' => 'required',
            'description' => 'required',
            'category' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'The Title is required.',
            'description.required' => 'The Description is required.',
            'category.required' => 'The Category is required.',
        ];
    }

    protected $stopOnFirstFailure = true;
}
