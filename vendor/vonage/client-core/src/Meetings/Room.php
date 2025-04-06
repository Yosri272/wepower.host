<?php

namespace Vonage\Meetings;

use Vonage\Entity\Hydrator\ArrayHydrateInterface;

class Room implements ArrayHydrateInterface
{
    protected array $data;

    public function fromArray(array $data): static
    {
        if (!isset($data['display_name'])) {
            throw new \InvalidArgumentException('A room object must contain a display_name');
        }

        $this->data = $data;

        return $this;
    }

    public function toArray(): array
    {
<<<<<<< HEAD
        return array_filter($this->data, static fn($value) => $value !== '');
=======
        return array_filter($this->data, static fn ($value) => $value !== '');
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function __get($value)
    {
        return $this->data[$value];
    }
}
