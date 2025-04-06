<?php

namespace Psr\Log;

/**
 * Describes a logger-aware instance.
 */
interface LoggerAwareInterface
{
    /**
     * Sets a logger instance on the object.
<<<<<<< HEAD
     *
     * @param LoggerInterface $logger
     *
     * @return void
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function setLogger(LoggerInterface $logger): void;
}
