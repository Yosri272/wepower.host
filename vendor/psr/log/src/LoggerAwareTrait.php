<?php

namespace Psr\Log;

/**
 * Basic Implementation of LoggerAwareInterface.
 */
trait LoggerAwareTrait
{
    /**
     * The logger instance.
<<<<<<< HEAD
     *
     * @var LoggerInterface|null
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    protected ?LoggerInterface $logger = null;

    /**
     * Sets a logger.
<<<<<<< HEAD
     *
     * @param LoggerInterface $logger
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function setLogger(LoggerInterface $logger): void
    {
        $this->logger = $logger;
    }
}
