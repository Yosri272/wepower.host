<?php

namespace Illuminate\Support;

use ArrayIterator;
use Illuminate\Contracts\Support\ValidatedData;
<<<<<<< HEAD
use stdClass;
=======
use Illuminate\Support\Traits\InteractsWithData;
use Symfony\Component\VarDumper\VarDumper;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use Traversable;

class ValidatedInput implements ValidatedData
{
<<<<<<< HEAD
=======
    use InteractsWithData;

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    /**
     * The underlying input.
     *
     * @var array
     */
    protected $input;

    /**
     * Create a new validated input container.
     *
     * @param  array  $input
     * @return void
     */
    public function __construct(array $input)
    {
        $this->input = $input;
    }

    /**
<<<<<<< HEAD
     * Determine if the validated input has one or more keys.
     *
     * @param  mixed  $keys
     * @return bool
     */
    public function has($keys)
    {
        $keys = is_array($keys) ? $keys : func_get_args();

        foreach ($keys as $key) {
            if (! Arr::has($this->input, $key)) {
                return false;
            }
        }

        return true;
    }

    /**
     * Determine if the validated input is missing one or more keys.
     *
     * @param  mixed  $keys
     * @return bool
     */
    public function missing($keys)
    {
        return ! $this->has($keys);
    }

    /**
     * Get a subset containing the provided keys with values from the input data.
     *
     * @param  mixed  $keys
     * @return array
     */
    public function only($keys)
    {
        $results = [];

        $input = $this->input;

        $placeholder = new stdClass;

        foreach (is_array($keys) ? $keys : func_get_args() as $key) {
            $value = data_get($input, $key, $placeholder);

            if ($value !== $placeholder) {
                Arr::set($results, $key, $value);
            }
        }

        return $results;
    }

    /**
     * Get all of the input except for a specified array of items.
     *
     * @param  mixed  $keys
     * @return array
     */
    public function except($keys)
    {
        $keys = is_array($keys) ? $keys : func_get_args();

        $results = $this->input;

        Arr::forget($results, $keys);

        return $results;
    }

    /**
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * Merge the validated input with the given array of additional data.
     *
     * @param  array  $items
     * @return static
     */
    public function merge(array $items)
    {
<<<<<<< HEAD
        return new static(array_merge($this->input, $items));
    }

    /**
     * Get the input as a collection.
     *
     * @return \Illuminate\Support\Collection
     */
    public function collect()
    {
        return new Collection($this->input);
=======
        return new static(array_merge($this->all(), $items));
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Get the raw, underlying input array.
     *
<<<<<<< HEAD
     * @return array
     */
    public function all()
    {
        return $this->input;
=======
     * @param  array|mixed|null  $keys
     * @return array
     */
    public function all($keys = null)
    {
        if (! $keys) {
            return $this->input;
        }

        $input = [];

        foreach (is_array($keys) ? $keys : func_get_args() as $key) {
            Arr::set($input, $key, Arr::get($this->input, $key));
        }

        return $input;
    }

    /**
     * Retrieve data from the instance.
     *
     * @param  string|null  $key
     * @param  mixed  $default
     * @return mixed
     */
    protected function data($key = null, $default = null)
    {
        return $this->input($key, $default);
    }

    /**
     * Get the keys for all of the input.
     *
     * @return array
     */
    public function keys()
    {
        return array_keys($this->input());
    }

    /**
     * Retrieve an input item from the validated inputs.
     *
     * @param  string|null  $key
     * @param  mixed  $default
     * @return mixed
     */
    public function input($key = null, $default = null)
    {
        return data_get(
            $this->all(), $key, $default
        );
    }

    /**
     * Dump the validated inputs items and end the script.
     *
     * @param  mixed  ...$keys
     * @return never
     */
    public function dd(...$keys)
    {
        $this->dump(...$keys);

        exit(1);
    }

    /**
     * Dump the items.
     *
     * @param  mixed  $keys
     * @return $this
     */
    public function dump($keys = [])
    {
        $keys = is_array($keys) ? $keys : func_get_args();

        VarDumper::dump(count($keys) > 0 ? $this->only($keys) : $this->all());

        return $this;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Get the instance as an array.
     *
     * @return array
     */
    public function toArray()
    {
        return $this->all();
    }

    /**
     * Dynamically access input data.
     *
     * @param  string  $name
     * @return mixed
     */
    public function __get($name)
    {
<<<<<<< HEAD
        return $this->input[$name];
=======
        return $this->input($name);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Dynamically set input data.
     *
     * @param  string  $name
     * @param  mixed  $value
     * @return mixed
     */
    public function __set($name, $value)
    {
        $this->input[$name] = $value;
    }

    /**
<<<<<<< HEAD
     * Determine if an input key is set.
=======
     * Determine if an input item is set.
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     *
     * @return bool
     */
    public function __isset($name)
    {
<<<<<<< HEAD
        return isset($this->input[$name]);
    }

    /**
     * Remove an input key.
=======
        return $this->exists($name);
    }

    /**
     * Remove an input item.
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     *
     * @param  string  $name
     * @return void
     */
    public function __unset($name)
    {
        unset($this->input[$name]);
    }

    /**
     * Determine if an item exists at an offset.
     *
     * @param  mixed  $key
     * @return bool
     */
    public function offsetExists($key): bool
    {
<<<<<<< HEAD
        return isset($this->input[$key]);
=======
        return $this->exists($key);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Get an item at a given offset.
     *
     * @param  mixed  $key
     * @return mixed
     */
    public function offsetGet($key): mixed
    {
<<<<<<< HEAD
        return $this->input[$key];
=======
        return $this->input($key);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Set the item at a given offset.
     *
     * @param  mixed  $key
     * @param  mixed  $value
     * @return void
     */
    public function offsetSet($key, $value): void
    {
        if (is_null($key)) {
            $this->input[] = $value;
        } else {
            $this->input[$key] = $value;
        }
    }

    /**
     * Unset the item at a given offset.
     *
     * @param  string  $key
     * @return void
     */
    public function offsetUnset($key): void
    {
        unset($this->input[$key]);
    }

    /**
     * Get an iterator for the input.
     *
     * @return \ArrayIterator
     */
    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->input);
    }
}
