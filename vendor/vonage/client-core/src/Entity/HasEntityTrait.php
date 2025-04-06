<?php

declare(strict_types=1);

namespace Vonage\Entity;

trait HasEntityTrait
{
    protected $entity;

<<<<<<< HEAD
    /**
     * @param $entity
     */
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function setEntity($entity): void
    {
        $this->entity = $entity;
    }

    public function getEntity()
    {
        return $this->entity;
    }
}
