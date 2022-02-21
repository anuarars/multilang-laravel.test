<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRecommendationRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'occupation' => 'required',
            'book' => 'required',
            'link' => 'required',
            'author' => 'required',
            'year' => 'required',
        ];
    }
}
