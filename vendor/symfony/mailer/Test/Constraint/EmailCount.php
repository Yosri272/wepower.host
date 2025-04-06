<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Mailer\Test\Constraint;

use PHPUnit\Framework\Constraint\Constraint;
use Symfony\Component\Mailer\Event\MessageEvents;

final class EmailCount extends Constraint
{
<<<<<<< HEAD
    private int $expectedValue;
    private ?string $transport;
    private bool $queued;

    public function __construct(int $expectedValue, ?string $transport = null, bool $queued = false)
    {
        $this->expectedValue = $expectedValue;
        $this->transport = $transport;
        $this->queued = $queued;
=======
    public function __construct(
        private int $expectedValue,
        private ?string $transport = null,
        private bool $queued = false,
    ) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function toString(): string
    {
<<<<<<< HEAD
        return sprintf('%shas %s "%d" emails', $this->transport ? $this->transport.' ' : '', $this->queued ? 'queued' : 'sent', $this->expectedValue);
=======
        return \sprintf('%shas %s "%d" emails', $this->transport ? $this->transport.' ' : '', $this->queued ? 'queued' : 'sent', $this->expectedValue);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * @param MessageEvents $events
     */
    protected function matches($events): bool
    {
        return $this->expectedValue === $this->countEmails($events);
    }

    /**
     * @param MessageEvents $events
     */
    protected function failureDescription($events): string
    {
<<<<<<< HEAD
        return sprintf('the Transport %s (%d %s)', $this->toString(), $this->countEmails($events), $this->queued ? 'queued' : 'sent');
=======
        return \sprintf('the Transport %s (%d %s)', $this->toString(), $this->countEmails($events), $this->queued ? 'queued' : 'sent');
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    private function countEmails(MessageEvents $events): int
    {
        $count = 0;
        foreach ($events->getEvents($this->transport) as $event) {
            if (
                ($this->queued && $event->isQueued())
                || (!$this->queued && !$event->isQueued())
            ) {
                ++$count;
            }
        }

        return $count;
    }
}
