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

final class EmailHtmlBodyContains extends Constraint
{
<<<<<<< HEAD
    private string $expectedText;

    public function __construct(string $expectedText)
    {
        $this->expectedText = $expectedText;
=======
    public function __construct(
        private string $expectedText,
    ) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function toString(): string
    {
<<<<<<< HEAD
        return sprintf('contains "%s"', $this->expectedText);
=======
        return \sprintf('contains "%s"', $this->expectedText);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * @param RawMessage $message
     */
    protected function matches($message): bool
    {
        if (RawMessage::class === $message::class || Message::class === $message::class) {
            throw new \LogicException('Unable to test a message HTML body on a RawMessage or Message instance.');
        }

        return str_contains($message->getHtmlBody(), $this->expectedText);
    }

    /**
     * @param RawMessage $message
     */
    protected function failureDescription($message): string
    {
        return 'the Email HTML body '.$this->toString();
    }
}
