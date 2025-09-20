<?php

namespace App\Http\Requests\Dashboard;

use App\Models\About;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreCourse extends FormRequest
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
            $inputs[$locale . '.description'] = ['nullable', 'string'];
        }
        $inputs['image'] = ['nullable', 'image', 'mimes:png,jpg,jpeg,webp', Rule::requiredIf(function () {
            return !isset($this->id);
        })];
        $inputs['type'] = ['required'];
        $inputs['max_student'] = ['required', 'numeric'];
        $inputs['price'] = ['required', 'numeric'];
        return $inputs;
    }
}
