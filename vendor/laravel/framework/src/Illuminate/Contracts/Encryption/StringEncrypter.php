<?php

namespace Illuminate\Contracts\Encryption;

interface StringEncrypter
{
    /**
     * Encrypt a string without serialization.
     *
     * @param  string  $value
     * @return string
     *
     * @throws \Illuminate\Contracts\Encryption\EncryptException
     */
<<<<<<< HEAD
    public function encryptString($value);
=======
    public function encryptString(#[\SensitiveParameter] $value);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    /**
     * Decrypt the given string without unserialization.
     *
     * @param  string  $payload
     * @return string
     *
     * @throws \Illuminate\Contracts\Encryption\DecryptException
     */
    public function decryptString($payload);
}
