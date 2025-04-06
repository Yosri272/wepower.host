<?php

namespace Illuminate\View;

<<<<<<< HEAD
class AppendableAttributeValue
=======
use Stringable;

class AppendableAttributeValue implements Stringable
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
{
    /**
     * The attribute value.
     *
     * @var mixed
     */
    public $value;

    /**
     * Create a new appendable attribute value.
     *
     * @param  mixed  $value
     * @return void
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * Get the string value.
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->value;
    }
}
