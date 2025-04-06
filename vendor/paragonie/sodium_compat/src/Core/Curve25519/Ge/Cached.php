<?php
<<<<<<< HEAD

=======
declare(strict_types=1);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

if (class_exists('ParagonIE_Sodium_Core_Curve25519_Ge_Cached', false)) {
    return;
}
/**
 * Class ParagonIE_Sodium_Core_Curve25519_Ge_Cached
 */
class ParagonIE_Sodium_Core_Curve25519_Ge_Cached
{
<<<<<<< HEAD
    /**
     * @var ParagonIE_Sodium_Core_Curve25519_Fe
     */
    public $YplusX;

    /**
     * @var ParagonIE_Sodium_Core_Curve25519_Fe
     */
    public $YminusX;

    /**
     * @var ParagonIE_Sodium_Core_Curve25519_Fe
     */
    public $Z;

    /**
     * @var ParagonIE_Sodium_Core_Curve25519_Fe
     */
    public $T2d;
=======
    public ParagonIE_Sodium_Core_Curve25519_Fe $YplusX;
    public ParagonIE_Sodium_Core_Curve25519_Fe $YminusX;
    public ParagonIE_Sodium_Core_Curve25519_Fe $Z;
    public ParagonIE_Sodium_Core_Curve25519_Fe $T2d;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    /**
     * ParagonIE_Sodium_Core_Curve25519_Ge_Cached constructor.
     *
     * @internal You should not use this directly from another application
     *
<<<<<<< HEAD
     * @param ParagonIE_Sodium_Core_Curve25519_Fe|null $YplusX
     * @param ParagonIE_Sodium_Core_Curve25519_Fe|null $YminusX
     * @param ParagonIE_Sodium_Core_Curve25519_Fe|null $Z
     * @param ParagonIE_Sodium_Core_Curve25519_Fe|null $T2d
     */
    public function __construct(
        $YplusX = null,
        $YminusX = null,
        $Z = null,
        $T2d = null
=======
     * @param ?ParagonIE_Sodium_Core_Curve25519_Fe $YplusX
     * @param ?ParagonIE_Sodium_Core_Curve25519_Fe $YminusX
     * @param ?ParagonIE_Sodium_Core_Curve25519_Fe $Z
     * @param ?ParagonIE_Sodium_Core_Curve25519_Fe $T2d
     */
    public function __construct(
        ?ParagonIE_Sodium_Core_Curve25519_Fe $YplusX = null,
        ?ParagonIE_Sodium_Core_Curve25519_Fe $YminusX = null,
        ?ParagonIE_Sodium_Core_Curve25519_Fe $Z = null,
        ?ParagonIE_Sodium_Core_Curve25519_Fe $T2d = null
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    ) {
        if ($YplusX === null) {
            $YplusX = new ParagonIE_Sodium_Core_Curve25519_Fe();
        }
<<<<<<< HEAD
        if (!($YplusX instanceof ParagonIE_Sodium_Core_Curve25519_Fe)) {
            throw new TypeError('Argument 1 must be an instance of ParagonIE_Sodium_Core_Curve25519_Fe');
        }
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        $this->YplusX = $YplusX;
        if ($YminusX === null) {
            $YminusX = new ParagonIE_Sodium_Core_Curve25519_Fe();
        }
<<<<<<< HEAD
        if (!($YminusX instanceof ParagonIE_Sodium_Core_Curve25519_Fe)) {
            throw new TypeError('Argument 2 must be an instance of ParagonIE_Sodium_Core_Curve25519_Fe');
        }
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        $this->YminusX = $YminusX;
        if ($Z === null) {
            $Z = new ParagonIE_Sodium_Core_Curve25519_Fe();
        }
<<<<<<< HEAD
        if (!($Z instanceof ParagonIE_Sodium_Core_Curve25519_Fe)) {
            throw new TypeError('Argument 3 must be an instance of ParagonIE_Sodium_Core_Curve25519_Fe');
        }
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        $this->Z = $Z;
        if ($T2d === null) {
            $T2d = new ParagonIE_Sodium_Core_Curve25519_Fe();
        }
<<<<<<< HEAD
        if (!($T2d instanceof ParagonIE_Sodium_Core_Curve25519_Fe)) {
            throw new TypeError('Argument 4 must be an instance of ParagonIE_Sodium_Core_Curve25519_Fe');
        }
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        $this->T2d = $T2d;
    }
}
