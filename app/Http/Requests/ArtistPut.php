<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArtistPut extends FormRequest
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
        //Here the rules to update an artist
        return [
            'name'=> 'required|min:1|max:40',
            'email'=> 'required|min:3|max:40',
            'phone'=> 'required|min:10|max:10',
            'instagram'=> 'required|min:1|max:40'
        ];
    }
}
