<?php

declare(strict_types=1);

namespace Termwind;

use Symfony\Component\Console\Terminal as ConsoleTerminal;

/**
 * @internal
 */
final class Terminal
{
    /**
     * An instance of Symfony's console terminal.
     */
    private ConsoleTerminal $terminal;

    /**
     * Creates a new terminal instance.
     */
<<<<<<< HEAD
    public function __construct(ConsoleTerminal $terminal = null)
    {
        $this->terminal = $terminal ?? new ConsoleTerminal();
=======
    public function __construct(?ConsoleTerminal $terminal = null)
    {
        $this->terminal = $terminal ?? new ConsoleTerminal;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Gets the terminal width.
     */
    public function width(): int
    {
        return $this->terminal->getWidth();
    }

    /**
     * Gets the terminal height.
     */
    public function height(): int
    {
        return $this->terminal->getHeight();
    }

    /**
     * Clears the terminal screen.
     */
    public function clear(): void
    {
        Termwind::getRenderer()->write("\ec");
    }
}
