<?php declare(strict_types=1);
/*
 * This file is part of sebastian/complexity.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\Complexity;

use function str_contains;

/**
<<<<<<< HEAD
 * @psalm-immutable
 */
final class Complexity
{
    /**
     * @psalm-var non-empty-string
     */
    private readonly string $name;

    /**
     * @psalm-var positive-int
=======
 * @immutable
 */
final readonly class Complexity
{
    /**
     * @var non-empty-string
     */
    private string $name;

    /**
     * @var positive-int
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    private int $cyclomaticComplexity;

    /**
<<<<<<< HEAD
     * @psalm-param non-empty-string $name
     * @psalm-param positive-int $cyclomaticComplexity
=======
     * @param non-empty-string $name
     * @param positive-int     $cyclomaticComplexity
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function __construct(string $name, int $cyclomaticComplexity)
    {
        $this->name                 = $name;
        $this->cyclomaticComplexity = $cyclomaticComplexity;
    }

    /**
<<<<<<< HEAD
     * @psalm-return non-empty-string
=======
     * @return non-empty-string
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function name(): string
    {
        return $this->name;
    }

    /**
<<<<<<< HEAD
     * @psalm-return positive-int
=======
     * @return positive-int
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function cyclomaticComplexity(): int
    {
        return $this->cyclomaticComplexity;
    }

    public function isFunction(): bool
    {
        return !$this->isMethod();
    }

    public function isMethod(): bool
    {
        return str_contains($this->name, '::');
    }
}
