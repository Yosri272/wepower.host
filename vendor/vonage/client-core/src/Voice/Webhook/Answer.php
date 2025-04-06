<?php

declare(strict_types=1);

namespace Vonage\Voice\Webhook;

class Answer
{
<<<<<<< HEAD
    /**
     * @var string
     */
    protected $conversationUuid;

    /**
     * @var string
     */
    protected $from;

    /**
     * @var string
     */
    protected $to;

    /**
     * @var string
     */
    protected $uuid;
=======
    protected ?string $conversationUuid = null;

    protected ?string $from = null;

    protected ?string $to = null;

    protected ?string $uuid = null;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    public function __construct(array $event)
    {
        $this->from = $event['from'];
        $this->to = $event['to'];
        $this->uuid = $event['uuid'] ?? $event['call_uuid'];
        $this->conversationUuid = $event['conversation_uuid'];
    }

    public function getConversationUuid(): string
    {
        return $this->conversationUuid;
    }

    public function getFrom(): string
    {
        return $this->from;
    }

    public function getTo(): string
    {
        return $this->to;
    }

    public function getUuid(): string
    {
        return $this->uuid;
    }
}
