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
final class RequiresOperatingSystem extends Metadata
{
    /**
     * @psalm-var non-empty-string
     */
    private readonly string $operatingSystem;

    /**
     * @psalm-param 0|1 $level
     * @psalm-param non-empty-string $operatingSystem
=======
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class RequiresOperatingSystem extends Metadata
{
    /**
     * @var non-empty-string
     */
    private string $operatingSystem;

    /**
     * @param 0|1              $level
     * @param non-empty-string $operatingSystem
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function __construct(int $level, string $operatingSystem)
    {
        parent::__construct($level);

        $this->operatingSystem = $operatingSystem;
    }

<<<<<<< HEAD
    /**
     * @psalm-assert-if-true RequiresOperatingSystem $this
     */
    public function isRequiresOperatingSystem(): bool
=======
    public function isRequiresOperatingSystem(): true
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return true;
    }

    /**
<<<<<<< HEAD
     * @psalm-return non-empty-string
=======
     * @return non-empty-string
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function operatingSystem(): string
    {
        return $this->operatingSystem;
    }
}
