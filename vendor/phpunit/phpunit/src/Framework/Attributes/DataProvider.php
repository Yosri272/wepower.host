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
final class DataProvider
{
    /**
     * @psalm-var non-empty-string
     */
    private readonly string $methodName;

    /**
     * @psalm-param non-empty-string $methodName
=======
final readonly class DataProvider
{
    /**
     * @var non-empty-string
     */
    private string $methodName;

    /**
     * @param non-empty-string $methodName
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function __construct(string $methodName)
    {
        $this->methodName = $methodName;
    }

    /**
<<<<<<< HEAD
     * @psalm-return non-empty-string
=======
     * @return non-empty-string
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function methodName(): string
    {
        return $this->methodName;
    }
}
