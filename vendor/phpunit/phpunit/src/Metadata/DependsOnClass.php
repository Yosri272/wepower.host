<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Metadata;

/**
<<<<<<< HEAD
 * @psalm-immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class DependsOnClass extends Metadata
{
    /**
     * @psalm-var class-string
     */
    private readonly string $className;
    private readonly bool $deepClone;
    private readonly bool $shallowClone;

    /**
     * @psalm-param 0|1 $level
     * @psalm-param class-string $className
=======
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class DependsOnClass extends Metadata
{
    /**
     * @var class-string
     */
    private string $className;
    private bool $deepClone;
    private bool $shallowClone;

    /**
     * @param 0|1          $level
     * @param class-string $className
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    protected function __construct(int $level, string $className, bool $deepClone, bool $shallowClone)
    {
        parent::__construct($level);

        $this->className    = $className;
        $this->deepClone    = $deepClone;
        $this->shallowClone = $shallowClone;
    }

<<<<<<< HEAD
    /**
     * @psalm-assert-if-true DependsOnClass $this
     */
    public function isDependsOnClass(): bool
=======
    public function isDependsOnClass(): true
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return true;
    }

    /**
<<<<<<< HEAD
     * @psalm-return class-string
=======
     * @return class-string
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function className(): string
    {
        return $this->className;
    }

    public function deepClone(): bool
    {
        return $this->deepClone;
    }

    public function shallowClone(): bool
    {
        return $this->shallowClone;
    }
}
