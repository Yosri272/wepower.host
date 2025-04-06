<?php

namespace Illuminate\Validation\Rules;

use Illuminate\Support\Traits\Conditionable;
<<<<<<< HEAD

class Exists
=======
use Stringable;

class Exists implements Stringable
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
{
    use Conditionable, DatabaseRule;

    /**
     * Convert the rule to a validation string.
     *
     * @return string
     */
    public function __toString()
    {
        return rtrim(sprintf('exists:%s,%s,%s',
            $this->table,
            $this->column,
            $this->formatWheres()
        ), ',');
    }
}
