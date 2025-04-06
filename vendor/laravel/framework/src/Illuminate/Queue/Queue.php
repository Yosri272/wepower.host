<?php

namespace Illuminate\Queue;

use Closure;
use DateTimeInterface;
use Illuminate\Container\Container;
use Illuminate\Contracts\Encryption\Encrypter;
use Illuminate\Contracts\Queue\ShouldBeEncrypted;
use Illuminate\Contracts\Queue\ShouldQueueAfterCommit;
use Illuminate\Queue\Events\JobQueued;
use Illuminate\Queue\Events\JobQueueing;
<<<<<<< HEAD
use Illuminate\Support\Arr;
=======
use Illuminate\Support\Collection;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use Illuminate\Support\InteractsWithTime;
use Illuminate\Support\Str;

abstract class Queue
{
    use InteractsWithTime;

    /**
     * The IoC container instance.
     *
     * @var \Illuminate\Container\Container
     */
    protected $container;

    /**
     * The connection name for the queue.
     *
     * @var string
     */
    protected $connectionName;

    /**
     * Indicates that jobs should be dispatched after all database transactions have committed.
     *
     * @var bool
     */
    protected $dispatchAfterCommit;

    /**
     * The create payload callbacks.
     *
     * @var callable[]
     */
    protected static $createPayloadCallbacks = [];

    /**
     * Push a new job onto the queue.
     *
     * @param  string  $queue
     * @param  string  $job
     * @param  mixed  $data
     * @return mixed
     */
    public function pushOn($queue, $job, $data = '')
    {
        return $this->push($job, $data, $queue);
    }

    /**
     * Push a new job onto a specific queue after (n) seconds.
     *
     * @param  string  $queue
     * @param  \DateTimeInterface|\DateInterval|int  $delay
     * @param  string  $job
     * @param  mixed  $data
     * @return mixed
     */
    public function laterOn($queue, $delay, $job, $data = '')
    {
        return $this->later($delay, $job, $data, $queue);
    }

    /**
     * Push an array of jobs onto the queue.
     *
     * @param  array  $jobs
     * @param  mixed  $data
     * @param  string|null  $queue
     * @return void
     */
    public function bulk($jobs, $data = '', $queue = null)
    {
        foreach ((array) $jobs as $job) {
            $this->push($job, $data, $queue);
        }
    }

    /**
     * Create a payload string from the given job and data.
     *
     * @param  \Closure|string|object  $job
     * @param  string  $queue
     * @param  mixed  $data
     * @return string
     *
     * @throws \Illuminate\Queue\InvalidPayloadException
     */
    protected function createPayload($job, $queue, $data = '')
    {
        if ($job instanceof Closure) {
            $job = CallQueuedClosure::create($job);
        }

        $payload = json_encode($value = $this->createPayloadArray($job, $queue, $data), \JSON_UNESCAPED_UNICODE);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new InvalidPayloadException(
                'Unable to JSON encode payload. Error ('.json_last_error().'): '.json_last_error_msg(), $value
            );
        }

        return $payload;
    }

    /**
     * Create a payload array from the given job and data.
     *
     * @param  string|object  $job
     * @param  string  $queue
     * @param  mixed  $data
     * @return array
     */
    protected function createPayloadArray($job, $queue, $data = '')
    {
        return is_object($job)
                    ? $this->createObjectPayload($job, $queue)
                    : $this->createStringPayload($job, $queue, $data);
    }

    /**
     * Create a payload for an object-based queue handler.
     *
     * @param  object  $job
     * @param  string  $queue
     * @return array
     */
    protected function createObjectPayload($job, $queue)
    {
        $payload = $this->withCreatePayloadHooks($queue, [
            'uuid' => (string) Str::uuid(),
            'displayName' => $this->getDisplayName($job),
            'job' => 'Illuminate\Queue\CallQueuedHandler@call',
<<<<<<< HEAD
            'maxTries' => $this->getJobTries($job) ?? null,
=======
            'maxTries' => $this->getJobTries($job),
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            'maxExceptions' => $job->maxExceptions ?? null,
            'failOnTimeout' => $job->failOnTimeout ?? false,
            'backoff' => $this->getJobBackoff($job),
            'timeout' => $job->timeout ?? null,
            'retryUntil' => $this->getJobExpiration($job),
            'data' => [
                'commandName' => $job,
                'command' => $job,
            ],
        ]);

        $command = $this->jobShouldBeEncrypted($job) && $this->container->bound(Encrypter::class)
                    ? $this->container[Encrypter::class]->encrypt(serialize(clone $job))
                    : serialize(clone $job);

        return array_merge($payload, [
            'data' => array_merge($payload['data'], [
                'commandName' => get_class($job),
                'command' => $command,
            ]),
        ]);
    }

    /**
     * Get the display name for the given job.
     *
     * @param  object  $job
     * @return string
     */
    protected function getDisplayName($job)
    {
        return method_exists($job, 'displayName')
                        ? $job->displayName() : get_class($job);
    }

    /**
     * Get the maximum number of attempts for an object-based queue handler.
     *
     * @param  mixed  $job
     * @return mixed
     */
    public function getJobTries($job)
    {
        if (! method_exists($job, 'tries') && ! isset($job->tries)) {
            return;
        }

<<<<<<< HEAD
        if (isset($job->tries)) {
            return $job->tries;
        }

        if (method_exists($job, 'tries') && ! is_null($job->tries())) {
            return $job->tries();
        }
=======
        if (is_null($tries = $job->tries ?? $job->tries())) {
            return;
        }

        return $tries;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Get the backoff for an object-based queue handler.
     *
     * @param  mixed  $job
     * @return mixed
     */
    public function getJobBackoff($job)
    {
        if (! method_exists($job, 'backoff') && ! isset($job->backoff)) {
            return;
        }

        if (is_null($backoff = $job->backoff ?? $job->backoff())) {
            return;
        }

<<<<<<< HEAD
        return collect(Arr::wrap($backoff))
            ->map(function ($backoff) {
                return $backoff instanceof DateTimeInterface
                                ? $this->secondsUntil($backoff) : $backoff;
            })->implode(',');
=======
        return Collection::wrap($backoff)
            ->map(fn ($backoff) => $backoff instanceof DateTimeInterface ? $this->secondsUntil($backoff) : $backoff)
            ->implode(',');
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Get the expiration timestamp for an object-based queue handler.
     *
     * @param  mixed  $job
     * @return mixed
     */
    public function getJobExpiration($job)
    {
        if (! method_exists($job, 'retryUntil') && ! isset($job->retryUntil)) {
            return;
        }

        $expiration = $job->retryUntil ?? $job->retryUntil();

        return $expiration instanceof DateTimeInterface
                        ? $expiration->getTimestamp() : $expiration;
    }

    /**
     * Determine if the job should be encrypted.
     *
     * @param  object  $job
     * @return bool
     */
    protected function jobShouldBeEncrypted($job)
    {
        if ($job instanceof ShouldBeEncrypted) {
            return true;
        }

        return isset($job->shouldBeEncrypted) && $job->shouldBeEncrypted;
    }

    /**
     * Create a typical, string based queue payload array.
     *
     * @param  string  $job
     * @param  string  $queue
     * @param  mixed  $data
     * @return array
     */
    protected function createStringPayload($job, $queue, $data)
    {
        return $this->withCreatePayloadHooks($queue, [
            'uuid' => (string) Str::uuid(),
            'displayName' => is_string($job) ? explode('@', $job)[0] : null,
            'job' => $job,
            'maxTries' => null,
            'maxExceptions' => null,
            'failOnTimeout' => false,
            'backoff' => null,
            'timeout' => null,
            'data' => $data,
        ]);
    }

    /**
     * Register a callback to be executed when creating job payloads.
     *
     * @param  callable|null  $callback
     * @return void
     */
    public static function createPayloadUsing($callback)
    {
        if (is_null($callback)) {
            static::$createPayloadCallbacks = [];
        } else {
            static::$createPayloadCallbacks[] = $callback;
        }
    }

    /**
     * Create the given payload using any registered payload hooks.
     *
     * @param  string  $queue
     * @param  array  $payload
     * @return array
     */
    protected function withCreatePayloadHooks($queue, array $payload)
    {
        if (! empty(static::$createPayloadCallbacks)) {
            foreach (static::$createPayloadCallbacks as $callback) {
                $payload = array_merge($payload, $callback($this->getConnectionName(), $queue, $payload));
            }
        }

        return $payload;
    }

    /**
     * Enqueue a job using the given callback.
     *
     * @param  \Closure|string|object  $job
     * @param  string  $payload
<<<<<<< HEAD
     * @param  string  $queue
=======
     * @param  string|null  $queue
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * @param  \DateTimeInterface|\DateInterval|int|null  $delay
     * @param  callable  $callback
     * @return mixed
     */
    protected function enqueueUsing($job, $payload, $queue, $delay, $callback)
    {
        if ($this->shouldDispatchAfterCommit($job) &&
            $this->container->bound('db.transactions')) {
            return $this->container->make('db.transactions')->addCallback(
<<<<<<< HEAD
                function () use ($payload, $queue, $delay, $callback, $job) {
                    $this->raiseJobQueueingEvent($job, $payload);

                    return tap($callback($payload, $queue, $delay), function ($jobId) use ($job, $payload) {
                        $this->raiseJobQueuedEvent($jobId, $job, $payload);
=======
                function () use ($queue, $job, $payload, $delay, $callback) {
                    $this->raiseJobQueueingEvent($queue, $job, $payload, $delay);

                    return tap($callback($payload, $queue, $delay), function ($jobId) use ($queue, $job, $payload, $delay) {
                        $this->raiseJobQueuedEvent($queue, $jobId, $job, $payload, $delay);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                    });
                }
            );
        }

<<<<<<< HEAD
        $this->raiseJobQueueingEvent($job, $payload);

        return tap($callback($payload, $queue, $delay), function ($jobId) use ($job, $payload) {
            $this->raiseJobQueuedEvent($jobId, $job, $payload);
=======
        $this->raiseJobQueueingEvent($queue, $job, $payload, $delay);

        return tap($callback($payload, $queue, $delay), function ($jobId) use ($queue, $job, $payload, $delay) {
            $this->raiseJobQueuedEvent($queue, $jobId, $job, $payload, $delay);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        });
    }

    /**
     * Determine if the job should be dispatched after all database transactions have committed.
     *
     * @param  \Closure|string|object  $job
     * @return bool
     */
    protected function shouldDispatchAfterCommit($job)
    {
<<<<<<< HEAD
        if (is_object($job) && $job instanceof ShouldQueueAfterCommit) {
=======
        if ($job instanceof ShouldQueueAfterCommit) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            return true;
        }

        if (! $job instanceof Closure && is_object($job) && isset($job->afterCommit)) {
            return $job->afterCommit;
        }

<<<<<<< HEAD
        if (isset($this->dispatchAfterCommit)) {
            return $this->dispatchAfterCommit;
        }

        return false;
=======
        return $this->dispatchAfterCommit ?? false;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Raise the job queueing event.
     *
<<<<<<< HEAD
     * @param  \Closure|string|object  $job
     * @param  string  $payload
     * @return void
     */
    protected function raiseJobQueueingEvent($job, $payload)
    {
        if ($this->container->bound('events')) {
            $this->container['events']->dispatch(new JobQueueing($this->connectionName, $job, $payload));
=======
     * @param  string  $queue
     * @param  \Closure|string|object  $job
     * @param  string  $payload
     * @param  \DateTimeInterface|\DateInterval|int|null  $delay
     * @return void
     */
    protected function raiseJobQueueingEvent($queue, $job, $payload, $delay)
    {
        if ($this->container->bound('events')) {
            $delay = ! is_null($delay) ? $this->secondsUntil($delay) : $delay;

            $this->container['events']->dispatch(new JobQueueing($this->connectionName, $queue, $job, $payload, $delay));
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        }
    }

    /**
     * Raise the job queued event.
     *
<<<<<<< HEAD
     * @param  string|int|null  $jobId
     * @param  \Closure|string|object  $job
     * @param  string  $payload
     * @return void
     */
    protected function raiseJobQueuedEvent($jobId, $job, $payload)
    {
        if ($this->container->bound('events')) {
            $this->container['events']->dispatch(new JobQueued($this->connectionName, $jobId, $job, $payload));
=======
     * @param  string|null  $queue
     * @param  string|int|null  $jobId
     * @param  \Closure|string|object  $job
     * @param  string  $payload
     * @param  \DateTimeInterface|\DateInterval|int|null  $delay
     * @return void
     */
    protected function raiseJobQueuedEvent($queue, $jobId, $job, $payload, $delay)
    {
        if ($this->container->bound('events')) {
            $delay = ! is_null($delay) ? $this->secondsUntil($delay) : $delay;

            $this->container['events']->dispatch(new JobQueued($this->connectionName, $queue, $jobId, $job, $payload, $delay));
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        }
    }

    /**
     * Get the connection name for the queue.
     *
     * @return string
     */
    public function getConnectionName()
    {
        return $this->connectionName;
    }

    /**
     * Set the connection name for the queue.
     *
     * @param  string  $name
     * @return $this
     */
    public function setConnectionName($name)
    {
        $this->connectionName = $name;

        return $this;
    }

    /**
     * Get the container instance being used by the connection.
     *
     * @return \Illuminate\Container\Container
     */
    public function getContainer()
    {
        return $this->container;
    }

    /**
     * Set the IoC container instance.
     *
     * @param  \Illuminate\Container\Container  $container
     * @return void
     */
    public function setContainer(Container $container)
    {
        $this->container = $container;
    }
}
