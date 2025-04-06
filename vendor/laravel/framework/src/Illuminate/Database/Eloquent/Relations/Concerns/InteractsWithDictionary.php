<?php

namespace Illuminate\Database\Eloquent\Relations\Concerns;

<<<<<<< HEAD
use BackedEnum;
use InvalidArgumentException;
use UnitEnum;

=======
use InvalidArgumentException;
use UnitEnum;

use function Illuminate\Support\enum_value;

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
trait InteractsWithDictionary
{
    /**
     * Get a dictionary key attribute - casting it to a string if necessary.
     *
     * @param  mixed  $attribute
     * @return mixed
     *
     * @throws \InvalidArgumentException
     */
    protected function getDictionaryKey($attribute)
    {
        if (is_object($attribute)) {
            if (method_exists($attribute, '__toString')) {
                return $attribute->__toString();
            }

            if ($attribute instanceof UnitEnum) {
<<<<<<< HEAD
                return $attribute instanceof BackedEnum ? $attribute->value : $attribute->name;
=======
                return enum_value($attribute);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            }

            throw new InvalidArgumentException('Model attribute value is an object but does not have a __toString method.');
        }

        return $attribute;
    }
}
