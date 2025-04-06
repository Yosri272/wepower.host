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
final class TestWith extends Metadata
{
    private readonly array $data;

    /**
     * @psalm-param 0|1 $level
     */
    protected function __construct(int $level, array $data)
=======
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestWith extends Metadata
{
    /**
     * @var array<array<mixed>>
     */
    private array $data;

    /**
     * @var ?non-empty-string
     */
    private ?string $name;

    /**
     * @param 0|1                 $level
     * @param array<array<mixed>> $data
     * @param ?non-empty-string   $name
     */
    protected function __construct(int $level, array $data, ?string $name = null)
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        parent::__construct($level);

        $this->data = $data;
<<<<<<< HEAD
    }

    /**
     * @psalm-assert-if-true TestWith $this
     */
    public function isTestWith(): bool
=======
        $this->name = $name;
    }

    public function isTestWith(): true
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return true;
    }

<<<<<<< HEAD
=======
    /**
     * @return array<array<mixed>>
     */
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function data(): array
    {
        return $this->data;
    }
<<<<<<< HEAD
=======

    /**
     * @phpstan-assert-if-true !null $this->name
     */
    public function hasName(): bool
    {
        return $this->name !== null;
    }

    /**
     * @return ?non-empty-string
     */
    public function name(): ?string
    {
        return $this->name;
    }
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
}
