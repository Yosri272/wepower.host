<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Framework\MockObject\Stub;

use function array_shift;
<<<<<<< HEAD
use PHPUnit\Framework\MockObject\Invocation;

/**
=======
use function count;
use PHPUnit\Framework\MockObject\Invocation;
use PHPUnit\Framework\MockObject\NoMoreReturnValuesConfiguredException;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ConsecutiveCalls implements Stub
{
<<<<<<< HEAD
    private array $stack;

    public function __construct(array $stack)
    {
        $this->stack = $stack;
    }

    public function invoke(Invocation $invocation): mixed
    {
=======
    /**
     * @var array<mixed>
     */
    private array $stack;
    private int $numberOfConfiguredReturnValues;

    /**
     * @param array<mixed> $stack
     */
    public function __construct(array $stack)
    {
        $this->stack                          = $stack;
        $this->numberOfConfiguredReturnValues = count($stack);
    }

    /**
     * @throws NoMoreReturnValuesConfiguredException
     */
    public function invoke(Invocation $invocation): mixed
    {
        if (empty($this->stack)) {
            throw new NoMoreReturnValuesConfiguredException(
                $invocation,
                $this->numberOfConfiguredReturnValues,
            );
        }

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        $value = array_shift($this->stack);

        if ($value instanceof Stub) {
            $value = $value->invoke($invocation);
        }

        return $value;
    }
}
