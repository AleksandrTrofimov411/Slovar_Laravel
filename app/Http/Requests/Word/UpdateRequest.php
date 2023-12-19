<?php

namespace App\Http\Requests\Word;

use App\Rules\enLang;
use App\Rules\isValidWord;
use App\Rules\isWordExists;
use App\Rules\ruLang;
use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'word' => ['string', new isValidWord, new enLang],
            'context' => 'string',
            'translate' => ['string', new isValidWord, new ruLang]
        ];
    }
}
