<?php

namespace Spatie\Backtrace\CodeSnippets;

use SplFileObject;

class FileSnippetProvider implements SnippetProvider
{
    /** @var \SplFileObject */
    protected $file;

    public function __construct(string $path)
    {
        $this->file = new SplFileObject($path);
    }

    public function numberOfLines(): int
    {
        $this->file->seek(PHP_INT_MAX);

        return $this->file->key() + 1;
    }

<<<<<<< HEAD
    public function getLine(int $lineNumber = null): string
=======
    public function getLine(?int $lineNumber = null): string
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        if (is_null($lineNumber)) {
            return $this->getNextLine();
        }

        $this->file->seek($lineNumber - 1);

        return $this->file->current();
    }

    public function getNextLine(): string
    {
        $this->file->next();

        return $this->file->current();
    }
}
