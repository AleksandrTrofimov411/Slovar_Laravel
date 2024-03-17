<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\storeNewUser\isUniqueEmail;

class StoreRequest extends FormRequest
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
            'name' => ['string', 'max:20'],
            'email' => ['string', 'email:rfc', new isUniqueEmail],
            'password' => ['min:6', 'required_with:confirmPassword', 'same:confirmPassword'],
            'confirmPassword' => 'min:6'
        ];
    }
}
