<?php

declare(strict_types=1);

namespace Vonage\Entity\Hydrator;

interface HydratorInterface
{
    /**
     * Hydrate an object that the hydrator creates
     */
    public function hydrate(array $data);

    /**
     * Hydrate an existing object created outside of the hydrator
<<<<<<< HEAD
     *
     * @param $object
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function hydrateObject(array $data, $object);
}
