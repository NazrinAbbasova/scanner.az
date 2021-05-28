<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VacancyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'description' => 'required',
            'obligations' => 'required',
            'guarantees' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Vakansiya başlığını daxil edin',
            'description.required' => 'Vakansiyanın qısa təsvirini daxil edin',
            'obligations.required' => 'Vakansiya üçün öhdəlikləri daxil edin',
            'guarantees.required' => 'Vakansiyanın təminatlarını daxil edin',
        ];
    }
}
