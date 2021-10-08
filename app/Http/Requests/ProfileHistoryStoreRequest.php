<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileHistoryStoreRequest extends FormRequest
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
            'id' => ['required', 'max:255'],
            'gender' => ['required', 'max:20', 'string'],
            'phone_number' => ['required', 'max:20', 'string'],
            'blood_group' => ['required', 'max:5', 'string'],
            'no_ktp' => ['required', 'max:20', 'string'],
            'no_npwp' => ['required', 'max:20', 'string'],
            'address_ktp' => ['required', 'max:255', 'string'],
            'address_domisili' => ['required', 'max:255', 'string'],
            'status_domisili' => ['required', 'max:255', 'string'],
            'user_id' => ['required', 'max:255'],
        ];
    }
}
