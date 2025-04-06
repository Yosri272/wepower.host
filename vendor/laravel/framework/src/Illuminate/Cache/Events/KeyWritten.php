<?php

namespace Illuminate\Cache\Events;

class KeyWritten extends CacheEvent
{
    /**
     * The value that was written.
     *
     * @var mixed
     */
    public $value;

    /**
     * The number of seconds the key should be valid.
     *
     * @var int|null
     */
    public $seconds;

    /**
     * Create a new event instance.
     *
<<<<<<< HEAD
=======
     * @param  string|null  $storeName
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * @param  string  $key
     * @param  mixed  $value
     * @param  int|null  $seconds
     * @param  array  $tags
     * @return void
     */
<<<<<<< HEAD
    public function __construct($key, $value, $seconds = null, $tags = [])
    {
        parent::__construct($key, $tags);
=======
    public function __construct($storeName, $key, $value, $seconds = null, $tags = [])
    {
        parent::__construct($storeName, $key, $tags);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        $this->value = $value;
        $this->seconds = $seconds;
    }
}
