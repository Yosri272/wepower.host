<?php

declare(strict_types=1);

namespace Vonage\Entity\Hydrator;

class ConstructorHydrator implements HydratorInterface
{
<<<<<<< HEAD
    /**
     * Class to create
     * @var string
     */
    protected $prototype;

    public function hydrate(array $data)
=======
    protected string $prototype;

    public function hydrate(array $data): mixed
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $className = $this->prototype;
        return new $className($data);
    }

<<<<<<< HEAD
    /**
     * @param $object
     */
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function hydrateObject(array $data, $object): never
    {
        throw new \RuntimeException('Constructor Hydration can not happen on an existing object');
    }

    public function setPrototype(string $prototype): void
    {
        $this->prototype = $prototype;
    }
}
