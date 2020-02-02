<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PartidasFormValidation extends FormRequest
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
            'dataPartida' => 'required',
            'time_id' => 'required|integer|different:time2_id',
            'time2_id' => 'required|integer'
        ];
    }

    public function attributes()
    {
        return [
            'time_id' => 'Adversário 1',
            'time2_id' => 'Adversário 2'
        ];
    }
}
