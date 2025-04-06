<?php

namespace Illuminate\Console\View\Components\Mutators;

<<<<<<< HEAD
=======
use Illuminate\Support\Stringable;

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
class EnsureNoPunctuation
{
    /**
     * Ensures the given string does not end with punctuation.
     *
     * @param  string  $string
     * @return string
     */
    public function __invoke($string)
    {
<<<<<<< HEAD
        if (str($string)->endsWith(['.', '?', '!', ':'])) {
=======
        if ((new Stringable($string))->endsWith(['.', '?', '!', ':'])) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            return substr_replace($string, '', -1);
        }

        return $string;
    }
}
