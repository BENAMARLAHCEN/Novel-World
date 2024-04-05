<?php

namespace App\Http\Requests\Genres;

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
            'name' => 'required|string|max:255|unique:genres,name',
            'color' => 'required|string|max:255',
            'background_color' => 'required|string|max:255',
            'border_color' => 'required|string|max:255',
            'text_color' => 'required|string|max:255',
            'icon' => 'required|string|max:255',
        ];
    }
}
