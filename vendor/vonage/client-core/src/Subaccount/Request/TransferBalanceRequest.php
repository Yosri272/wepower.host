<?php

namespace Vonage\Subaccount\Request;

use Vonage\Entity\Hydrator\ArrayHydrateInterface;

class TransferBalanceRequest implements ArrayHydrateInterface
{
    private string $from;
    private string $to;
    private string $amount;
    private string $reference;

    public function __construct(protected string $apiKey)
    {
    }
    public function getFrom(): string
    {
        return $this->from;
    }

    public function setFrom(string $from): self
    {
        $this->from = $from;

<<<<<<< HEAD
        return $this; 
=======
        return $this;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function getTo(): string
    {
        return $this->to;
    }

    public function setTo(string $to): self
    {
        $this->to = $to;

<<<<<<< HEAD
        return $this; 
=======
        return $this;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function getAmount(): string
    {
        return $this->amount;
    }

    public function setAmount(string $amount): self
    {
        $this->amount = $amount;

<<<<<<< HEAD
        return $this; 
=======
        return $this;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function getReference(): string
    {
        return $this->reference;
    }

    public function setReference(string $reference): self
    {
        $this->reference = $reference;

<<<<<<< HEAD
        return $this; 
=======
        return $this;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function getApiKey(): string
    {
        return $this->apiKey;
    }

    public function setApiKey(string $apiKey): self
    {
        $this->apiKey = $apiKey;

<<<<<<< HEAD
        return $this; 
=======
        return $this;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function fromArray(array $data): static
    {
        $this->from = $data['from'];
        $this->to = $data['to'];
        $this->amount = $data['amount'];
        $this->reference = $data['reference'];

        return $this;
    }

    public function toArray(): array
    {
        return [
            'from' => $this->getFrom(),
            'to' => $this->getTo(),
            'amount' => (float)$this->getAmount(),
            'reference' => $this->getReference()
        ];
    }
}
