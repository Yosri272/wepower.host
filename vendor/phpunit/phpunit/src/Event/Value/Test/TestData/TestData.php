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
abstract class TestData
{
    private readonly string $data;
=======
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
abstract readonly class TestData
{
    private string $data;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    protected function __construct(string $data)
    {
        $this->data = $data;
    }

    public function data(): string
    {
        return $this->data;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true DataFromDataProvider $this
=======
     * @phpstan-assert-if-true DataFromDataProvider $this
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function isFromDataProvider(): bool
    {
        return false;
    }

    /**
<<<<<<< HEAD
     * @psalm-assert-if-true DataFromTestDependency $this
=======
     * @phpstan-assert-if-true DataFromTestDependency $this
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function isFromTestDependency(): bool
    {
        return false;
    }
}
