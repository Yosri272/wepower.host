<?php

namespace Illuminate\Support;

/**
<<<<<<< HEAD
 * @mixin \Illuminate\Support\Enumerable
=======
 * @template TKey of array-key
 *
 * @template-covariant TValue
 *
 * @mixin \Illuminate\Support\Enumerable<TKey, TValue>
 * @mixin TValue
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
 */
class HigherOrderCollectionProxy
{
    /**
     * The collection being operated on.
     *
<<<<<<< HEAD
     * @var \Illuminate\Support\Enumerable
=======
     * @var \Illuminate\Support\Enumerable<TKey, TValue>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    protected $collection;

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
     * @param  \Illuminate\Support\Enumerable  $collection
=======
     * @param  \Illuminate\Support\Enumerable<TKey, TValue>  $collection
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * @param  string  $method
     * @return void
     */
    public function __construct(Enumerable $collection, $method)
    {
        $this->method = $method;
        $this->collection = $collection;
    }

    /**
     * Proxy accessing an attribute onto the collection items.
     *
     * @param  string  $key
     * @return mixed
     */
    public function __get($key)
    {
        return $this->collection->{$this->method}(function ($value) use ($key) {
            return is_array($value) ? $value[$key] : $value->{$key};
        });
    }

    /**
     * Proxy a method call onto the collection items.
     *
     * @param  string  $method
     * @param  array  $parameters
     * @return mixed
     */
    public function __call($method, $parameters)
    {
        return $this->collection->{$this->method}(function ($value) use ($method, $parameters) {
            return $value->{$method}(...$parameters);
        });
    }
}
