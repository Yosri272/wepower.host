<?php
<<<<<<< HEAD
=======
declare(strict_types=1);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

if (class_exists('ParagonIE_Sodium_Core_Curve25519_Ge_Precomp', false)) {
    return;
}

/**
 * Class ParagonIE_Sodium_Core_Curve25519_Ge_Precomp
 */
class ParagonIE_Sodium_Core_Curve25519_Ge_Precomp
{
<<<<<<< HEAD
    /**
     * @var ParagonIE_Sodium_Core_Curve25519_Fe
     */
    public $yplusx;

    /**
     * @var ParagonIE_Sodium_Core_Curve25519_Fe
     */
    public $yminusx;

    /**
     * @var ParagonIE_Sodium_Core_Curve25519_Fe
     */
    public $xy2d;
=======
    public ParagonIE_Sodium_Core_Curve25519_Fe $yplusx;
    public ParagonIE_Sodium_Core_Curve25519_Fe $yminusx;
    public ParagonIE_Sodium_Core_Curve25519_Fe $xy2d;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    /**
     * ParagonIE_Sodium_Core_Curve25519_Ge_Precomp constructor.
     *
     * @internal You should not use this directly from another application
     *
<<<<<<< HEAD
     * @param ParagonIE_Sodium_Core_Curve25519_Fe $yplusx
     * @param ParagonIE_Sodium_Core_Curve25519_Fe $yminusx
     * @param ParagonIE_Sodium_Core_Curve25519_Fe $xy2d
     */
    public function __construct(
        $yplusx = null,
        $yminusx = null,
        $xy2d = null
=======
     * @param ?ParagonIE_Sodium_Core_Curve25519_Fe $yplusx
     * @param ?ParagonIE_Sodium_Core_Curve25519_Fe $yminusx
     * @param ?ParagonIE_Sodium_Core_Curve25519_Fe $xy2d
     */
    public function __construct(
        ?ParagonIE_Sodium_Core_Curve25519_Fe $yplusx = null,
        ?ParagonIE_Sodium_Core_Curve25519_Fe $yminusx = null,
        ?ParagonIE_Sodium_Core_Curve25519_Fe $xy2d = null
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    ) {
        if ($yplusx === null) {
            $yplusx = new ParagonIE_Sodium_Core_Curve25519_Fe();
        }
<<<<<<< HEAD
        if (!($yplusx instanceof ParagonIE_Sodium_Core_Curve25519_Fe)) {
            throw new TypeError('Argument 1 must be an instance of ParagonIE_Sodium_Core_Curve25519_Fe');
        }
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        $this->yplusx = $yplusx;
        if ($yminusx === null) {
            $yminusx = new ParagonIE_Sodium_Core_Curve25519_Fe();
        }
<<<<<<< HEAD
        if (!($yminusx instanceof ParagonIE_Sodium_Core_Curve25519_Fe)) {
            throw new TypeError('Argument 2 must be an instance of ParagonIE_Sodium_Core_Curve25519_Fe');
        }
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        $this->yminusx = $yminusx;
        if ($xy2d === null) {
            $xy2d = new ParagonIE_Sodium_Core_Curve25519_Fe();
        }
<<<<<<< HEAD
        if (!($xy2d instanceof ParagonIE_Sodium_Core_Curve25519_Fe)) {
            throw new TypeError('Argument 3 must be an instance of ParagonIE_Sodium_Core_Curve25519_Fe');
        }
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        $this->xy2d = $xy2d;
    }
}
