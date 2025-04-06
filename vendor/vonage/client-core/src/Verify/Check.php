<?php

declare(strict_types=1);

namespace Vonage\Verify;

use DateTime;
use Exception;

class Check
{
    /**
     * Possible status of checking a code.
     */
    public const VALID = 'VALID';
    public const INVALID = 'INVALID';

    public function __construct(protected array $data)
    {
    }

<<<<<<< HEAD
    public function getCode()
=======
    public function getCode(): mixed
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->data['code'];
    }

    /**
     * @throws Exception
     */
    public function getDate(): DateTime
    {
        return new DateTime($this->data['date_received']);
    }

    public function getStatus()
    {
        return $this->data['status'];
    }

    public function getIpAddress()
    {
        return $this->data['ip_address'];
    }
}
