<?php

namespace Spatie\LaravelIgnition\Recorders\DumpRecorder;

class MultiDumpHandler
{
    /** @var array<int, callable|null> */
    protected array $handlers = [];

    public function dump(mixed $value): void
    {
        foreach ($this->handlers as $handler) {
            if ($handler) {
                $handler($value);
            }
        }
    }

<<<<<<< HEAD
    public function addHandler(callable $callable = null): self
    {
        $this->handlers[] = $callable;
=======
    public function addHandler(?callable $callable = null): self
    {
        if ($callable) {
            $this->handlers[] = $callable;
        }
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        return $this;
    }
}
