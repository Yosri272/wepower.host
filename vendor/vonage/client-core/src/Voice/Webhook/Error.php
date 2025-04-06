<?php

declare(strict_types=1);

namespace Vonage\Voice\Webhook;

use DateTimeImmutable;
use Exception;

class Error
{
<<<<<<< HEAD
    /**
     * @var string
     */
    protected $conversationUuid;

    /**
     * @var string
     */
    protected $reason;

    /**
     * @var DateTimeImmutable
     */
    protected $timestamp;
=======
    protected ?string $conversationUuid = null;

    protected ?string $reason = null;

    protected ?DateTimeImmutable $timestamp = null;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    /**
     * @throws Exception
     */
    public function __construct(array $event)
    {
        $this->conversationUuid = $event['conversation_uuid'];
        $this->reason = $event['reason'];
        $this->timestamp = new DateTimeImmutable($event['timestamp']);
    }

    public function getConversationUuid(): string
    {
        return $this->conversationUuid;
    }

    public function getReason(): string
    {
        return $this->reason;
    }

    public function getTimestamp(): DateTimeImmutable
    {
        return $this->timestamp;
    }
}
