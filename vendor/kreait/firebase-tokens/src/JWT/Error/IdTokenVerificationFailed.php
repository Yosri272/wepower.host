<?php

declare(strict_types=1);

namespace Kreait\Firebase\JWT\Error;

use RuntimeException;

use const PHP_EOL;

final class IdTokenVerificationFailed extends RuntimeException
{
    /**
     * @param array<non-empty-string> $reasons
     */
    public static function withTokenAndReasons(string $token, array $reasons): self
    {
        if (mb_strlen($token) > 18) {
<<<<<<< HEAD
            $token = mb_substr($token, 0, 15) . '...';
        }

        $summary = implode(PHP_EOL . '- ', $reasons);

        $message = "The value '{$token}' is not a verified ID token:" . PHP_EOL . '- ' . $summary . PHP_EOL;
=======
            $token = mb_substr($token, 0, 15).'...';
        }

        $summary = implode(PHP_EOL.'- ', $reasons);

        $message = "The value '{$token}' is not a verified ID token:".PHP_EOL.'- '.$summary.PHP_EOL;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        return new self($message);
    }
}
