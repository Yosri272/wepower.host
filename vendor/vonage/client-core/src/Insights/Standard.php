<?php

declare(strict_types=1);

namespace Vonage\Insights;

class Standard extends Basic
{
<<<<<<< HEAD

    public function getCurrentCarrier()
=======
    public function getCurrentCarrier(): mixed
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->data['current_carrier'];
    }

<<<<<<< HEAD
    public function getOriginalCarrier()
=======
    public function getOriginalCarrier(): mixed
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->data['original_carrier'];
    }

<<<<<<< HEAD
    public function getPorted()
=======
    public function getPorted(): mixed
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->data['ported'];
    }

<<<<<<< HEAD
    public function getRefundPrice()
=======
    public function getRefundPrice(): mixed
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->data['refund_price'];
    }

<<<<<<< HEAD
    public function getRequestPrice()
=======
    public function getRequestPrice(): mixed
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->data['request_price'];
    }

<<<<<<< HEAD
    public function getRemainingBalance()
=======
    public function getRemainingBalance(): mixed
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->data['remaining_balance'];
    }

<<<<<<< HEAD
    public function getRoaming()
=======
    public function getRoaming(): mixed
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->data['roaming'];
    }
}
