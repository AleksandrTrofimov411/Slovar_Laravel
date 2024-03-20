<?php
//мод
namespace App\Rules\storeNewUser;

use App\Models\User;
use App\Models\Words;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

//существительное
class isUniqueEmail implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (User::where('email', $value)->exists()) {
            $fail('This email has already been registered');
        }
    }
}
