<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdatePosition extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'position' => ['required', 'min:3', 'max: 30'],
            'acronym' => ['required', 'min:2', 'max: 8'],
            'description' => ['required', 'min:3', 'max: 160'],
            // 'active' => ['required']
        ];
    }
}
