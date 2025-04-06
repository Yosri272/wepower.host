<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\TextUI\Configuration;

/**
<<<<<<< HEAD
=======
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class SourceFilter
{
<<<<<<< HEAD
    public function includes(Source $source, string $path): bool
    {
        $files = (new SourceMapper)->map($source);

        return isset($files[$path]);
=======
    private static ?self $instance = null;

    /**
     * @var array<non-empty-string, true>
     */
    private readonly array $map;

    public static function instance(): self
    {
        if (self::$instance === null) {
            self::$instance = new self(
                (new SourceMapper)->map(
                    Registry::get()->source(),
                ),
            );
        }

        return self::$instance;
    }

    /**
     * @param array<non-empty-string, true> $map
     */
    public function __construct(array $map)
    {
        $this->map = $map;
    }

    public function includes(string $path): bool
    {
        return isset($this->map[$path]);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }
}
