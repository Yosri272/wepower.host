<?php

namespace Illuminate\Console\View\Components\Mutators;

<<<<<<< HEAD
=======
use Illuminate\Support\Stringable;

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
class EnsurePunctuation
{
    /**
     * Ensures the given string ends with punctuation.
     *
     * @param  string  $string
     * @return string
     */
    public function __invoke($string)
    {
<<<<<<< HEAD
        if (! str($string)->endsWith(['.', '?', '!', ':'])) {
=======
        if (! (new Stringable($string))->endsWith(['.', '?', '!', ':'])) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            return "$string.";
        }

        return $string;
    }
}
