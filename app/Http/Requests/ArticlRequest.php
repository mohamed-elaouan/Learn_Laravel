<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticlRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'Nom' => "required|min:3",
            'Prix' => "required|min:1",
            'Photo_Url' => "image|mimes:png,jpg,jpeg,svg|max:10240",
            'description' => "required|min:7",
        ];
    }
    //cette partie pour controller les message de formaillaire
    // public function messages()
    // {
    //     return [
    //         'Nom.min' => "Replie cette Champs c'est obligatoire",
    //         'Nom.required' => "Replie cette Champs c'est obligatoire 222",
    //     ];
    // }
}
