<?php

declare(strict_types=1);

namespace Vonage\Account;

use Vonage\Entity\Hydrator\ArrayHydrateInterface;

class Balance implements
    ArrayHydrateInterface
{
<<<<<<< HEAD
    /**
     * @var array
     */
    protected array $data;

    public function __construct($balance, $autoReload)
=======
    protected array $data;

    public function __construct(float $balance, bool $autoReload)
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $this->data['balance'] = $balance;
        $this->data['auto_reload'] = $autoReload;
    }

<<<<<<< HEAD
    public function getBalance()
=======
    public function getBalance(): float
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->data['balance'];
    }

<<<<<<< HEAD
    public function getAutoReload()
=======
    public function getAutoReload(): bool
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->data['auto_reload'];
    }

    public function fromArray(array $data): void
    {
        $this->data = [
            'balance' => $data['value'],
            'auto_reload' => $data['autoReload']
        ];
    }

    public function toArray(): array
    {
        return $this->data;
    }
}
