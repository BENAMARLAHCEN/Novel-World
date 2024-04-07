<?php

namespace App\Http\Requests\Chapters;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string'],
            'number' => ['required', 'integer', 'unique_in_novel'],
        ];
    }

    public function messages(): array
    {
        return [
            'number.unique_in_novel' => 'Chapter number already exists in this novel',
        ];

    }
    
    public function withValidator($validator)
    {
        $validator->addExtension('unique_in_novel', function ($attribute, $value, $parameters, $validator) {
            return $this->chapter->novel->chapters()->where('number', $value)->count() === 0;
        });
    }

}
