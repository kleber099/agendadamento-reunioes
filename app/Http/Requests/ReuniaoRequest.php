<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReuniaoRequest extends FormRequest
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
            'titulo' => 'required|max:255',
            'local' => 'required',
            'inicio' => 'required|date',
            'fim' => 'required|date|after_or_equal:inicio',
        ];
    }
}
