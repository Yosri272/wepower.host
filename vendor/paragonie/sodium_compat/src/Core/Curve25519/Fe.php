<?php
<<<<<<< HEAD
=======
declare(strict_types=1);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

if (class_exists('ParagonIE_Sodium_Core_Curve25519_Fe', false)) {
    return;
}

/**
 * Class ParagonIE_Sodium_Core_Curve25519_Fe
 *
 * This represents a Field Element
<<<<<<< HEAD
=======
 *
 * @psalm-suppress MissingTemplateParam
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
 */
class ParagonIE_Sodium_Core_Curve25519_Fe implements ArrayAccess
{
    /**
     * @var array<int, int>
     */
<<<<<<< HEAD
    protected $container = array();
=======
    protected array $container = [];
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    /**
     * @var int
     */
<<<<<<< HEAD
    protected $size = 10;
=======
    protected int $size = 10;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    /**
     * @internal You should not use this directly from another application
     *
     * @param array<int, int> $array
     * @param bool $save_indexes
     * @return self
     */
<<<<<<< HEAD
    public static function fromArray($array, $save_indexes = null)
=======
    public static function fromArray(array $array, bool $save_indexes = false): self
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $count = count($array);
        if ($save_indexes) {
            $keys = array_keys($array);
        } else {
            $keys = range(0, $count - 1);
        }
        $array = array_values($array);
        /** @var array<int, int> $keys */

        $obj = new ParagonIE_Sodium_Core_Curve25519_Fe();
        if ($save_indexes) {
            for ($i = 0; $i < $count; ++$i) {
                $obj->offsetSet($keys[$i], $array[$i]);
            }
        } else {
            for ($i = 0; $i < $count; ++$i) {
                $obj->offsetSet($i, $array[$i]);
            }
        }
        return $obj;
    }

    /**
     * @internal You should not use this directly from another application
     *
     * @param int|null $offset
     * @param int $value
     * @return void
<<<<<<< HEAD
     * @psalm-suppress MixedArrayOffset
     */
    #[ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (!is_int($value)) {
            throw new InvalidArgumentException('Expected an integer');
        }
=======
     */
    #[ReturnTypeWillChange]
    public function offsetSet($offset, $value): void
    {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * @internal You should not use this directly from another application
     *
     * @param int $offset
     * @return bool
<<<<<<< HEAD
     * @psalm-suppress MixedArrayOffset
     */
    #[ReturnTypeWillChange]
    public function offsetExists($offset)
=======
     */
    #[ReturnTypeWillChange]
    public function offsetExists($offset): bool
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return isset($this->container[$offset]);
    }

    /**
     * @internal You should not use this directly from another application
     *
     * @param int $offset
     * @return void
<<<<<<< HEAD
     * @psalm-suppress MixedArrayOffset
     */
    #[ReturnTypeWillChange]
    public function offsetUnset($offset)
=======
     */
    #[ReturnTypeWillChange]
    public function offsetUnset($offset): void
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        unset($this->container[$offset]);
    }

    /**
     * @internal You should not use this directly from another application
     *
     * @param int $offset
     * @return int
<<<<<<< HEAD
     * @psalm-suppress MixedArrayOffset
     */
    #[ReturnTypeWillChange]
    public function offsetGet($offset)
=======
     * @psalm-suppress ImplementedReturnTypeMismatch
     */
    #[ReturnTypeWillChange]
    public function offsetGet($offset): int
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        if (!isset($this->container[$offset])) {
            $this->container[$offset] = 0;
        }
<<<<<<< HEAD
        return (int) ($this->container[$offset]);
=======
        return $this->container[$offset];
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * @internal You should not use this directly from another application
     *
     * @return array
     */
    public function __debugInfo()
    {
        return array(implode(', ', $this->container));
    }
}
