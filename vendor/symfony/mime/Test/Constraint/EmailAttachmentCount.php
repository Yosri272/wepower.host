<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Mime\Test\Constraint;

use PHPUnit\Framework\Constraint\Constraint;
use Symfony\Component\Mime\Message;
use Symfony\Component\Mime\RawMessage;

final class EmailAttachmentCount extends Constraint
{
<<<<<<< HEAD
    private int $expectedValue;
    private ?string $transport;

    public function __construct(int $expectedValue, ?string $transport = null)
    {
        $this->expectedValue = $expectedValue;
        $this->transport = $transport;
=======
    public function __construct(
        private int $expectedValue,
    ) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function toString(): string
    {
<<<<<<< HEAD
        return sprintf('has sent "%d" attachment(s)', $this->expectedValue);
=======
        return \sprintf('has sent "%d" attachment(s)', $this->expectedValue);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * @param RawMessage $message
     */
    protected function matches($message): bool
    {
        if (RawMessage::class === $message::class || Message::class === $message::class) {
            throw new \LogicException('Unable to test a message attachment on a RawMessage or Message instance.');
        }

        return $this->expectedValue === \count($message->getAttachments());
    }

    /**
     * @param RawMessage $message
     */
    protected function failureDescription($message): string
    {
        return 'the Email '.$this->toString();
    }
}
