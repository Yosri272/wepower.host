<?php

declare(strict_types=1);

namespace Vonage\Voice\Endpoint;

use JsonSerializable;

interface EndpointInterface extends JsonSerializable
{
<<<<<<< HEAD

=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function getId(): string;

    /**
     * @return array<string, array>
     */
    public function toArray(): array;
}
