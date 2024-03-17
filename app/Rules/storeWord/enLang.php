<?php

namespace App\Rules\storeWord;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class enLang implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $chr_en = "a-zA-Z";
        if (!preg_match("/^[$chr_en]+$/", $value)) {
            $fail('The input must be in Latin');
        }
    }
}
