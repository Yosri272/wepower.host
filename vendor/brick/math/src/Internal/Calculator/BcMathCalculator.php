<?php

declare(strict_types=1);

namespace Brick\Math\Internal\Calculator;

use Brick\Math\Internal\Calculator;
<<<<<<< HEAD
=======
use Override;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

/**
 * Calculator implementation built around the bcmath library.
 *
 * @internal
 *
 * @psalm-immutable
 */
class BcMathCalculator extends Calculator
{
<<<<<<< HEAD
=======
    #[Override]
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function add(string $a, string $b) : string
    {
        return \bcadd($a, $b, 0);
    }

<<<<<<< HEAD
=======
    #[Override]
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function sub(string $a, string $b) : string
    {
        return \bcsub($a, $b, 0);
    }

<<<<<<< HEAD
=======
    #[Override]
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function mul(string $a, string $b) : string
    {
        return \bcmul($a, $b, 0);
    }

<<<<<<< HEAD
=======
    #[Override]
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function divQ(string $a, string $b) : string
    {
        return \bcdiv($a, $b, 0);
    }

<<<<<<< HEAD
=======
    #[Override]
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function divR(string $a, string $b) : string
    {
        return \bcmod($a, $b, 0);
    }

<<<<<<< HEAD
=======
    #[Override]
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function divQR(string $a, string $b) : array
    {
        $q = \bcdiv($a, $b, 0);
        $r = \bcmod($a, $b, 0);

        return [$q, $r];
    }

<<<<<<< HEAD
=======
    #[Override]
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function pow(string $a, int $e) : string
    {
        return \bcpow($a, (string) $e, 0);
    }

<<<<<<< HEAD
=======
    #[Override]
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function modPow(string $base, string $exp, string $mod) : string
    {
        return \bcpowmod($base, $exp, $mod, 0);
    }

<<<<<<< HEAD
=======
    #[Override]
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function sqrt(string $n) : string
    {
        return \bcsqrt($n, 0);
    }
}
