<?php

declare(strict_types=1);

namespace Vonage\Application;

class VbcConfig
{
<<<<<<< HEAD
    /**
     * @var bool
     */
    protected $enabled = false;
=======
    protected bool $enabled = false;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    public function enable(): void
    {
        $this->enabled = true;
    }

    public function disable(): void
    {
        $this->enabled = false;
    }

    public function isEnabled(): bool
    {
        return $this->enabled;
    }
}
