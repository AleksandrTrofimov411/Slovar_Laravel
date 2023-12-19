<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class ruLang implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $chr_en = "А-Яа-яЁё";
        if (!preg_match("/^[$chr_en]+$/u", $value)) {
            $fail('The input must be in Latin');
        }
    }
}
