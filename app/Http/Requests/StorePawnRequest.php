<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StorePawnRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'id_number' => 'required|digits:' . config('onedoc.id_card_number_length'),
            'id_card_number' => 'required',
            'id_card_issuer' => [
                'required',
                Rule::in(config('onedoc.police_departments')),
            ],
            'id_card_issued_at' => 'required|date:y-m-d|before:id_card_expires_at',
            'id_card_expires_at' => 'required|date:y-m-d|after:id_card_issued_at',
            'settlement' => 'required',
            'municipality' => 'required',
            'province' => [
                'required',
                Rule::in(config('onedoc.provinces')),
            ],
            'address' => 'required',
            'principal' => 'required|numeric|min:1',
            'management_fee_rate' => [
                'required',
                Rule::in(config('onedoc.pawn_management_fee_rates')),
            ],
            'item' => 'required',
        ];
    }
}
