<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Event\TestSuite;

use PHPUnit\Event\Code\TestCollection;

/**
<<<<<<< HEAD
 * @psalm-immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
abstract class TestSuite
{
    /**
     * @psalm-var non-empty-string
     */
    private readonly string $name;
    private readonly int $count;
    private readonly TestCollection $tests;

    /**
     * @psalm-param non-empty-string $name
=======
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
abstract readonly class TestSuite
{
    /**
     * @var non-empty-string
     */
    private string $name;
    private int $count;
    private TestCollection $tests;

    /**
     * @param non-empty-string $name
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function __construct(string $name, int $size, TestCollection $tests)
    {
        $this->name  = $name;
        $this->count = $size;
        $this->tests = $tests;
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

    public function count(): int
    {
        return $this->count;
    }

    public function tests(): TestCollection
    {
        return $this->tests;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true TestSuiteWithName $this
=======
     * @phpstan-assert-if-true TestSuiteWithName $this
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function isWithName(): bool
    {
        return false;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true TestSuiteForTestClass $this
=======
     * @phpstan-assert-if-true TestSuiteForTestClass $this
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function isForTestClass(): bool
    {
        return false;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true TestSuiteForTestMethodWithDataProvider $this
=======
     * @phpstan-assert-if-true TestSuiteForTestMethodWithDataProvider $this
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function isForTestMethodWithDataProvider(): bool
    {
        return false;
    }
}
