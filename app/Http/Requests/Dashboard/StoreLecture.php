<?php

namespace App\Http\Requests\Dashboard;

use App\Models\About;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreLecture extends FormRequest
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

        foreach (config('translatable.locales') as $locale) {
            $inputs[$locale . '.title'] = ['nullable', 'string', 'max:255'];
            // $inputs[$locale . '.description'] = ['nullable', 'string'];
        }
        $inputs['lisson_id'] = ['required', 'exists:lessons,id'];
        // file 
        $inputs['file'] = ['nullable', 'string'];
        return $inputs;
    }
}
