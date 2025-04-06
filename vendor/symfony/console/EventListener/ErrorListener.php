<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Console\EventListener;

use Psr\Log\LoggerInterface;
use Symfony\Component\Console\ConsoleEvents;
use Symfony\Component\Console\Event\ConsoleErrorEvent;
use Symfony\Component\Console\Event\ConsoleEvent;
use Symfony\Component\Console\Event\ConsoleTerminateEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * @author James Halsall <james.t.halsall@googlemail.com>
 * @author Robin Chalas <robin.chalas@gmail.com>
 */
class ErrorListener implements EventSubscriberInterface
{
<<<<<<< HEAD
    private ?LoggerInterface $logger;

    public function __construct(?LoggerInterface $logger = null)
    {
        $this->logger = $logger;
    }

    /**
     * @return void
     */
    public function onConsoleError(ConsoleErrorEvent $event)
=======
    public function __construct(
        private ?LoggerInterface $logger = null,
    ) {
    }

    public function onConsoleError(ConsoleErrorEvent $event): void
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        if (null === $this->logger) {
            return;
        }

        $error = $event->getError();

<<<<<<< HEAD
        if (!$inputString = $this->getInputString($event)) {
=======
        if (!$inputString = self::getInputString($event)) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $this->logger->critical('An error occurred while using the console. Message: "{message}"', ['exception' => $error, 'message' => $error->getMessage()]);

            return;
        }

        $this->logger->critical('Error thrown while running command "{command}". Message: "{message}"', ['exception' => $error, 'command' => $inputString, 'message' => $error->getMessage()]);
    }

<<<<<<< HEAD
    /**
     * @return void
     */
    public function onConsoleTerminate(ConsoleTerminateEvent $event)
=======
    public function onConsoleTerminate(ConsoleTerminateEvent $event): void
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        if (null === $this->logger) {
            return;
        }

        $exitCode = $event->getExitCode();

        if (0 === $exitCode) {
            return;
        }

<<<<<<< HEAD
        if (!$inputString = $this->getInputString($event)) {
=======
        if (!$inputString = self::getInputString($event)) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $this->logger->debug('The console exited with code "{code}"', ['code' => $exitCode]);

            return;
        }

        $this->logger->debug('Command "{command}" exited with code "{code}"', ['command' => $inputString, 'code' => $exitCode]);
    }

    public static function getSubscribedEvents(): array
    {
        return [
            ConsoleEvents::ERROR => ['onConsoleError', -128],
            ConsoleEvents::TERMINATE => ['onConsoleTerminate', -128],
        ];
    }

<<<<<<< HEAD
    private static function getInputString(ConsoleEvent $event): ?string
    {
        $commandName = $event->getCommand()?->getName();
        $input = $event->getInput();

        if ($input instanceof \Stringable) {
            if ($commandName) {
                return str_replace(["'$commandName'", "\"$commandName\""], $commandName, (string) $input);
            }

            return (string) $input;
        }

        return $commandName;
=======
    private static function getInputString(ConsoleEvent $event): string
    {
        $commandName = $event->getCommand()?->getName();
        $inputString = (string) $event->getInput();

        if ($commandName) {
            return str_replace(["'$commandName'", "\"$commandName\""], $commandName, $inputString);
        }

        return $inputString;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }
}
