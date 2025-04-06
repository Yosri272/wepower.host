<?php

namespace Illuminate\Routing\Controllers;

interface HasMiddleware
{
    /**
     * Get the middleware that should be assigned to the controller.
     *
<<<<<<< HEAD
     * @return \Illuminate\Routing\Controllers\Middleware|array
=======
     * @return array<int,\Illuminate\Routing\Controllers\Middleware|\Closure|string>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public static function middleware();
}
