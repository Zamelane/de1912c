<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PartnerRequest extends FormRequest
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
            'partner_type_id' => 'required|integer|exists:partner_types,id',
            'name' => 'required|string|max:255',
            'director' => 'required|string|max:255',
            'email' => 'required|string|max:255|email',
            'phone' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'inn' => 'required|string|max:255',
            'rating' => 'required|integer|min:0|max:10',
        ];
    }
}
