<?php

declare(strict_types=1);

namespace Vonage\Entity\Hydrator;

class ArrayHydrator implements HydratorInterface
{
<<<<<<< HEAD
    /**
     * @var ArrayHydrateInterface
     */
    protected $prototype;
=======
    protected ArrayHydrateInterface $prototype;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    public function hydrate(array $data): ArrayHydrateInterface
    {
        $object = clone $this->prototype;
        $object->fromArray($data);

        return $object;
    }

<<<<<<< HEAD
    /**
     * @param $object
     */
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function hydrateObject(array $data, $object)
    {
        $object->fromArray($data);

        return $object;
    }

    public function setPrototype(ArrayHydrateInterface $prototype): void
    {
        $this->prototype = $prototype;
    }
}
