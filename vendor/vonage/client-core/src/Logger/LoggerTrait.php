<?php

namespace Vonage\Logger;

use Psr\Log\LoggerInterface;

trait LoggerTrait
{
    /**
     * @var LoggerInterface
     */
    protected $logger;

    public function getLogger(): ?LoggerInterface
    {
        return $this->logger;
    }

    /**
<<<<<<< HEAD
     * @param string|int $level Level of message that we are logging
     * @param array<mixed> $context Additional information for context
     */
    public function log($level, string $message, array $context = []): void
=======
     * @param int|string $level Level of message that we are logging
     * @param array<mixed> $context Additional information for context
     */
    public function log(int|string $level, string $message, array $context = []): void
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $logger = $this->getLogger();
        if ($logger) {
            $logger->log($level, $message, $context);
        }
    }

<<<<<<< HEAD
    public function setLogger(LoggerInterface $logger)
=======
    public function setLogger(LoggerInterface $logger): void
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $this->logger = $logger;
    }
}
