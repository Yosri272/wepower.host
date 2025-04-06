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
final class BeforeClass extends Metadata
{
    /**
     * @psalm-assert-if-true BeforeClass $this
     */
    public function isBeforeClass(): bool
    {
        return true;
    }
=======
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class BeforeClass extends Metadata
{
    private int $priority;

    /**
     * @param 0|1 $level
     */
    protected function __construct(int $level, int $priority)
    {
        parent::__construct($level);

        $this->priority = $priority;
    }

    public function isBeforeClass(): true
    {
        return true;
    }

    public function priority(): int
    {
        return $this->priority;
    }
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
}
