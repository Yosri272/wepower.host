<?php

namespace Vonage\Messages\Channel\WhatsApp;

use Vonage\Messages\MessageTraits\ContextTrait;
use Vonage\Messages\MessageTraits\TextTrait;
use Vonage\Messages\Channel\BaseMessage;

class WhatsAppText extends BaseMessage
{
    use ContextTrait;
    use TextTrait;

    protected string $subType = BaseMessage::MESSAGES_SUBTYPE_TEXT;
    protected string $channel = 'whatsapp';
<<<<<<< HEAD
=======
    protected bool $validatesE164 = true;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    public function __construct(
        string $to,
        string $from,
        string $text
    ) {
        $this->to = $to;
        $this->from = $from;
        $this->text = $text;
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
<<<<<<< HEAD

        if (!is_null($this->context)) {
            $returnArray['context'] = $this->context;
        }
=======
        $returnArray['context'] = $this->context ?? null;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        return $returnArray;
    }
}
