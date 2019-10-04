<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class that handles specificity to the equipment request
 * 
 * @author Samuel Dube
 */
class EquipmentRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array Rules to apply on the resquest
     */
    public function rules()
    {
        return [
            'name' => 'required|min:5|max:100'
        ];
    }
}
