<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Console\Output;

use Symfony\Component\Console\Formatter\NullOutputFormatter;
use Symfony\Component\Console\Formatter\OutputFormatterInterface;

/**
 * NullOutput suppresses all output.
 *
 *     $output = new NullOutput();
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Tobias Schultze <http://tobion.de>
 */
class NullOutput implements OutputInterface
{
    private NullOutputFormatter $formatter;

<<<<<<< HEAD
    /**
     * @return void
     */
    public function setFormatter(OutputFormatterInterface $formatter)
=======
    public function setFormatter(OutputFormatterInterface $formatter): void
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        // do nothing
    }

    public function getFormatter(): OutputFormatterInterface
    {
        // to comply with the interface we must return a OutputFormatterInterface
        return $this->formatter ??= new NullOutputFormatter();
    }

<<<<<<< HEAD
    /**
     * @return void
     */
    public function setDecorated(bool $decorated)
=======
    public function setDecorated(bool $decorated): void
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        // do nothing
    }

    public function isDecorated(): bool
    {
        return false;
    }

<<<<<<< HEAD
    /**
     * @return void
     */
    public function setVerbosity(int $level)
=======
    public function setVerbosity(int $level): void
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        // do nothing
    }

    public function getVerbosity(): int
    {
<<<<<<< HEAD
        return self::VERBOSITY_QUIET;
=======
        return self::VERBOSITY_SILENT;
    }

    public function isSilent(): bool
    {
        return true;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function isQuiet(): bool
    {
<<<<<<< HEAD
        return true;
=======
        return false;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function isVerbose(): bool
    {
        return false;
    }

    public function isVeryVerbose(): bool
    {
        return false;
    }

    public function isDebug(): bool
    {
        return false;
    }

<<<<<<< HEAD
    /**
     * @return void
     */
    public function writeln(string|iterable $messages, int $options = self::OUTPUT_NORMAL)
=======
    public function writeln(string|iterable $messages, int $options = self::OUTPUT_NORMAL): void
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        // do nothing
    }

<<<<<<< HEAD
    /**
     * @return void
     */
    public function write(string|iterable $messages, bool $newline = false, int $options = self::OUTPUT_NORMAL)
=======
    public function write(string|iterable $messages, bool $newline = false, int $options = self::OUTPUT_NORMAL): void
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        // do nothing
    }
}
