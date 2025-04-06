<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Framework\Attributes;

use Attribute;

/**
<<<<<<< HEAD
 * @psalm-immutable
=======
 * @immutable
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
#[Attribute(Attribute::TARGET_METHOD | Attribute::IS_REPEATABLE)]
<<<<<<< HEAD
final class TestWith
{
    private readonly array $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

=======
final readonly class TestWith
{
    /**
     * @var array<mixed>
     */
    private array $data;

    /**
     * @var ?non-empty-string
     */
    private ?string $name;

    /**
     * @param array<mixed>      $data
     * @param ?non-empty-string $name
     */
    public function __construct(array $data, ?string $name = null)
    {
        $this->data = $data;
        $this->name = $name;
    }

    /**
     * @return array<mixed>
     */
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function data(): array
    {
        return $this->data;
    }
<<<<<<< HEAD
=======

    /**
     * @return ?non-empty-string
     */
    public function name(): ?string
    {
        return $this->name;
    }
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
}
