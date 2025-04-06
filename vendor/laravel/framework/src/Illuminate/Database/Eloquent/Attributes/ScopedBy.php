<?php

namespace Illuminate\Database\Eloquent\Attributes;

use Attribute;

#[Attribute(Attribute::TARGET_CLASS | Attribute::IS_REPEATABLE)]
class ScopedBy
{
    /**
     * Create a new attribute instance.
     *
     * @param  array|string  $classes
     * @return void
     */
<<<<<<< HEAD
    public function __construct(array|string $classes)
=======
    public function __construct(public array|string $classes)
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
    }
}
