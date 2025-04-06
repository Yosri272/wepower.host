<?php

namespace Beste\Cache;

/**
 * @internal
 */
final class CacheKey
{
    private function __construct(private readonly string $value) {}

    public static function fromString(string $value): self
    {
<<<<<<< HEAD
        if (preg_match('/^[a-zA-Z0-9_.]{1,64}$/u', $value) !== 1) {
=======
        if (preg_match('/^[a-zA-Z0-9_.-]+$/u', $value) !== 1) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            throw InvalidArgument::invalidKey();
        }

        return new self($value);
    }

    public function toString(): string
    {
        return $this->value;
    }
}
