<?php

namespace Egulias\EmailValidator\Warning;

class QuotedString extends Warning
{
    public const CODE = 11;

    /**
<<<<<<< HEAD
     * @param scalar $prevToken
     * @param scalar $postToken
=======
     * @param string|int $prevToken
     * @param string|int $postToken
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function __construct($prevToken, $postToken)
    {
        $this->message = "Quoted String found between $prevToken and $postToken";
    }
}
