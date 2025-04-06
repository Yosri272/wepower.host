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
final class RequiresPhpunit
{
    /**
     * @psalm-var non-empty-string
     */
    private readonly string $versionRequirement;

    /**
     * @psalm-param non-empty-string $versionRequirement
=======
final readonly class RequiresPhpunit
{
    /**
     * @var non-empty-string
     */
    private string $versionRequirement;

    /**
     * @param non-empty-string $versionRequirement
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function __construct(string $versionRequirement)
    {
        $this->versionRequirement = $versionRequirement;
    }

    /**
<<<<<<< HEAD
     * @psalm-return non-empty-string
=======
     * @return non-empty-string
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function versionRequirement(): string
    {
        return $this->versionRequirement;
    }
}
