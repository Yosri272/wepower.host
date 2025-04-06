<?php

namespace Illuminate\Events;

<<<<<<< HEAD
=======
use Illuminate\Support\Collection;

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
class InvokeQueuedClosure
{
    /**
     * Handle the event.
     *
     * @param  \Laravel\SerializableClosure\SerializableClosure  $closure
     * @param  array  $arguments
     * @return void
     */
    public function handle($closure, array $arguments)
    {
        call_user_func($closure->getClosure(), ...$arguments);
    }

    /**
     * Handle a job failure.
     *
     * @param  \Laravel\SerializableClosure\SerializableClosure  $closure
     * @param  array  $arguments
     * @param  array  $catchCallbacks
     * @param  \Throwable  $exception
     * @return void
     */
    public function failed($closure, array $arguments, array $catchCallbacks, $exception)
    {
        $arguments[] = $exception;

<<<<<<< HEAD
        collect($catchCallbacks)->each->__invoke(...$arguments);
=======
        (new Collection($catchCallbacks))->each->__invoke(...$arguments);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }
}
