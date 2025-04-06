<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Event\Code;

/**
<<<<<<< HEAD
 * @psalm-immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
abstract class Test
{
    /**
     * @psalm-var non-empty-string
     */
    private readonly string $file;

    /**
     * @psalm-param non-empty-string $file
=======
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
abstract readonly class Test
{
    /**
     * @var non-empty-string
     */
    private string $file;

    /**
     * @param non-empty-string $file
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function __construct(string $file)
    {
        $this->file = $file;
    }

    /**
<<<<<<< HEAD
     * @psalm-return non-empty-string
=======
     * @return non-empty-string
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function file(): string
    {
        return $this->file;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true TestMethod $this
=======
     * @phpstan-assert-if-true TestMethod $this
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function isTestMethod(): bool
    {
        return false;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true Phpt $this
=======
     * @phpstan-assert-if-true Phpt $this
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function isPhpt(): bool
    {
        return false;
    }

    /**
<<<<<<< HEAD
     * @psalm-return non-empty-string
=======
     * @return non-empty-string
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    abstract public function id(): string;

    /**
<<<<<<< HEAD
     * @psalm-return non-empty-string
=======
     * @return non-empty-string
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    abstract public function name(): string;
}
