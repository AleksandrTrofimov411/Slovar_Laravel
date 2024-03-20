<?php
//мод
namespace App\Rules\storeWord;

use App\Models\Words;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class isWordExists implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (Words::where('word', $value)->exists()) {
            $fail('This word is already in the dictionary');
        }
    }
}
