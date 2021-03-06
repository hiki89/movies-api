<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class StoreMovie extends FormRequest
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
    public function rules(Request $request)
    {
        return [
            'title' => [
                'required',
                Rule::unique('movies')->where('releaseDate', $request['releaseDate'])
            ],
            'director' => 'required',
            'duration' => 'required|integer|min:1|max:500',
            'releaseDate' => 'required',
            'imageUrl' => 'url',
        ];
    }
}
