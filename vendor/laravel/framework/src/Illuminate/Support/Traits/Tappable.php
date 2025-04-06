<?php

namespace Illuminate\Support\Traits;

trait Tappable
{
    /**
     * Call the given Closure with this instance then return the instance.
     *
<<<<<<< HEAD
     * @param  callable|null  $callback
     * @return $this|\Illuminate\Support\HigherOrderTapProxy
=======
     * @param  (callable($this): mixed)|null  $callback
     * @return ($callback is null ? \Illuminate\Support\HigherOrderTapProxy : $this)
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function tap($callback = null)
    {
        return tap($this, $callback);
    }
}
