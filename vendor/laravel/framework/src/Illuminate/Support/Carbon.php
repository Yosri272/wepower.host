<?php

namespace Illuminate\Support;

use Carbon\Carbon as BaseCarbon;
use Carbon\CarbonImmutable as BaseCarbonImmutable;
use Illuminate\Support\Traits\Conditionable;
<<<<<<< HEAD
=======
use Illuminate\Support\Traits\Dumpable;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use Ramsey\Uuid\Uuid;
use Symfony\Component\Uid\Ulid;

class Carbon extends BaseCarbon
{
<<<<<<< HEAD
    use Conditionable;
=======
    use Conditionable, Dumpable;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    /**
     * {@inheritdoc}
     */
<<<<<<< HEAD
    public static function setTestNow($testNow = null)
=======
    public static function setTestNow(mixed $testNow = null): void
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        BaseCarbon::setTestNow($testNow);
        BaseCarbonImmutable::setTestNow($testNow);
    }

    /**
     * Create a Carbon instance from a given ordered UUID or ULID.
<<<<<<< HEAD
     *
     * @param  \Ramsey\Uuid\Uuid|\Symfony\Component\Uid\Ulid|string  $id
     * @return \Illuminate\Support\Carbon
     */
    public static function createFromId($id)
=======
     */
    public static function createFromId(Uuid|Ulid|string $id): static
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        if (is_string($id)) {
            $id = Ulid::isValid($id) ? Ulid::fromString($id) : Uuid::fromString($id);
        }

        return static::createFromInterface($id->getDateTime());
    }
<<<<<<< HEAD

    /**
     * Dump the instance and end the script.
     *
     * @param  mixed  ...$args
     * @return never
     */
    public function dd(...$args)
    {
        dd($this, ...$args);
    }

    /**
     * Dump the instance.
     *
     * @return $this
     */
    public function dump()
    {
        dump($this);

        return $this;
    }
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
}
