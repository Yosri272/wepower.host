<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Framework\Constraint;

<<<<<<< HEAD
/**
 * @psalm-template CallbackInput of mixed
=======
use Closure;
use ReflectionFunction;

/**
 * @template CallbackInput of mixed
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class Callback extends Constraint
{
    /**
<<<<<<< HEAD
     * @psalm-var callable(CallbackInput $input): bool
=======
     * @var callable(CallbackInput): bool
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    private readonly mixed $callback;

    /**
<<<<<<< HEAD
     * @psalm-param callable(CallbackInput $input): bool $callback
=======
     * @param callable(CallbackInput $input): bool $callback
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function __construct(callable $callback)
    {
        $this->callback = $callback;
    }

    /**
     * Returns a string representation of the constraint.
     */
    public function toString(): string
    {
        return 'is accepted by specified callback';
    }

<<<<<<< HEAD
=======
    public function isVariadic(): bool
    {
        foreach ((new ReflectionFunction(Closure::fromCallable($this->callback)))->getParameters() as $parameter) {
            if ($parameter->isVariadic()) {
                return true;
            }
        }

        return false;
    }

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    /**
     * Evaluates the constraint for parameter $value. Returns true if the
     * constraint is met, false otherwise.
     *
<<<<<<< HEAD
     * @psalm-param CallbackInput $other
     */
    protected function matches(mixed $other): bool
    {
=======
     * @param CallbackInput $other
     */
    protected function matches(mixed $other): bool
    {
        if ($this->isVariadic()) {
            return ($this->callback)(...$other);
        }

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        return ($this->callback)($other);
    }
}
