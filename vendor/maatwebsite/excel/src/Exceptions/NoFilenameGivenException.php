<?php

namespace Maatwebsite\Excel\Exceptions;

use InvalidArgumentException;
use Throwable;

class NoFilenameGivenException extends InvalidArgumentException implements LaravelExcelException
{
    /**
     * @param  string  $message
     * @param  int  $code
     * @param  Throwable|null  $previous
     */
    public function __construct(
        $message = 'A filename needs to be passed in order to download the export',
        $code = 0,
<<<<<<< HEAD
        Throwable $previous = null
=======
        ?Throwable $previous = null
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    ) {
        parent::__construct($message, $code, $previous);
    }
}
