<?php

namespace Illuminate\Contracts\Validation;

use Closure;

interface ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  string  $attribute
     * @param  mixed  $value
<<<<<<< HEAD
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
=======
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * @return void
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void;
}
