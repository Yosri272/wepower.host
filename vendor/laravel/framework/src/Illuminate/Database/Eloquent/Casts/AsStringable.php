<?php

namespace Illuminate\Database\Eloquent\Casts;

use Illuminate\Contracts\Database\Eloquent\Castable;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
<<<<<<< HEAD
use Illuminate\Support\Str;
=======
use Illuminate\Support\Stringable;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

class AsStringable implements Castable
{
    /**
     * Get the caster class to use when casting from / to this cast target.
     *
     * @param  array  $arguments
     * @return \Illuminate\Contracts\Database\Eloquent\CastsAttributes<\Illuminate\Support\Stringable, string|\Stringable>
     */
    public static function castUsing(array $arguments)
    {
        return new class implements CastsAttributes
        {
            public function get($model, $key, $value, $attributes)
            {
<<<<<<< HEAD
                return isset($value) ? Str::of($value) : null;
=======
                return isset($value) ? new Stringable($value) : null;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            }

            public function set($model, $key, $value, $attributes)
            {
                return isset($value) ? (string) $value : null;
            }
        };
    }
}
