<?php
<<<<<<< HEAD
=======
declare(strict_types=1);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

if (class_exists('ParagonIE_Sodium_Core_XChaCha20', false)) {
    return;
}

/**
 * Class ParagonIE_Sodium_Core_XChaCha20
 */
class ParagonIE_Sodium_Core_XChaCha20 extends ParagonIE_Sodium_Core_HChaCha20
{
    /**
     * @internal You should not use this directly from another application
     *
     * @param int $len
     * @param string $nonce
     * @param string $key
     * @return string
     * @throws SodiumException
     * @throws TypeError
     */
<<<<<<< HEAD
    public static function stream($len = 64, $nonce = '', $key = '')
    {
=======
    public static function stream(
        int $len = 64,
        string $nonce = '',
        #[SensitiveParameter]
        string $key = ''
    ): string {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        if (self::strlen($nonce) !== 24) {
            throw new SodiumException('Nonce must be 24 bytes long');
        }
        return self::encryptBytes(
            new ParagonIE_Sodium_Core_ChaCha20_Ctx(
                self::hChaCha20(
                    self::substr($nonce, 0, 16),
                    $key
                ),
                self::substr($nonce, 16, 8)
            ),
            str_repeat("\x00", $len)
        );
    }

    /**
     * @internal You should not use this directly from another application
     *
     * @param int $len
     * @param string $nonce
     * @param string $key
     * @return string
     * @throws SodiumException
     * @throws TypeError
     */
<<<<<<< HEAD
    public static function ietfStream($len = 64, $nonce = '', $key = '')
    {
=======
    public static function ietfStream(
        int $len = 64,
        string $nonce = '',
        #[SensitiveParameter]
        string $key = ''
    ): string {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        if (self::strlen($nonce) !== 24) {
            throw new SodiumException('Nonce must be 24 bytes long');
        }
        return self::encryptBytes(
            new ParagonIE_Sodium_Core_ChaCha20_IetfCtx(
                self::hChaCha20(
                    self::substr($nonce, 0, 16),
                    $key
                ),
                "\x00\x00\x00\x00" . self::substr($nonce, 16, 8)
            ),
            str_repeat("\x00", $len)
        );
    }

    /**
     * @internal You should not use this directly from another application
     *
     * @param string $message
     * @param string $nonce
     * @param string $key
     * @param string $ic
     * @return string
     * @throws SodiumException
     * @throws TypeError
     */
<<<<<<< HEAD
    public static function streamXorIc($message, $nonce = '', $key = '', $ic = '')
    {
=======
    public static function streamXorIc(
        #[SensitiveParameter]
        string $message,
        string $nonce = '',
        #[SensitiveParameter]
        string $key = '',
        string $ic = ''
    ): string {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        if (self::strlen($nonce) !== 24) {
            throw new SodiumException('Nonce must be 24 bytes long');
        }
        return self::encryptBytes(
            new ParagonIE_Sodium_Core_ChaCha20_Ctx(
                self::hChaCha20(self::substr($nonce, 0, 16), $key),
                self::substr($nonce, 16, 8),
                $ic
            ),
            $message
        );
    }

    /**
     * @internal You should not use this directly from another application
     *
     * @param string $message
     * @param string $nonce
     * @param string $key
     * @param string $ic
     * @return string
     * @throws SodiumException
     * @throws TypeError
     */
<<<<<<< HEAD
    public static function ietfStreamXorIc($message, $nonce = '', $key = '', $ic = '')
    {
=======
    public static function ietfStreamXorIc(
        #[SensitiveParameter]
        string $message,
        string $nonce = '',
        string $key = '',
        string $ic = ''
    ): string {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        if (self::strlen($nonce) !== 24) {
            throw new SodiumException('Nonce must be 24 bytes long');
        }
        return self::encryptBytes(
            new ParagonIE_Sodium_Core_ChaCha20_IetfCtx(
                self::hChaCha20(self::substr($nonce, 0, 16), $key),
                "\x00\x00\x00\x00" . self::substr($nonce, 16, 8),
                $ic
            ),
            $message
        );
    }
}
