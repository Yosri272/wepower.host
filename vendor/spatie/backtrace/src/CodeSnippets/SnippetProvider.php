<?php

namespace Spatie\Backtrace\CodeSnippets;

interface SnippetProvider
{
    public function numberOfLines(): int;

<<<<<<< HEAD
    public function getLine(int $lineNumber = null): string;
=======
    public function getLine(?int $lineNumber = null): string;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    public function getNextLine(): string;
}
