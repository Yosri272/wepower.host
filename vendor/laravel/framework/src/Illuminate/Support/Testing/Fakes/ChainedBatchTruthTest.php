<?php

namespace Illuminate\Support\Testing\Fakes;

use Closure;

class ChainedBatchTruthTest
{
    /**
     * The underlying truth test.
     *
     * @var \Closure
     */
    protected $callback;

    /**
     * Create a new truth test instance.
     *
     * @param  \Closure  $callback
     * @return void
     */
    public function __construct(Closure $callback)
    {
        $this->callback = $callback;
    }

    /**
     * Invoke the truth test with the given pending batch.
     *
<<<<<<< HEAD
     * @param  \Illuminate\Bus\PendingBatch
=======
     * @param  \Illuminate\Bus\PendingBatch  $pendingBatch
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * @return bool
     */
    public function __invoke($pendingBatch)
    {
        return call_user_func($this->callback, $pendingBatch);
    }
}
