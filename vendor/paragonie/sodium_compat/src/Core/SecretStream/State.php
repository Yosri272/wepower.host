<?php
<<<<<<< HEAD
=======
declare(strict_types=1);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

/**
 * Class ParagonIE_Sodium_Core_SecretStream_State
 */
class ParagonIE_Sodium_Core_SecretStream_State
{
<<<<<<< HEAD
    /** @var string $key */
    protected $key;

    /** @var int $counter */
    protected $counter;

    /** @var string $nonce */
    protected $nonce;

    /** @var string $_pad */
    protected $_pad;
=======
    protected string $key;
    protected int $counter;
    protected string $nonce;
    protected string $_pad;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    /**
     * ParagonIE_Sodium_Core_SecretStream_State constructor.
     * @param string $key
     * @param string|null $nonce
     */
<<<<<<< HEAD
    public function __construct($key, $nonce = null)
    {
=======
    public function __construct(
        #[SensitiveParameter]
        string $key,
        ?string $nonce = null
    ) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        $this->key = $key;
        $this->counter = 1;
        if (is_null($nonce)) {
            $nonce = str_repeat("\0", 12);
        }
<<<<<<< HEAD
        $this->nonce = str_pad($nonce, 12, "\0", STR_PAD_RIGHT);;
=======
        $this->nonce = str_pad($nonce, 12, "\0");
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        $this->_pad = str_repeat("\0", 4);
    }

    /**
     * @return self
     */
<<<<<<< HEAD
    public function counterReset()
=======
    public function counterReset(): self
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $this->counter = 1;
        $this->_pad = str_repeat("\0", 4);
        return $this;
    }

    /**
     * @return string
     */
<<<<<<< HEAD
    public function getKey()
=======
    public function getKey(): string
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->key;
    }

    /**
     * @return string
     */
<<<<<<< HEAD
    public function getCounter()
=======
    public function getCounter(): string
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return ParagonIE_Sodium_Core_Util::store32_le($this->counter);
    }

    /**
     * @return string
     */
<<<<<<< HEAD
    public function getNonce()
    {
        if (!is_string($this->nonce)) {
            $this->nonce = str_repeat("\0", 12);
        }
        if (ParagonIE_Sodium_Core_Util::strlen($this->nonce) !== 12) {
            $this->nonce = str_pad($this->nonce, 12, "\0", STR_PAD_RIGHT);
=======
    public function getNonce(): string
    {
        if (ParagonIE_Sodium_Core_Util::strlen($this->nonce) !== 12) {
            $this->nonce = str_pad($this->nonce, 12, "\0");
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        }
        return $this->nonce;
    }

    /**
     * @return string
     */
<<<<<<< HEAD
    public function getCombinedNonce()
=======
    public function getCombinedNonce(): string
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->getCounter() .
            ParagonIE_Sodium_Core_Util::substr($this->getNonce(), 0, 8);
    }

    /**
     * @return self
     */
<<<<<<< HEAD
    public function incrementCounter()
=======
    public function incrementCounter(): self
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        ++$this->counter;
        return $this;
    }

    /**
     * @return bool
     */
<<<<<<< HEAD
    public function needsRekey()
=======
    public function needsRekey(): bool
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return ($this->counter & 0xffff) === 0;
    }

    /**
     * @param string $newKeyAndNonce
     * @return self
     */
<<<<<<< HEAD
    public function rekey($newKeyAndNonce)
    {
=======
    public function rekey(
        #[SensitiveParameter]
        string $newKeyAndNonce
    ): self {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        $this->key = ParagonIE_Sodium_Core_Util::substr($newKeyAndNonce, 0, 32);
        $this->nonce = str_pad(
            ParagonIE_Sodium_Core_Util::substr($newKeyAndNonce, 32),
            12,
<<<<<<< HEAD
            "\0",
            STR_PAD_RIGHT
=======
            "\0"
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        );
        return $this;
    }

    /**
     * @param string $str
     * @return self
     */
<<<<<<< HEAD
    public function xorNonce($str)
    {
=======
    public function xorNonce(
        #[SensitiveParameter]
        string $str
    ): self {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        $this->nonce = ParagonIE_Sodium_Core_Util::xorStrings(
            $this->getNonce(),
            str_pad(
                ParagonIE_Sodium_Core_Util::substr($str, 0, 8),
                12,
<<<<<<< HEAD
                "\0",
                STR_PAD_RIGHT
=======
                "\0"
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            )
        );
        return $this;
    }

    /**
     * @param string $string
     * @return self
     */
<<<<<<< HEAD
    public static function fromString($string)
    {
=======
    public static function fromString(
        #[SensitiveParameter]
        string $string
    ): self {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        $state = new ParagonIE_Sodium_Core_SecretStream_State(
            ParagonIE_Sodium_Core_Util::substr($string, 0, 32)
        );
        $state->counter = ParagonIE_Sodium_Core_Util::load_4(
            ParagonIE_Sodium_Core_Util::substr($string, 32, 4)
        );
        $state->nonce = ParagonIE_Sodium_Core_Util::substr($string, 36, 12);
        $state->_pad = ParagonIE_Sodium_Core_Util::substr($string, 48, 8);
        return $state;
    }

    /**
     * @return string
     */
<<<<<<< HEAD
    public function toString()
=======
    public function toString(): string
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->key .
            $this->getCounter() .
            $this->nonce .
            $this->_pad;
    }
}
