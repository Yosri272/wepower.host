<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Framework\MockObject;

/**
<<<<<<< HEAD
=======
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
 * @internal This trait is not covered by the backward compatibility promise for PHPUnit
 */
trait DoubledCloneMethod
{
    public function __clone(): void
    {
<<<<<<< HEAD
        $this->__phpunit_invocationMocker = clone $this->__phpunit_getInvocationHandler();
    }
=======
        $this->__phpunit_state = clone $this->__phpunit_state;

        $this->__phpunit_state()->cloneInvocationHandler();
    }

    abstract public function __phpunit_state(): TestDoubleState;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
}
