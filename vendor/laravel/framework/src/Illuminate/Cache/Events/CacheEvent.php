<?php

namespace Illuminate\Cache\Events;

abstract class CacheEvent
{
    /**
<<<<<<< HEAD
=======
     * The name of the cache store.
     *
     * @var string|null
     */
    public $storeName;

    /**
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * The key of the event.
     *
     * @var string
     */
    public $key;

    /**
     * The tags that were assigned to the key.
     *
     * @var array
     */
    public $tags;

    /**
     * Create a new event instance.
     *
<<<<<<< HEAD
=======
     * @param  string|null  $storeName
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * @param  string  $key
     * @param  array  $tags
     * @return void
     */
<<<<<<< HEAD
    public function __construct($key, array $tags = [])
    {
=======
    public function __construct($storeName, $key, array $tags = [])
    {
        $this->storeName = $storeName;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        $this->key = $key;
        $this->tags = $tags;
    }

    /**
     * Set the tags for the cache event.
     *
     * @param  array  $tags
     * @return $this
     */
    public function setTags($tags)
    {
        $this->tags = $tags;

        return $this;
    }
}
