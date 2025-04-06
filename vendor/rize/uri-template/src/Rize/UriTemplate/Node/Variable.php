<<<<<<< HEAD
<?php 

namespace Rize\UriTemplate\Node;

/**
 * Description
 */
class Variable extends Abstraction
{
           /**
            * Variable name without modifier 
            * e.g. 'term:1' becomes 'term'
            */
     public $name,
           $options = array(
              'modifier' => null,
              'value'    => null,
           );

    public function __construct($token, array $options = array())
=======
<?php

namespace Rize\UriTemplate\Node;

class Variable extends Abstraction
{
    /**
     * Variable name without modifier
     * e.g. 'term:1' becomes 'term'.
     */
    public string $name;
    public array $options = ['modifier' => null, 'value' => null];

    public function __construct(string $token, array $options = [])
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        parent::__construct($token);
        $this->options = $options + $this->options;

        // normalize var name e.g. from 'term:1' becomes 'term'
        $name = $token;
        if ($options['modifier'] === ':') {
<<<<<<< HEAD
            $name = substr($name, 0, strpos($name, $options['modifier']));
=======
            $name = strstr($name, $options['modifier'], true);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        }

        $this->name = $name;
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
