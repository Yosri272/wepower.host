<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Process\Exception;

use Symfony\Component\Process\Process;

/**
 * Exception for failed processes.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class ProcessFailedException extends RuntimeException
{
<<<<<<< HEAD
    private Process $process;

    public function __construct(Process $process)
    {
=======
    public function __construct(
        private Process $process,
    ) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        if ($process->isSuccessful()) {
            throw new InvalidArgumentException('Expected a failed process, but the given process was successful.');
        }

<<<<<<< HEAD
        $error = sprintf('The command "%s" failed.'."\n\nExit Code: %s(%s)\n\nWorking directory: %s",
=======
        $error = \sprintf('The command "%s" failed.'."\n\nExit Code: %s(%s)\n\nWorking directory: %s",
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $process->getCommandLine(),
            $process->getExitCode(),
            $process->getExitCodeText(),
            $process->getWorkingDirectory()
        );

        if (!$process->isOutputDisabled()) {
<<<<<<< HEAD
            $error .= sprintf("\n\nOutput:\n================\n%s\n\nError Output:\n================\n%s",
=======
            $error .= \sprintf("\n\nOutput:\n================\n%s\n\nError Output:\n================\n%s",
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                $process->getOutput(),
                $process->getErrorOutput()
            );
        }

        parent::__construct($error);

        $this->process = $process;
    }

<<<<<<< HEAD
    /**
     * @return Process
     */
    public function getProcess()
=======
    public function getProcess(): Process
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->process;
    }
}
