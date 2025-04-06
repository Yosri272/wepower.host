<?php

namespace Illuminate\Console;

use Symfony\Component\Console\Output\ConsoleOutput;

class BufferedConsoleOutput extends ConsoleOutput
{
    /**
     * The current buffer.
     *
     * @var string
     */
    protected $buffer = '';

    /**
     * Empties the buffer and returns its content.
     *
     * @return string
     */
    public function fetch()
    {
        return tap($this->buffer, function () {
            $this->buffer = '';
        });
    }

    /**
     * {@inheritdoc}
<<<<<<< HEAD
     *
     * @return void
     */
    protected function doWrite(string $message, bool $newline)
=======
     */
    #[\Override]
    protected function doWrite(string $message, bool $newline): void
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $this->buffer .= $message;

        if ($newline) {
            $this->buffer .= \PHP_EOL;
        }

<<<<<<< HEAD
        return parent::doWrite($message, $newline);
=======
        parent::doWrite($message, $newline);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }
}
