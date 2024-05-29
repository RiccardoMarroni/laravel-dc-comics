<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
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
            'title' => 'required|max:250|min:5',
            'description' => 'nullable',
            'thumb' => 'nullable|max:255|min:10',
            'price' => 'required|decimal:2',
            'series' => 'required|max:250|min:5',
            'sale_date' => 'required',
            'type' => 'required|max:250|min:5',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Il titolo è obbligatorio',
            'title.min' => 'Il titolo deve avere almeno :min caratteri',
            'title.max' => 'Il titolo deve avere massimo :max caratteri',
            'price.required' => 'Il prezzo è obbligatorio',
            'price.decimal' => 'Il prezzo deve avere un formato valido',
            'series.required' => 'La serie è obbligatoria',
            'series.min' => 'La serie deve avere almeno :min caratteri',
            'series.max' => 'La serie deve avere massimo :max caratteri',
            'sale_date.required' => 'La data di uscita è obbligatoria',
            'type.required' => 'Il tipo è obbligatorio',
            'type.min' => 'Il tipo deve avere almeno :min caratteri',
            'type.max' => 'Il tipo deve avere massimo :max caratteri',
        ];
    }
}