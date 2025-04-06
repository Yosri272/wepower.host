<?php

namespace Illuminate\Validation\Rules;

<<<<<<< HEAD
use BackedEnum;
use Illuminate\Contracts\Support\Arrayable;
use UnitEnum;

class NotIn
=======
use Illuminate\Contracts\Support\Arrayable;
use Stringable;

use function Illuminate\Support\enum_value;

class NotIn implements Stringable
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
{
    /**
     * The name of the rule.
     *
     * @var string
     */
    protected $rule = 'not_in';

    /**
     * The accepted values.
     *
     * @var array
     */
    protected $values;

    /**
     * Create a new "not in" rule instance.
     *
<<<<<<< HEAD
     * @param  \Illuminate\Contracts\Support\Arrayable|array|string  $values
=======
     * @param  \Illuminate\Contracts\Support\Arrayable|\BackedEnum|\UnitEnum|array|string  $values
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * @return void
     */
    public function __construct($values)
    {
        if ($values instanceof Arrayable) {
            $values = $values->toArray();
        }

        $this->values = is_array($values) ? $values : func_get_args();
    }

    /**
     * Convert the rule to a validation string.
     *
     * @return string
     */
    public function __toString()
    {
        $values = array_map(function ($value) {
<<<<<<< HEAD
            $value = match (true) {
                $value instanceof BackedEnum => $value->value,
                $value instanceof UnitEnum => $value->name,
                default => $value,
            };
=======
            $value = enum_value($value);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

            return '"'.str_replace('"', '""', $value).'"';
        }, $this->values);

        return $this->rule.':'.implode(',', $values);
    }
}
