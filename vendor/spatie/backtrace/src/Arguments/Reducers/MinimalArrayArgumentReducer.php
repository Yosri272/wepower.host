<?php

namespace Spatie\Backtrace\Arguments\Reducers;

use Spatie\Backtrace\Arguments\ReducedArgument\ReducedArgument;
use Spatie\Backtrace\Arguments\ReducedArgument\ReducedArgumentContract;
use Spatie\Backtrace\Arguments\ReducedArgument\UnReducedArgument;

class MinimalArrayArgumentReducer implements ArgumentReducer
{
    public function execute($argument): ReducedArgumentContract
    {
<<<<<<< HEAD
        if(! is_array($argument)) {
=======
        if (! is_array($argument)) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            return UnReducedArgument::create();
        }

        return new ReducedArgument(
            'array (size='.count($argument).')',
            'array'
        );
    }
}
