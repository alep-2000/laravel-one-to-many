<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
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
            'title' => 'required| max:100',
            'cover_image' => 'image|max:250'
        ];
    }

    public function messages(){
        return[
            'title.required'  => 'Il titolo è obbligatorio',
            'title.max'       => 'Il titolo deve essere lungo massimo :max caratteri',
            'cover_image.image' => 'Il file inviato deve avere uno dei seguenti formati: jpg, jpeg, zip',
            'cover_image.image' => 'Il nome del file deve essere lungo al massimo :max caratteri'
        ];
    }
}
