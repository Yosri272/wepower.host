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
final class ExcludeGlobalVariableFromBackup extends Metadata
{
    /**
     * @psalm-var non-empty-string
     */
    private readonly string $globalVariableName;

    /**
     * @psalm-param 0|1 $level
     * @psalm-param non-empty-string $globalVariableName
=======
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class ExcludeGlobalVariableFromBackup extends Metadata
{
    /**
     * @var non-empty-string
     */
    private string $globalVariableName;

    /**
     * @param 0|1              $level
     * @param non-empty-string $globalVariableName
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    protected function __construct(int $level, string $globalVariableName)
    {
        parent::__construct($level);

        $this->globalVariableName = $globalVariableName;
    }

<<<<<<< HEAD
    /**
     * @psalm-assert-if-true ExcludeGlobalVariableFromBackup $this
     */
    public function isExcludeGlobalVariableFromBackup(): bool
=======
    public function isExcludeGlobalVariableFromBackup(): true
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
    public function globalVariableName(): string
    {
        return $this->globalVariableName;
    }
}
