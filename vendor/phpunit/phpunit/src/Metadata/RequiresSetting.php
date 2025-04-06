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
final class RequiresSetting extends Metadata
{
    /**
     * @psalm-var non-empty-string
     */
    private readonly string $setting;

    /**
     * @psalm-var non-empty-string
     */
    private readonly string $value;

    /**
     * @psalm-param 0|1 $level
     * @psalm-param non-empty-string $setting
     * @psalm-param non-empty-string $value
=======
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class RequiresSetting extends Metadata
{
    /**
     * @var non-empty-string
     */
    private string $setting;

    /**
     * @var non-empty-string
     */
    private string $value;

    /**
     * @param 0|1              $level
     * @param non-empty-string $setting
     * @param non-empty-string $value
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    protected function __construct(int $level, string $setting, string $value)
    {
        parent::__construct($level);

        $this->setting = $setting;
        $this->value   = $value;
    }

<<<<<<< HEAD
    /**
     * @psalm-assert-if-true RequiresSetting $this
     */
    public function isRequiresSetting(): bool
=======
    public function isRequiresSetting(): true
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
    public function setting(): string
    {
        return $this->setting;
    }

    /**
<<<<<<< HEAD
     * @psalm-return non-empty-string
=======
     * @return non-empty-string
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function value(): string
    {
        return $this->value;
    }
}
