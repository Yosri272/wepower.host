<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\TextUI\XmlConfiguration;

/**
<<<<<<< HEAD
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @psalm-immutable
 */
final class SuccessfulSchemaDetectionResult extends SchemaDetectionResult
{
    /**
     * @psalm-var non-empty-string
     */
    private readonly string $version;

    /**
     * @psalm-param non-empty-string $version
=======
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @immutable
 */
final readonly class SuccessfulSchemaDetectionResult extends SchemaDetectionResult
{
    /**
     * @var non-empty-string
     */
    private string $version;

    /**
     * @param non-empty-string $version
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function __construct(string $version)
    {
        $this->version = $version;
    }

<<<<<<< HEAD
    /**
     * @psalm-assert-if-true SuccessfulSchemaDetectionResult $this
     */
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function detected(): bool
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
    public function version(): string
    {
        return $this->version;
    }
}
