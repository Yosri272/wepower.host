<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Framework\MockObject\Generator;

use SebastianBergmann\Template\Template;

/**
<<<<<<< HEAD
=======
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
 * @internal This trait is not covered by the backward compatibility promise for PHPUnit
 */
trait TemplateLoader
{
    /**
<<<<<<< HEAD
     * @psalm-var array<string,Template>
     */
    private static array $templates = [];

    /**
     * @psalm-suppress MissingThrowsDocblock
     */
=======
     * @var array<string,Template>
     */
    private static array $templates = [];

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    private function loadTemplate(string $template): Template
    {
        $filename = __DIR__ . '/templates/' . $template;

        if (!isset(self::$templates[$filename])) {
            self::$templates[$filename] = new Template($filename);
        }

        return self::$templates[$filename];
    }
}
