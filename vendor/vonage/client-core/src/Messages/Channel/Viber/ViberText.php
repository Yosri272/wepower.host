<?php

namespace Vonage\Messages\Channel\Viber;

use Vonage\Messages\Channel\Viber\MessageObjects\ViberActionObject;
use Vonage\Messages\MessageTraits\TextTrait;
use Vonage\Messages\Channel\BaseMessage;

class ViberText extends BaseMessage
{
    use TextTrait;
    use ViberServiceObjectTrait;

    protected string $subType = BaseMessage::MESSAGES_SUBTYPE_TEXT;
    protected string $channel = 'viber_service';
<<<<<<< HEAD
=======
    protected bool $validatesE164 = true;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    public function __construct(
        string $to,
        string $from,
        string $message,
        ?string $category = null,
        ?int $ttl = null,
        ?string $type = null,
        ?ViberActionObject $viberActionObject = null,
    ) {
        $this->to = $to;
        $this->from = $from;
        $this->text = $message;
        $this->category = $category;
        $this->ttl = $ttl;
        $this->type = $type;
        $this->action = $viberActionObject;
    }

<<<<<<< HEAD
=======
    public function validatesE164(): bool
    {
        return $this->validatesE164;
    }

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function toArray(): array
    {
        $returnArray = $this->getBaseMessageUniversalOutputArray();
        $returnArray['text'] = $this->getText();

        if ($this->requiresViberServiceObject()) {
<<<<<<< HEAD
            $this->getCategory() ? $returnArray['viber_service']['category'] = $this->getCategory(): null;
            $this->getTtl() ? $returnArray['viber_service']['ttl'] = $this->getTtl(): null;
            $this->getType() ? $returnArray['viber_service']['type'] = $this->getType(): null;
            $this->getAction() ? $returnArray['viber_service']['action'] = $this->getAction()->toArray(): null;
=======
            $this->getCategory() ? $returnArray['viber_service']['category'] = $this->getCategory() : null;
            $this->getTtl() ? $returnArray['viber_service']['ttl'] = $this->getTtl() : null;
            $this->getType() ? $returnArray['viber_service']['type'] = $this->getType() : null;
            $this->getAction() ? $returnArray['viber_service']['action'] = $this->getAction()->toArray() : null;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        }

        return array_filter($returnArray);
    }
}
