<?php

namespace Laravel\SerializableClosure;

use Closure;
<<<<<<< HEAD
use Laravel\SerializableClosure\Exceptions\PhpVersionNotSupportedException;
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

class UnsignedSerializableClosure
{
    /**
     * The closure's serializable.
     *
     * @var \Laravel\SerializableClosure\Contracts\Serializable
     */
    protected $serializable;

    /**
     * Creates a new serializable closure instance.
     *
     * @param  \Closure  $closure
     * @return void
     */
    public function __construct(Closure $closure)
    {
<<<<<<< HEAD
        if (\PHP_VERSION_ID < 70400) {
            throw new PhpVersionNotSupportedException();
        }

=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        $this->serializable = new Serializers\Native($closure);
    }

    /**
     * Resolve the closure with the given arguments.
     *
     * @return mixed
     */
    public function __invoke()
    {
<<<<<<< HEAD
        if (\PHP_VERSION_ID < 70400) {
            throw new PhpVersionNotSupportedException();
        }

=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        return call_user_func_array($this->serializable, func_get_args());
    }

    /**
     * Gets the closure.
     *
     * @return \Closure
     */
    public function getClosure()
    {
<<<<<<< HEAD
        if (\PHP_VERSION_ID < 70400) {
            throw new PhpVersionNotSupportedException();
        }

=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        return $this->serializable->getClosure();
    }

    /**
     * Get the serializable representation of the closure.
     *
<<<<<<< HEAD
     * @return array
=======
     * @return array{serializable: \Laravel\SerializableClosure\Contracts\Serializable}
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function __serialize()
    {
        return [
            'serializable' => $this->serializable,
        ];
    }

    /**
     * Restore the closure after serialization.
     *
<<<<<<< HEAD
     * @param  array  $data
=======
     * @param  array{serializable: \Laravel\SerializableClosure\Contracts\Serializable}  $data
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * @return void
     */
    public function __unserialize($data)
    {
        $this->serializable = $data['serializable'];
    }
}
