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
final class RequiresOperatingSystemFamily extends Metadata
{
    /**
     * @psalm-var non-empty-string
     */
    private readonly string $operatingSystemFamily;

    /**
     * @psalm-param 0|1 $level
     * @psalm-param non-empty-string $operatingSystemFamily
=======
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class RequiresOperatingSystemFamily extends Metadata
{
    /**
     * @var non-empty-string
     */
    private string $operatingSystemFamily;

    /**
     * @param 0|1              $level
     * @param non-empty-string $operatingSystemFamily
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    protected function __construct(int $level, string $operatingSystemFamily)
    {
        parent::__construct($level);

        $this->operatingSystemFamily = $operatingSystemFamily;
    }

<<<<<<< HEAD
    /**
     * @psalm-assert-if-true RequiresOperatingSystemFamily $this
     */
    public function isRequiresOperatingSystemFamily(): bool
=======
    public function isRequiresOperatingSystemFamily(): true
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
    public function operatingSystemFamily(): string
    {
        return $this->operatingSystemFamily;
    }
}
