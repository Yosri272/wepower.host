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
#[Attribute(Attribute::TARGET_CLASS | Attribute::TARGET_METHOD)]
<<<<<<< HEAD
final class RequiresOperatingSystemFamily
{
    /**
     * @psalm-var non-empty-string
     */
    private readonly string $operatingSystemFamily;

    /**
     * @psalm-param non-empty-string $operatingSystemFamily
=======
final readonly class RequiresOperatingSystemFamily
{
    /**
     * @var non-empty-string
     */
    private string $operatingSystemFamily;

    /**
     * @param non-empty-string $operatingSystemFamily
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function __construct(string $operatingSystemFamily)
    {
        $this->operatingSystemFamily = $operatingSystemFamily;
    }

    /**
<<<<<<< HEAD
     * @psalm-return non-empty-string
=======
     * @return non-empty-string
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function operatingSystemFamily(): string
    {
        return $this->operatingSystemFamily;
    }
}
