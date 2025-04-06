<?php

declare(strict_types=1);

namespace Brick\Math\Internal\Calculator;

use Brick\Math\Internal\Calculator;
<<<<<<< HEAD
=======
use Override;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

/**
 * Calculator implementation built around the GMP library.
 *
 * @internal
 *
 * @psalm-immutable
 */
class GmpCalculator extends Calculator
{
<<<<<<< HEAD
=======
    #[Override]
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function add(string $a, string $b) : string
    {
        return \gmp_strval(\gmp_add($a, $b));
    }

<<<<<<< HEAD
=======
    #[Override]
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function sub(string $a, string $b) : string
    {
        return \gmp_strval(\gmp_sub($a, $b));
    }

<<<<<<< HEAD
=======
    #[Override]
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function mul(string $a, string $b) : string
    {
        return \gmp_strval(\gmp_mul($a, $b));
    }

<<<<<<< HEAD
=======
    #[Override]
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function divQ(string $a, string $b) : string
    {
        return \gmp_strval(\gmp_div_q($a, $b));
    }

<<<<<<< HEAD
=======
    #[Override]
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function divR(string $a, string $b) : string
    {
        return \gmp_strval(\gmp_div_r($a, $b));
    }

<<<<<<< HEAD
=======
    #[Override]
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function divQR(string $a, string $b) : array
    {
        [$q, $r] = \gmp_div_qr($a, $b);

        return [
            \gmp_strval($q),
            \gmp_strval($r)
        ];
    }

<<<<<<< HEAD
=======
    #[Override]
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function pow(string $a, int $e) : string
    {
        return \gmp_strval(\gmp_pow($a, $e));
    }

<<<<<<< HEAD
=======
    #[Override]
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function modInverse(string $x, string $m) : ?string
    {
        $result = \gmp_invert($x, $m);

        if ($result === false) {
            return null;
        }

        return \gmp_strval($result);
    }

<<<<<<< HEAD
=======
    #[Override]
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function modPow(string $base, string $exp, string $mod) : string
    {
        return \gmp_strval(\gmp_powm($base, $exp, $mod));
    }

<<<<<<< HEAD
=======
    #[Override]
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function gcd(string $a, string $b) : string
    {
        return \gmp_strval(\gmp_gcd($a, $b));
    }

<<<<<<< HEAD
=======
    #[Override]
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function fromBase(string $number, int $base) : string
    {
        return \gmp_strval(\gmp_init($number, $base));
    }

<<<<<<< HEAD
=======
    #[Override]
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function toBase(string $number, int $base) : string
    {
        return \gmp_strval($number, $base);
    }

<<<<<<< HEAD
=======
    #[Override]
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function and(string $a, string $b) : string
    {
        return \gmp_strval(\gmp_and($a, $b));
    }

<<<<<<< HEAD
=======
    #[Override]
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function or(string $a, string $b) : string
    {
        return \gmp_strval(\gmp_or($a, $b));
    }

<<<<<<< HEAD
=======
    #[Override]
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function xor(string $a, string $b) : string
    {
        return \gmp_strval(\gmp_xor($a, $b));
    }

<<<<<<< HEAD
=======
    #[Override]
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function sqrt(string $n) : string
    {
        return \gmp_strval(\gmp_sqrt($n));
    }
}
