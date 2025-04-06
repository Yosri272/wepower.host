<?php

namespace Illuminate\Cache\RateLimiting;

class GlobalLimit extends Limit
{
    /**
     * Create a new limit instance.
     *
     * @param  int  $maxAttempts
<<<<<<< HEAD
     * @param  int  $decayMinutes
     * @return void
     */
    public function __construct(int $maxAttempts, int $decayMinutes = 1)
    {
        parent::__construct('', $maxAttempts, $decayMinutes);
=======
     * @param  int  $decaySeconds
     * @return void
     */
    public function __construct(int $maxAttempts, int $decaySeconds = 60)
    {
        parent::__construct('', $maxAttempts, $decaySeconds);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }
}
