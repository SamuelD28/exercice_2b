<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CharacterRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:5|max:100',
            'wisdom' => 'required|gte:3|lte:18',
            'constitution' => 'required|gte:3|lte:18',
            'strength' => 'required|gte:3|lte:18',
            'charisma' => 'required|gte:3|lte:18',
            'dexterity' => 'required|gte:3|lte:18',
            'intelligence' => 'required|gte:3|lte:18'
        ];
    }
}
