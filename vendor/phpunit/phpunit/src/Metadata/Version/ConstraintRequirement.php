<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Metadata\Version;

use function preg_replace;
use PharIo\Version\Version;
use PharIo\Version\VersionConstraint;

/**
<<<<<<< HEAD
 * @psalm-immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class ConstraintRequirement extends Requirement
{
    private readonly VersionConstraint $constraint;
=======
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class ConstraintRequirement extends Requirement
{
    private VersionConstraint $constraint;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    public function __construct(VersionConstraint $constraint)
    {
        $this->constraint = $constraint;
    }

<<<<<<< HEAD
    /**
     * @psalm-suppress ImpureMethodCall
     */
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function isSatisfiedBy(string $version): bool
    {
        return $this->constraint->complies(
            new Version($this->sanitize($version)),
        );
    }

<<<<<<< HEAD
    /**
     * @psalm-suppress ImpureMethodCall
     */
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function asString(): string
    {
        return $this->constraint->asString();
    }

    private function sanitize(string $version): string
    {
        return preg_replace(
            '/^(\d+\.\d+(?:.\d+)?).*$/',
            '$1',
            $version,
        );
    }
}
