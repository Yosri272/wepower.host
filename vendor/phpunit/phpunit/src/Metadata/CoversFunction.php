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
final class CoversFunction extends Metadata
{
    /**
     * @psalm-var non-empty-string
     */
    private readonly string $functionName;

    /**
     * @psalm-param 0|1 $level
     * @psalm-param non-empty-string $functionName
=======
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class CoversFunction extends Metadata
{
    /**
     * @var non-empty-string
     */
    private string $functionName;

    /**
     * @param 0|1              $level
     * @param non-empty-string $functionName
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    protected function __construct(int $level, string $functionName)
    {
        parent::__construct($level);

        $this->functionName = $functionName;
    }

<<<<<<< HEAD
    /**
     * @psalm-assert-if-true CoversFunction $this
     */
    public function isCoversFunction(): bool
=======
    public function isCoversFunction(): true
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
    public function functionName(): string
    {
        return $this->functionName;
    }

    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function asStringForCodeUnitMapper(): string
    {
        return '::' . $this->functionName;
    }
}
