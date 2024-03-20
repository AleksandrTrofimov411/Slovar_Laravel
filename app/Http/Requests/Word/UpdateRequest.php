<?php

declare(strict_types=1);
namespace App\Http\Requests\Word;

use App\Rules\storeWord\EnglishText;
use App\Rules\storeWord\RussiaText;
use App\Rules\storeWord\Word;
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
            'word' => ['string', new Word, new EnglishText],
            'context' => 'string',
            'translate' => ['string', new Word, new RussiaText]
        ];
    }
}
