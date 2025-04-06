<?php
<<<<<<< HEAD
=======
declare(strict_types=1);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

if (class_exists('ParagonIE_Sodium_Core_Curve25519_Ge_P1p1', false)) {
    return;
}
/**
 * Class ParagonIE_Sodium_Core_Curve25519_Ge_P1p1
 */
class ParagonIE_Sodium_Core_Curve25519_Ge_P1p1
{
<<<<<<< HEAD
    /**
     * @var ParagonIE_Sodium_Core_Curve25519_Fe
     */
    public $X;

    /**
     * @var ParagonIE_Sodium_Core_Curve25519_Fe
     */
    public $Y;

    /**
     * @var ParagonIE_Sodium_Core_Curve25519_Fe
     */
    public $Z;

    /**
     * @var ParagonIE_Sodium_Core_Curve25519_Fe
     */
    public $T;
=======
    public ParagonIE_Sodium_Core_Curve25519_Fe $X;
    public ParagonIE_Sodium_Core_Curve25519_Fe $Y;
    public ParagonIE_Sodium_Core_Curve25519_Fe $Z;
    public ParagonIE_Sodium_Core_Curve25519_Fe $T;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    /**
     * ParagonIE_Sodium_Core_Curve25519_Ge_P1p1 constructor.
     *
     * @internal You should not use this directly from another application
     *
<<<<<<< HEAD
     * @param ParagonIE_Sodium_Core_Curve25519_Fe|null $x
     * @param ParagonIE_Sodium_Core_Curve25519_Fe|null $y
     * @param ParagonIE_Sodium_Core_Curve25519_Fe|null $z
     * @param ParagonIE_Sodium_Core_Curve25519_Fe|null $t
     */
    public function __construct(
        $x = null,
        $y = null,
        $z = null,
        $t = null
=======
     * @param ?ParagonIE_Sodium_Core_Curve25519_Fe $x
     * @param ?ParagonIE_Sodium_Core_Curve25519_Fe $y
     * @param ?ParagonIE_Sodium_Core_Curve25519_Fe $z
     * @param ?ParagonIE_Sodium_Core_Curve25519_Fe $t
     */
    public function __construct(
        ?ParagonIE_Sodium_Core_Curve25519_Fe $x = null,
        ?ParagonIE_Sodium_Core_Curve25519_Fe $y = null,
        ?ParagonIE_Sodium_Core_Curve25519_Fe $z = null,
        ?ParagonIE_Sodium_Core_Curve25519_Fe $t = null
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    ) {
        if ($x === null) {
            $x = new ParagonIE_Sodium_Core_Curve25519_Fe();
        }
<<<<<<< HEAD
        if (!($x instanceof ParagonIE_Sodium_Core_Curve25519_Fe)) {
            throw new TypeError('Argument 1 must be an instance of ParagonIE_Sodium_Core_Curve25519_Fe');
        }
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        $this->X = $x;
        if ($y === null) {
            $y = new ParagonIE_Sodium_Core_Curve25519_Fe();
        }
<<<<<<< HEAD
        if (!($y instanceof ParagonIE_Sodium_Core_Curve25519_Fe)) {
            throw new TypeError('Argument 2 must be an instance of ParagonIE_Sodium_Core_Curve25519_Fe');
        }
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        $this->Y = $y;
        if ($z === null) {
            $z = new ParagonIE_Sodium_Core_Curve25519_Fe();
        }
<<<<<<< HEAD
        if (!($z instanceof ParagonIE_Sodium_Core_Curve25519_Fe)) {
            throw new TypeError('Argument 3 must be an instance of ParagonIE_Sodium_Core_Curve25519_Fe');
        }
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        $this->Z = $z;
        if ($t === null) {
            $t = new ParagonIE_Sodium_Core_Curve25519_Fe();
        }
<<<<<<< HEAD
        if (!($t instanceof ParagonIE_Sodium_Core_Curve25519_Fe)) {
            throw new TypeError('Argument 4 must be an instance of ParagonIE_Sodium_Core_Curve25519_Fe');
        }
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        $this->T = $t;
    }
}
