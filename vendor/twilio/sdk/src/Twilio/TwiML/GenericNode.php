<?php

namespace Twilio\TwiML;

class GenericNode extends TwiML {

<<<<<<< HEAD
=======
    protected $value;

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    /**
     * GenericNode constructor.
     *
     * @param string $name XML element name
     * @param string $value XML value
     * @param array $attributes XML attributes
     */
    public function __construct(string $name, ?string $value, array $attributes) {
        parent::__construct($name, $value, $attributes);
        $this->name = $name;
        $this->value = $value;
    }
}
