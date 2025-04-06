<?php
<<<<<<< HEAD
=======
declare(strict_types=1);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

if (class_exists('ParagonIE_Sodium_Core_AES_KeySchedule', false)) {
    return;
}

/**
 * @internal This should only be used by sodium_compat
 */
class ParagonIE_Sodium_Core_AES_KeySchedule
{
    /** @var array<int, int> $skey -- has size 120 */
<<<<<<< HEAD
    protected $skey;

    /** @var bool $expanded */
    protected $expanded = false;

    /** @var int $numRounds */
    private $numRounds;
=======
    protected array $skey;

    /** @var bool $expanded */
    protected bool $expanded = false;

    /** @var int $numRounds */
    private int $numRounds;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    /**
     * @param array $skey
     * @param int $numRounds
     */
<<<<<<< HEAD
    public function __construct(array $skey, $numRounds = 10)
=======
    public function __construct(array $skey, int $numRounds = 10)
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $this->skey = $skey;
        $this->numRounds = $numRounds;
    }

    /**
     * Get a value at an arbitrary index. Mostly used for unit testing.
     *
     * @param int $i
     * @return int
     */
<<<<<<< HEAD
    public function get($i)
=======
    public function get(int $i): int
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->skey[$i];
    }

    /**
     * @return int
     */
<<<<<<< HEAD
    public function getNumRounds()
=======
    public function getNumRounds(): int
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->numRounds;
    }

    /**
     * @param int $offset
     * @return ParagonIE_Sodium_Core_AES_Block
     */
<<<<<<< HEAD
    public function getRoundKey($offset)
=======
    public function getRoundKey(int $offset): ParagonIE_Sodium_Core_AES_Block
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return ParagonIE_Sodium_Core_AES_Block::fromArray(
            array_slice($this->skey, $offset, 8)
        );
    }

    /**
     * Return an expanded key schedule
     *
     * @return ParagonIE_Sodium_Core_AES_Expanded
     */
<<<<<<< HEAD
    public function expand()
=======
    public function expand(): ParagonIE_Sodium_Core_AES_Expanded
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $exp = new ParagonIE_Sodium_Core_AES_Expanded(
            array_fill(0, 120, 0),
            $this->numRounds
        );
        $n = ($exp->numRounds + 1) << 2;
        for ($u = 0, $v = 0; $u < $n; ++$u, $v += 2) {
            $x = $y = $this->skey[$u];
            $x &= 0x55555555;
            $exp->skey[$v] = ($x | ($x << 1)) & ParagonIE_Sodium_Core_Util::U32_MAX;
            $y &= 0xAAAAAAAA;
            $exp->skey[$v + 1] = ($y | ($y >> 1)) & ParagonIE_Sodium_Core_Util::U32_MAX;
        }
        return $exp;
    }
}
