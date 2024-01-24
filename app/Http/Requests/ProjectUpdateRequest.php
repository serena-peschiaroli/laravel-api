<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectUpdateRequest extends FormRequest
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
            'title' => ['required', 'max:255', 'unique:projects'],
            'description' => ['nullable'],
            'repository_url' => 'nullable|url',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Il campo è obbligatorio',
            'title.max' => 'Il titolo non deve essere più lungo di 255 caratteri.',
            'title.unique' => 'Questo titolo è già stato usato',
            'repository_url.url' => 'Questo campo deve contenere un URL valido',
        ];
    }
}
