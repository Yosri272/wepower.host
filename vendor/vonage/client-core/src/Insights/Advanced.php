<?php

declare(strict_types=1);

namespace Vonage\Insights;

class Advanced extends Standard
{
<<<<<<< HEAD

    public function getValidNumber()
=======
    public function getValidNumber(): mixed
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->data['valid_number'];
    }

<<<<<<< HEAD
    public function getReachable()
=======
    public function getReachable(): mixed
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->data['reachable'];
    }
}
