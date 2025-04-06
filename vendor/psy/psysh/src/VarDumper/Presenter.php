<?php

/*
 * This file is part of Psy Shell.
 *
 * (c) 2012-2023 Justin Hileman
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Psy\VarDumper;

use Symfony\Component\Console\Formatter\OutputFormatter;
use Symfony\Component\VarDumper\Caster\Caster;
use Symfony\Component\VarDumper\Cloner\Stub;

/**
 * A Presenter service.
 */
class Presenter
{
    const VERBOSE = 1;

<<<<<<< HEAD
    private $cloner;
    private $dumper;
    private $exceptionsImportants = [
=======
    private Cloner $cloner;
    private Dumper $dumper;

    private const IMPORTANT_EXCEPTIONS = [
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        "\0*\0message",
        "\0*\0code",
        "\0*\0file",
        "\0*\0line",
        "\0Exception\0previous",
    ];
<<<<<<< HEAD
    private $styles = [
=======

    private const STYLES = [
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        'num'       => 'number',
        'integer'   => 'integer',
        'float'     => 'float',
        'const'     => 'const',
        'str'       => 'string',
        'cchr'      => 'default',
        'note'      => 'class',
        'ref'       => 'default',
        'public'    => 'public',
        'protected' => 'protected',
        'private'   => 'private',
        'meta'      => 'comment',
        'key'       => 'comment',
        'index'     => 'number',
    ];

    public function __construct(OutputFormatter $formatter, $forceArrayIndexes = false)
    {
        // Work around https://github.com/symfony/symfony/issues/23572
        $oldLocale = \setlocale(\LC_NUMERIC, 0);
        \setlocale(\LC_NUMERIC, 'C');

        $this->dumper = new Dumper($formatter, $forceArrayIndexes);
<<<<<<< HEAD
        $this->dumper->setStyles($this->styles);
=======
        $this->dumper->setStyles(self::STYLES);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        // Now put the locale back
        \setlocale(\LC_NUMERIC, $oldLocale);

        $this->cloner = new Cloner();
        $this->cloner->addCasters(['*' => function ($obj, array $a, Stub $stub, $isNested, $filter = 0) {
            if ($filter || $isNested) {
                if ($obj instanceof \Throwable) {
<<<<<<< HEAD
                    $a = Caster::filter($a, Caster::EXCLUDE_NOT_IMPORTANT | Caster::EXCLUDE_EMPTY, $this->exceptionsImportants);
=======
                    $a = Caster::filter($a, Caster::EXCLUDE_NOT_IMPORTANT | Caster::EXCLUDE_EMPTY, self::IMPORTANT_EXCEPTIONS);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                } else {
                    $a = Caster::filter($a, Caster::EXCLUDE_PROTECTED | Caster::EXCLUDE_PRIVATE);
                }
            }

            return $a;
        }]);
    }

    /**
     * Register casters.
     *
     * @see http://symfony.com/doc/current/components/var_dumper/advanced.html#casters
     *
     * @param callable[] $casters A map of casters
     */
    public function addCasters(array $casters)
    {
        $this->cloner->addCasters($casters);
    }

    /**
     * Present a reference to the value.
     *
     * @param mixed $value
     */
    public function presentRef($value): string
    {
        return $this->present($value, 0);
    }

    /**
     * Present a full representation of the value.
     *
     * If $depth is 0, the value will be presented as a ref instead.
     *
     * @param mixed $value
     * @param int   $depth   (default: null)
     * @param int   $options One of Presenter constants
     */
    public function present($value, ?int $depth = null, int $options = 0): string
    {
        $data = $this->cloner->cloneVar($value, !($options & self::VERBOSE) ? Caster::EXCLUDE_VERBOSE : 0);

        if (null !== $depth) {
            $data = $data->withMaxDepth($depth);
        }

        // Work around https://github.com/symfony/symfony/issues/23572
        $oldLocale = \setlocale(\LC_NUMERIC, 0);
        \setlocale(\LC_NUMERIC, 'C');

        $output = '';
        $this->dumper->dump($data, function ($line, $depth) use (&$output) {
            if ($depth >= 0) {
                if ('' !== $output) {
                    $output .= \PHP_EOL;
                }
                $output .= \str_repeat('  ', $depth).$line;
            }
        });

        // Now put the locale back
        \setlocale(\LC_NUMERIC, $oldLocale);

        return OutputFormatter::escape($output);
    }
}
