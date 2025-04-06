<?php

namespace Vonage\Messages\Channel\WhatsApp;

use Vonage\Messages\MessageObjects\FileObject;
use Vonage\Messages\Channel\BaseMessage;
use Vonage\Messages\MessageTraits\ContextTrait;

class WhatsAppFile extends BaseMessage
{
    use ContextTrait;

    protected string $channel = 'whatsapp';
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
<<<<<<< HEAD

        if (!is_null($this->context)) {
            $returnArray['context'] = $this->context;
        }

        return $returnArray;
    }
}
=======
        $returnArray['context'] = $this->context ?? null;

        return $returnArray;
    }
}
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
