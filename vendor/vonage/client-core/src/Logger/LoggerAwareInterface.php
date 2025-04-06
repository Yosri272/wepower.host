<?php

namespace Vonage\Logger;

use Psr\Log\LoggerInterface;

interface LoggerAwareInterface
{
    public function getLogger(): ?LoggerInterface;

    /**
<<<<<<< HEAD
     * @param string|int $level Level of message that we are logging
     * @param array<mixed> $context Additional information for context
     */
    public function log($level, string $message, array $context = []): void;

    /**
     * @return self
     */
    public function setLogger(LoggerInterface $logger);
=======
     * @param int|string $level Level of message that we are logging
     * @param array<mixed> $context Additional information for context
     */
    public function log(int|string $level, string $message, array $context = []): void;

    public function setLogger(LoggerInterface $logger): void;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
}
