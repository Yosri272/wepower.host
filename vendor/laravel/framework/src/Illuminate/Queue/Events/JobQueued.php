<?php

namespace Illuminate\Queue\Events;

<<<<<<< HEAD
use RuntimeException;

=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
class JobQueued
{
    /**
     * The connection name.
     *
     * @var string
     */
    public $connectionName;

    /**
<<<<<<< HEAD
=======
     * The queue name.
     *
     * @var string|null
     */
    public $queue;

    /**
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * The job ID.
     *
     * @var string|int|null
     */
    public $id;

    /**
     * The job instance.
     *
     * @var \Closure|string|object
     */
    public $job;

    /**
     * The job payload.
     *
<<<<<<< HEAD
     * @var string|null
=======
     * @var string
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public $payload;

    /**
<<<<<<< HEAD
     * Create a new event instance.
     *
     * @param  string  $connectionName
     * @param  string|int|null  $id
     * @param  \Closure|string|object  $job
     * @param  string|null  $payload
     * @return void
     */
    public function __construct($connectionName, $id, $job, $payload = null)
    {
        $this->connectionName = $connectionName;
        $this->id = $id;
        $this->job = $job;
        $this->payload = $payload;
=======
     * The amount of time the job was delayed.
     *
     * @var int|null
     */
    public $delay;

    /**
     * Create a new event instance.
     *
     * @param  string  $connectionName
     * @param  string  $queue
     * @param  string|int|null  $id
     * @param  \Closure|string|object  $job
     * @param  string  $payload
     * @param  int|null  $delay
     * @return void
     */
    public function __construct($connectionName, $queue, $id, $job, $payload, $delay)
    {
        $this->connectionName = $connectionName;
        $this->queue = $queue;
        $this->id = $id;
        $this->job = $job;
        $this->payload = $payload;
        $this->delay = $delay;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Get the decoded job payload.
     *
     * @return array
     */
    public function payload()
    {
<<<<<<< HEAD
        if ($this->payload === null) {
            throw new RuntimeException('The job payload was not provided when the event was dispatched.');
        }

=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        return json_decode($this->payload, true, flags: JSON_THROW_ON_ERROR);
    }
}
