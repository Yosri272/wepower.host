<?php
<<<<<<< HEAD
=======
declare(strict_types=1);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

if (class_exists('ParagonIE_Sodium_Core_Poly1305', false)) {
    return;
}

/**
 * Class ParagonIE_Sodium_Core_Poly1305
 */
abstract class ParagonIE_Sodium_Core_Poly1305 extends ParagonIE_Sodium_Core_Util
{
    const BLOCK_SIZE = 16;

    /**
     * @internal You should not use this directly from another application
     *
     * @param string $m
     * @param string $key
     * @return string
     * @throws SodiumException
     * @throws TypeError
     */
<<<<<<< HEAD
    public static function onetimeauth($m, $key)
    {
=======
    public static function onetimeauth(
        string $m,
        #[SensitiveParameter]
        string $key
    ): string {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        if (self::strlen($key) < 32) {
            throw new InvalidArgumentException(
                'Key must be 32 bytes long.'
            );
        }
        $state = new ParagonIE_Sodium_Core_Poly1305_State(
            self::substr($key, 0, 32)
        );
        return $state
            ->update($m)
            ->finish();
    }

    /**
     * @internal You should not use this directly from another application
     *
     * @param string $mac
     * @param string $m
     * @param string $key
     * @return bool
     * @throws SodiumException
     * @throws TypeError
     */
<<<<<<< HEAD
    public static function onetimeauth_verify($mac, $m, $key)
    {
=======
    public static function onetimeauth_verify(
        string $mac,
        string $m,
        #[SensitiveParameter]
        string $key
    ): bool {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        if (self::strlen($key) < 32) {
            throw new InvalidArgumentException(
                'Key must be 32 bytes long.'
            );
        }
        $state = new ParagonIE_Sodium_Core_Poly1305_State(
            self::substr($key, 0, 32)
        );
        $calc = $state
            ->update($m)
            ->finish();
        return self::verify_16($calc, $mac);
    }
}
