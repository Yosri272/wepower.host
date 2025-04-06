<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Framework\MockObject\Rule;

use function count;
use PHPUnit\Framework\MockObject\Invocation as BaseInvocation;
use PHPUnit\Framework\SelfDescribing;

/**
<<<<<<< HEAD
=======
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
abstract class InvocationOrder implements SelfDescribing
{
    /**
<<<<<<< HEAD
     * @psalm-var list<BaseInvocation>
=======
     * @var list<BaseInvocation>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    private array $invocations = [];

    public function numberOfInvocations(): int
    {
        return count($this->invocations);
    }

    public function hasBeenInvoked(): bool
    {
        return count($this->invocations) > 0;
    }

    final public function invoked(BaseInvocation $invocation): void
    {
        $this->invocations[] = $invocation;

        $this->invokedDo($invocation);
    }

    abstract public function matches(BaseInvocation $invocation): bool;

    abstract public function verify(): void;

    protected function invokedDo(BaseInvocation $invocation): void
    {
    }
}
