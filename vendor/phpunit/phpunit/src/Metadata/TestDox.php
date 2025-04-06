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
final class TestDox extends Metadata
{
    /**
     * @psalm-var non-empty-string
     */
    private readonly string $text;

    /**
     * @psalm-param 0|1 $level
     * @psalm-param non-empty-string $text
=======
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestDox extends Metadata
{
    /**
     * @var non-empty-string
     */
    private string $text;

    /**
     * @param 0|1              $level
     * @param non-empty-string $text
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    protected function __construct(int $level, string $text)
    {
        parent::__construct($level);

        $this->text = $text;
    }

<<<<<<< HEAD
    /**
     * @psalm-assert-if-true TestDox $this
     */
    public function isTestDox(): bool
=======
    public function isTestDox(): true
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
    public function text(): string
    {
        return $this->text;
    }
}
