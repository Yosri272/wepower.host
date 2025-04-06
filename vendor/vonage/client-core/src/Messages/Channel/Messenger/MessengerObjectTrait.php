<?php

namespace Vonage\Messages\Channel\Messenger;

trait MessengerObjectTrait
{
    private ?string $category;
    private ?string $tag;

<<<<<<< HEAD
    /**
     * @return string
     */
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function getCategory(): ?string
    {
        return $this->category;
    }

<<<<<<< HEAD

=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function requiresMessengerObject(): bool
    {
        return $this->getTag() || $this->getCategory();
    }

    public function setCategory(string $category): void
    {
        $this->category = $category;
    }

<<<<<<< HEAD
    /**
     * @return string
     */
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function getTag(): ?string
    {
        return $this->tag;
    }

    public function setTag(string $tag): void
    {
        $this->tag = $tag;
    }

    public function getMessengerObject(): array
    {
        $messengerObject = [
            'category' => $this->getCategory(),
        ];

        if ($this->getTag()) {
            $messengerObject['tag'] = $this->getTag();
        }

        return $messengerObject;
    }
}
