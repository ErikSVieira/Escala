<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateEmployee extends FormRequest
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
            'name' => ['required'],
            'nickname' => ['required'],
            'position_id' => ['required'],
            'birth_date' => ['required'],
            'position_date' => ['required'],
            'photo' => ['nullable', 'image'],
            'ddd' => ['nullable', 'min:2', 'max:2'],
            'phone' => ['nullable', 'min:8', 'max:9'],
            'description' => ['nullable']
        ];
    }
}
