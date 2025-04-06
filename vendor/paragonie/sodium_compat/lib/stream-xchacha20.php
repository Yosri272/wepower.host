<?php
<<<<<<< HEAD
=======
declare(strict_types=1);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

if (!is_callable('sodium_crypto_stream_xchacha20')) {
    /**
     * @see ParagonIE_Sodium_Compat::crypto_stream_xchacha20()
     * @param int $len
     * @param string $nonce
     * @param string $key
     * @return string
     * @throws SodiumException
     * @throws TypeError
     */
    function sodium_crypto_stream_xchacha20(
<<<<<<< HEAD
        $len,
        $nonce,
        #[\SensitiveParameter]
        $key
    ) {
=======
        int $len,
        string $nonce,
        #[\SensitiveParameter]
        string $key
    ): string {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        return ParagonIE_Sodium_Compat::crypto_stream_xchacha20($len, $nonce, $key, true);
    }
}
if (!is_callable('sodium_crypto_stream_xchacha20_keygen')) {
    /**
     * @see ParagonIE_Sodium_Compat::crypto_stream_xchacha20_keygen()
     * @return string
     * @throws Exception
     */
<<<<<<< HEAD
    function sodium_crypto_stream_xchacha20_keygen()
=======
    function sodium_crypto_stream_xchacha20_keygen(): string
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return ParagonIE_Sodium_Compat::crypto_stream_xchacha20_keygen();
    }
}
if (!is_callable('sodium_crypto_stream_xchacha20_xor')) {
    /**
     * @see ParagonIE_Sodium_Compat::crypto_stream_xchacha20_xor()
     * @param string $message
     * @param string $nonce
     * @param string $key
     * @return string
     * @throws SodiumException
     * @throws TypeError
     */
    function sodium_crypto_stream_xchacha20_xor(
        #[\SensitiveParameter]
<<<<<<< HEAD
        $message,
        $nonce,
        #[\SensitiveParameter]
        $key
    ) {
=======
        string $message,
        string $nonce,
        #[\SensitiveParameter]
        string $key
    ): string {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        return ParagonIE_Sodium_Compat::crypto_stream_xchacha20_xor($message, $nonce, $key, true);
    }
}
if (!is_callable('sodium_crypto_stream_xchacha20_xor_ic')) {
    /**
     * @see ParagonIE_Sodium_Compat::crypto_stream_xchacha20_xor_ic()
     * @param string $message
     * @param string $nonce
     * @param int $counter
     * @param string $key
     * @return string
     * @throws SodiumException
     * @throws TypeError
     */
    function sodium_crypto_stream_xchacha20_xor_ic(
        #[\SensitiveParameter]
<<<<<<< HEAD
        $message,
        $nonce,
        $counter,
        #[\SensitiveParameter]
        $key
    ) {
=======
        string $message,
        string $nonce,
        int $counter,
        #[\SensitiveParameter]
        string $key
    ): string {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        return ParagonIE_Sodium_Compat::crypto_stream_xchacha20_xor_ic($message, $nonce, $counter, $key, true);
    }
}
