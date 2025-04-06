<?php

namespace Illuminate\Contracts\Database\Eloquent;

use Illuminate\Database\Eloquent\Model;

interface SerializesCastableAttributes
{
    /**
     * Serialize the attribute when converting the model to an array.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @param  string  $key
     * @param  mixed  $value
<<<<<<< HEAD
     * @param  array  $attributes
=======
     * @param  array<string, mixed>  $attributes
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * @return mixed
     */
    public function serialize(Model $model, string $key, mixed $value, array $attributes);
}
