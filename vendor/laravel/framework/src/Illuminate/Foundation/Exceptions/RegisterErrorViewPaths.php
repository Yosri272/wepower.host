<?php

namespace Illuminate\Foundation\Exceptions;

<<<<<<< HEAD
=======
use Illuminate\Support\Collection;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use Illuminate\Support\Facades\View;

class RegisterErrorViewPaths
{
    /**
     * Register the error view paths.
     *
     * @return void
     */
    public function __invoke()
    {
<<<<<<< HEAD
        View::replaceNamespace('errors', collect(config('view.paths'))->map(function ($path) {
=======
        View::replaceNamespace('errors', (new Collection(config('view.paths')))->map(function ($path) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            return "{$path}/errors";
        })->push(__DIR__.'/views')->all());
    }
}
