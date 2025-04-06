<?php

declare(strict_types=1);

namespace Vonage\Client\Exception;

use Throwable;

class Validation extends Request
{
<<<<<<< HEAD
    public function __construct(string $message = '', int $code = 0, Throwable $previous = null, private readonly array $errors = [])
    {
=======
    public function __construct(
        string $message = '',
        int $code = 0,
        ?Throwable $previous = null,
        private readonly array $errors = []
    ) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        parent::__construct($message, $code, $previous);
    }

    public function getValidationErrors(): array
    {
        return $this->errors;
    }
}
