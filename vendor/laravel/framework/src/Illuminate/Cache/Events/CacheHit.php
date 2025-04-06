<?php

namespace Illuminate\Cache\Events;

class CacheHit extends CacheEvent
{
    /**
     * The value that was retrieved.
     *
     * @var mixed
     */
    public $value;

    /**
     * Create a new event instance.
     *
<<<<<<< HEAD
=======
     * @param  string|null  $storeName
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * @param  string  $key
     * @param  mixed  $value
     * @param  array  $tags
     * @return void
     */
<<<<<<< HEAD
    public function __construct($key, $value, array $tags = [])
    {
        parent::__construct($key, $tags);
=======
    public function __construct($storeName, $key, $value, array $tags = [])
    {
        parent::__construct($storeName, $key, $tags);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        $this->value = $value;
    }
}
