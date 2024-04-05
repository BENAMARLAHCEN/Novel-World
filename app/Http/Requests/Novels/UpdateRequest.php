<?php

namespace App\Http\Requests\Novels;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'description' => ['required', 'string'],
            'cover' => ['image'],
            'genres' => ['required', 'array'],
            'genres.*' => ['exists:genres,id'],
            'language' => 'required|in:English,Spanish,French',
            'age_rating' => 'required|in:all,16+,13+,18+',
        ];
    }
}
