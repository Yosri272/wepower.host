<?php declare(strict_types=1);
/*
 * This file is part of sebastian/code-unit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\CodeUnit;

/**
<<<<<<< HEAD
 * @psalm-immutable
 */
final class InterfaceMethodUnit extends CodeUnit
{
    /**
     * @psalm-assert-if-true InterfaceMethod $this
     */
=======
 * @immutable
 */
final readonly class InterfaceMethodUnit extends CodeUnit
{
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function isInterfaceMethod(): bool
    {
        return true;
    }
}
