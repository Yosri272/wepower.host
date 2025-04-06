<?php

namespace Egulias\EmailValidator\Warning;

<<<<<<< HEAD
=======
use UnitEnum;

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
class QuotedPart extends Warning
{
    public const CODE = 36;

    /**
<<<<<<< HEAD
     * @param scalar|null $prevToken
     * @param scalar|null $postToken
     */
    public function __construct($prevToken, $postToken)
    {
=======
     * @param UnitEnum|string|int|null $prevToken
     * @param UnitEnum|string|int|null $postToken
     */
    public function __construct($prevToken, $postToken)
    {
        if ($prevToken instanceof UnitEnum) {
            $prevToken = $prevToken->name;
        }

        if ($postToken instanceof UnitEnum) {
            $postToken = $postToken->name;
        }

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        $this->message = "Deprecated Quoted String found between $prevToken and $postToken";
    }
}
