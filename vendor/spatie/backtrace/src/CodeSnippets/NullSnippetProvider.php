<?php

namespace Spatie\Backtrace\CodeSnippets;

class NullSnippetProvider implements SnippetProvider
{
    public function numberOfLines(): int
    {
        return 1;
    }

<<<<<<< HEAD
    public function getLine(int $lineNumber = null): string
=======
    public function getLine(?int $lineNumber = null): string
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->getNextLine();
    }

    public function getNextLine(): string
    {
        return "File not found for code snippet";
    }
}
