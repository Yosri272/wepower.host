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
use Symfony\Component\Mime\Header\UnstructuredHeader;
use Symfony\Component\Mime\RawMessage;

final class EmailHeaderSame extends Constraint
{
<<<<<<< HEAD
    private string $headerName;
    private string $expectedValue;

    public function __construct(string $headerName, string $expectedValue)
    {
        $this->headerName = $headerName;
        $this->expectedValue = $expectedValue;
=======
    public function __construct(
        private string $headerName,
        private string $expectedValue,
    ) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function toString(): string
    {
<<<<<<< HEAD
        return sprintf('has header "%s" with value "%s"', $this->headerName, $this->expectedValue);
=======
        return \sprintf('has header "%s" with value "%s"', $this->headerName, $this->expectedValue);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * @param RawMessage $message
     */
    protected function matches($message): bool
    {
        if (RawMessage::class === $message::class) {
            throw new \LogicException('Unable to test a message header on a RawMessage instance.');
        }

        return $this->expectedValue === $this->getHeaderValue($message);
    }

    /**
     * @param RawMessage $message
     */
    protected function failureDescription($message): string
    {
<<<<<<< HEAD
        return sprintf('the Email %s (value is %s)', $this->toString(), $this->getHeaderValue($message) ?? 'null');
=======
        return \sprintf('the Email %s (value is %s)', $this->toString(), $this->getHeaderValue($message) ?? 'null');
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    private function getHeaderValue($message): ?string
    {
        if (null === $header = $message->getHeaders()->get($this->headerName)) {
            return null;
        }

        return $header instanceof UnstructuredHeader ? $header->getValue() : $header->getBodyAsString();
    }
}
