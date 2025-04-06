<?php

namespace Vonage\Messages\Channel\Viber;

use Vonage\Messages\MessageObjects\VideoObject;
use Vonage\Messages\MessageTraits\TextTrait;
use Vonage\Messages\Channel\BaseMessage;

class ViberVideo extends BaseMessage
{
    use TextTrait;
    use ViberServiceObjectTrait;

    protected string $subType = BaseMessage::MESSAGES_SUBTYPE_VIDEO;
    protected string $channel = 'viber_service';
<<<<<<< HEAD
=======
    protected bool $validatesE164 = true;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    public function __construct(
        string $to,
        string $from,
        protected string $thumbUrl,
        protected VideoObject $videoObject,
        string $duration,
        string $fileSize
    ) {
        $this->fileSize = $fileSize;
        $this->duration = $duration;
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
        $videoArray = $this->videoObject->toArray();
        $videoArray['thumb_url'] = $this->thumbUrl;
        $returnArray['video'] = $videoArray;

        $returnArray['viber_service']['duration'] = $this->getDuration();
        $returnArray['viber_service']['file_size'] = $this->getFileSize();

        $this->getCategory() ? $returnArray['viber_service']['category'] = $this->getCategory() : null;
        $this->getTtl() ? $returnArray['viber_service']['ttl'] = $this->getTtl() : null;
        $this->getType() ? $returnArray['viber_service']['type'] = $this->getType() : null;
        $this->getAction() ? $returnArray['viber_service']['action'] = $this->getAction()->toArray() : null;

        return $returnArray;
    }
}
