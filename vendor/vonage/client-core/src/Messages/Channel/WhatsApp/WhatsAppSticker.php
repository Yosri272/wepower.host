<?php

namespace Vonage\Messages\Channel\WhatsApp;

use Vonage\Messages\Channel\BaseMessage;
use Vonage\Messages\Channel\WhatsApp\MessageObjects\StickerObject;
use Vonage\Messages\MessageTraits\ContextTrait;

class WhatsAppSticker extends BaseMessage
{
    use ContextTrait;

    protected string $subType = BaseMessage::MESSAGES_SUBTYPE_STICKER;
    protected string $channel = 'whatsapp';
<<<<<<< HEAD
=======
    protected bool $validatesE164 = true;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    public function __construct(
        string $to,
        string $from,
        protected StickerObject $sticker
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
    public function getSticker(): StickerObject
    {
        return $this->sticker;
    }

    public function setSticker(StickerObject $sticker): static
    {
        $this->sticker = $sticker;

        return $this;
    }

    public function toArray(): array
    {
        $returnArray = $this->getBaseMessageUniversalOutputArray();
        $returnArray['sticker'] = $this->getSticker()->toArray();
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
