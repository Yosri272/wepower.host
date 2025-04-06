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
final class PreserveGlobalState extends Metadata
{
    private readonly bool $enabled;

    /**
     * @psalm-param 0|1 $level
=======
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class PreserveGlobalState extends Metadata
{
    private bool $enabled;

    /**
     * @param 0|1 $level
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    protected function __construct(int $level, bool $enabled)
    {
        parent::__construct($level);

        $this->enabled = $enabled;
    }

<<<<<<< HEAD
    /**
     * @psalm-assert-if-true PreserveGlobalState $this
     */
    public function isPreserveGlobalState(): bool
=======
    public function isPreserveGlobalState(): true
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return true;
    }

    public function enabled(): bool
    {
        return $this->enabled;
    }
}
