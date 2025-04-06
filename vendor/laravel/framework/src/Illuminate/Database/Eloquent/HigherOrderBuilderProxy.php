<?php

namespace Illuminate\Database\Eloquent;

/**
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class HigherOrderBuilderProxy
{
    /**
     * The collection being operated on.
     *
<<<<<<< HEAD
     * @var \Illuminate\Database\Eloquent\Builder
=======
     * @var \Illuminate\Database\Eloquent\Builder<*>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    protected $builder;

    /**
     * The method being proxied.
     *
     * @var string
     */
    protected $method;

    /**
     * Create a new proxy instance.
     *
<<<<<<< HEAD
     * @param  \Illuminate\Database\Eloquent\Builder  $builder
=======
     * @param  \Illuminate\Database\Eloquent\Builder<*>  $builder
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * @param  string  $method
     * @return void
     */
    public function __construct(Builder $builder, $method)
    {
        $this->method = $method;
        $this->builder = $builder;
    }

    /**
     * Proxy a scope call onto the query builder.
     *
     * @param  string  $method
     * @param  array  $parameters
     * @return mixed
     */
    public function __call($method, $parameters)
    {
        return $this->builder->{$this->method}(function ($value) use ($method, $parameters) {
            return $value->{$method}(...$parameters);
        });
    }
}
