<?php

namespace Illuminate\Database\Events;

<<<<<<< HEAD
class NoPendingMigrations
=======
use Illuminate\Contracts\Database\Events\MigrationEvent;

class NoPendingMigrations implements MigrationEvent
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
{
    /**
     * The migration method that was called.
     *
     * @var string
     */
    public $method;

    /**
     * Create a new event instance.
     *
     * @param  string  $method
     * @return void
     */
    public function __construct($method)
    {
        $this->method = $method;
    }
}
