<?php declare(strict_types=1);
/*
 * This file is part of sebastian/type.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\Type;

<<<<<<< HEAD
=======
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for this library
 */
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
final class NullType extends Type
{
    public function isAssignable(Type $other): bool
    {
        return !($other instanceof VoidType);
    }

<<<<<<< HEAD
=======
    /**
     * @return 'null'
     */
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function name(): string
    {
        return 'null';
    }

<<<<<<< HEAD
=======
    /**
     * @return 'null'
     */
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function asString(): string
    {
        return 'null';
    }

    public function allowsNull(): bool
    {
        return true;
    }

<<<<<<< HEAD
    /**
     * @psalm-assert-if-true NullType $this
     */
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function isNull(): bool
    {
        return true;
    }
}
