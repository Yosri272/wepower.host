<?php

namespace Illuminate\Cache;

class ApcWrapper
{
    /**
<<<<<<< HEAD
     * Indicates if APCu is supported.
     *
     * @var bool
     */
    protected $apcu = false;

    /**
     * Create a new APC wrapper instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->apcu = function_exists('apcu_fetch');
    }

    /**
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * Get an item from the cache.
     *
     * @param  string  $key
     * @return mixed
     */
    public function get($key)
    {
<<<<<<< HEAD
        $fetchedValue = $this->apcu ? apcu_fetch($key, $success) : apc_fetch($key, $success);
=======
        $fetchedValue = apcu_fetch($key, $success);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        return $success ? $fetchedValue : null;
    }

    /**
     * Store an item in the cache.
     *
     * @param  string  $key
     * @param  mixed  $value
     * @param  int  $seconds
     * @return array|bool
     */
    public function put($key, $value, $seconds)
    {
<<<<<<< HEAD
        return $this->apcu ? apcu_store($key, $value, $seconds) : apc_store($key, $value, $seconds);
=======
        return apcu_store($key, $value, $seconds);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Increment the value of an item in the cache.
     *
     * @param  string  $key
     * @param  mixed  $value
     * @return int|bool
     */
    public function increment($key, $value)
    {
<<<<<<< HEAD
        return $this->apcu ? apcu_inc($key, $value) : apc_inc($key, $value);
=======
        return apcu_inc($key, $value);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Decrement the value of an item in the cache.
     *
     * @param  string  $key
     * @param  mixed  $value
     * @return int|bool
     */
    public function decrement($key, $value)
    {
<<<<<<< HEAD
        return $this->apcu ? apcu_dec($key, $value) : apc_dec($key, $value);
=======
        return apcu_dec($key, $value);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Remove an item from the cache.
     *
     * @param  string  $key
     * @return bool
     */
    public function delete($key)
    {
<<<<<<< HEAD
        return $this->apcu ? apcu_delete($key) : apc_delete($key);
=======
        return apcu_delete($key);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Remove all items from the cache.
     *
     * @return bool
     */
    public function flush()
    {
<<<<<<< HEAD
        return $this->apcu ? apcu_clear_cache() : apc_clear_cache('user');
=======
        return apcu_clear_cache();
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }
}
