<?php

namespace Illuminate\Testing\Fluent\Concerns;

<<<<<<< HEAD
trait Debugging
{
=======
use Illuminate\Support\Traits\Dumpable;

trait Debugging
{
    use Dumpable;

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    /**
     * Dumps the given props.
     *
     * @param  string|null  $prop
     * @return $this
     */
<<<<<<< HEAD
    public function dump(string $prop = null): self
=======
    public function dump(?string $prop = null): self
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        dump($this->prop($prop));

        return $this;
    }

    /**
<<<<<<< HEAD
     * Dumps the given props and exits.
     *
     * @param  string|null  $prop
     * @return never
     */
    public function dd(string $prop = null): void
    {
        dd($this->prop($prop));
    }

    /**
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * Retrieve a prop within the current scope using "dot" notation.
     *
     * @param  string|null  $key
     * @return mixed
     */
<<<<<<< HEAD
    abstract protected function prop(string $key = null);
=======
    abstract protected function prop(?string $key = null);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
}
