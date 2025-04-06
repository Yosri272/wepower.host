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
final class RequiresOperatingSystem
{
    /**
     * @psalm-var non-empty-string
     */
    private readonly string $regularExpression;

    /**
     * @psalm-param non-empty-string $regularExpression
=======
final readonly class RequiresOperatingSystem
{
    /**
     * @var non-empty-string
     */
    private string $regularExpression;

    /**
     * @param non-empty-string $regularExpression
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function __construct(string $regularExpression)
    {
        $this->regularExpression = $regularExpression;
    }

    /**
<<<<<<< HEAD
     * @psalm-return non-empty-string
=======
     * @return non-empty-string
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function regularExpression(): string
    {
        return $this->regularExpression;
    }
}
