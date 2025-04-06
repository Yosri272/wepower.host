<?php

namespace Vonage\Messages\Channel\Viber;

use Vonage\Messages\MessageObjects\FileObject;
use Vonage\Messages\Channel\BaseMessage;

class ViberFile extends BaseMessage
{
    use ViberServiceObjectTrait;

    protected string $channel = 'viber_service';
    protected string $subType = BaseMessage::MESSAGES_SUBTYPE_FILE;
<<<<<<< HEAD
=======
    protected bool $validatesE164 = true;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    public function __construct(
        string $to,
        string $from,
        protected FileObject $fileObject
    ) {
        $this->to = $to;
        $this->from = $from;
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
        $returnArray['file'] = $this->fileObject->toArray();

        if ($this->requiresViberServiceObject()) {
            $this->getCategory() ? $returnArray['viber_service']['category'] = $this->getCategory() : null;
            $this->getTtl() ? $returnArray['viber_service']['ttl'] = $this->getTtl() : null;
            $this->getType() ? $returnArray['viber_service']['type'] = $this->getType() : null;
        }

        return $returnArray;
    }
}
