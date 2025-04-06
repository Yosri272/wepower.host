<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Event\TestData;

/**
<<<<<<< HEAD
 * @psalm-immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class DataFromTestDependency extends TestData
=======
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class DataFromTestDependency extends TestData
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
{
    public static function from(string $data): self
    {
        return new self($data);
    }

<<<<<<< HEAD
    /**
     * @psalm-assert-if-true DataFromTestDependency $this
     */
    public function isFromTestDependency(): bool
=======
    public function isFromTestDependency(): true
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return true;
    }
}
