<?php
<<<<<<< HEAD
=======
declare(strict_types=1);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

if (class_exists('ParagonIE_Sodium_Core_Util', false)) {
    return;
}

/**
 * Class ParagonIE_Sodium_Core_Util
 */
abstract class ParagonIE_Sodium_Core_Util
{
    const U32_MAX = 0xFFFFFFFF;

    /**
     * @param int $integer
     * @param int $size (16, 32, 64)
     * @return int
     */
<<<<<<< HEAD
    public static function abs($integer, $size = 0)
    {
        /** @var int $realSize */
=======
    public static function abs(
        #[SensitiveParameter]
        int $integer,
        int $size = 0
    ): int {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        $realSize = (PHP_INT_SIZE << 3) - 1;
        if ($size) {
            --$size;
        } else {
<<<<<<< HEAD
            /** @var int $size */
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $size = $realSize;
        }

        $negative = -(($integer >> $size) & 1);
<<<<<<< HEAD
        return (int) (
=======
        return (
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            ($integer ^ $negative)
                +
            (($negative >> $realSize) & 1)
        );
    }

    /**
     * @param string $a
     * @param string $b
     * @return string
     * @throws SodiumException
     */
<<<<<<< HEAD
    public static function andStrings($a, $b)
    {
        /* Type checks: */
        if (!is_string($a)) {
            throw new TypeError('Argument 1 must be a string');
        }
        if (!is_string($b)) {
            throw new TypeError('Argument 2 must be a string');
        }
=======
    public static function andStrings(
        #[SensitiveParameter]
        string $a,
        #[SensitiveParameter]
        string $b
    ): string {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        $len = self::strlen($a);
        if (self::strlen($b) !== $len) {
            throw new SodiumException('Both strings must be of equal length to combine with bitwise AND');
        }
        return $a & $b;
    }

    /**
     * Convert a binary string into a hexadecimal string without cache-timing
     * leaks
     *
     * @internal You should not use this directly from another application
     *
     * @param string $binaryString (raw binary)
     * @return string
     * @throws TypeError
     */
<<<<<<< HEAD
    public static function bin2hex($binaryString)
    {
        /* Type checks: */
        if (!is_string($binaryString)) {
            throw new TypeError('Argument 1 must be a string, ' . gettype($binaryString) . ' given.');
        }

=======
    public static function bin2hex(
        #[SensitiveParameter]
        string $binaryString
    ): string {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        $hex = '';
        $len = self::strlen($binaryString);
        for ($i = 0; $i < $len; ++$i) {
            /** @var array<int, int> $chunk */
            $chunk = unpack('C', $binaryString[$i]);
            /** @var int $c */
            $c = $chunk[1] & 0xf;
            /** @var int $b */
            $b = $chunk[1] >> 4;
            $hex .= pack(
                'CC',
                (87 + $b + ((($b - 10) >> 8) & ~38)),
                (87 + $c + ((($c - 10) >> 8) & ~38))
            );
        }
        return $hex;
    }

    /**
<<<<<<< HEAD
     * Convert a binary string into a hexadecimal string without cache-timing
     * leaks, returning uppercase letters (as per RFC 4648)
     *
     * @internal You should not use this directly from another application
     *
     * @param string $bin_string (raw binary)
     * @return string
     * @throws TypeError
     */
    public static function bin2hexUpper($bin_string)
    {
        $hex = '';
        $len = self::strlen($bin_string);
        for ($i = 0; $i < $len; ++$i) {
            /** @var array<int, int> $chunk */
            $chunk = unpack('C', $bin_string[$i]);
            /**
             * Lower 16 bits
             *
             * @var int $c
             */
            $c = $chunk[1] & 0xf;

            /**
             * Upper 16 bits
             * @var int $b
             */
            $b = $chunk[1] >> 4;

            /**
             * Use pack() and binary operators to turn the two integers
             * into hexadecimal characters. We don't use chr() here, because
             * it uses a lookup table internally and we want to avoid
             * cache-timing side-channels.
             */
            $hex .= pack(
                'CC',
                (55 + $b + ((($b - 10) >> 8) & ~6)),
                (55 + $c + ((($c - 10) >> 8) & ~6))
            );
        }
        return $hex;
    }

    /**
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * Cache-timing-safe variant of ord()
     *
     * @internal You should not use this directly from another application
     *
     * @param string $chr
     * @return int
     * @throws SodiumException
     * @throws TypeError
     */
<<<<<<< HEAD
    public static function chrToInt($chr)
    {
        /* Type checks: */
        if (!is_string($chr)) {
            throw new TypeError('Argument 1 must be a string, ' . gettype($chr) . ' given.');
        }
=======
    public static function chrToInt(
        #[SensitiveParameter]
        string $chr
    ): int {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        if (self::strlen($chr) !== 1) {
            throw new SodiumException('chrToInt() expects a string that is exactly 1 character long');
        }
        /** @var array<int, int> $chunk */
        $chunk = unpack('C', $chr);
<<<<<<< HEAD
        return (int) ($chunk[1]);
=======
        return $chunk[1];
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Compares two strings.
     *
     * @internal You should not use this directly from another application
     *
     * @param string $left
     * @param string $right
<<<<<<< HEAD
     * @param int $len
=======
     * @param ?int $len
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * @return int
     * @throws SodiumException
     * @throws TypeError
     */
<<<<<<< HEAD
    public static function compare($left, $right, $len = null)
    {
=======
    public static function compare(
        #[SensitiveParameter]
        string $left,
        #[SensitiveParameter]
        string $right,
        ?int $len = null
    ): int {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        $leftLen = self::strlen($left);
        $rightLen = self::strlen($right);
        if ($len === null) {
            $len = max($leftLen, $rightLen);
<<<<<<< HEAD
            $left = str_pad($left, $len, "\x00", STR_PAD_RIGHT);
            $right = str_pad($right, $len, "\x00", STR_PAD_RIGHT);
=======
            $left = str_pad($left, $len, "\x00");
            $right = str_pad($right, $len, "\x00");
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        }

        $gt = 0;
        $eq = 1;
        $i = $len;
        while ($i !== 0) {
            --$i;
            $gt |= ((self::chrToInt($right[$i]) - self::chrToInt($left[$i])) >> 8) & $eq;
            $eq &= ((self::chrToInt($right[$i]) ^ self::chrToInt($left[$i])) - 1) >> 8;
        }
        return ($gt + $gt + $eq) - 1;
    }

    /**
<<<<<<< HEAD
     * If a variable does not match a given type, throw a TypeError.
     *
     * @param mixed $mixedVar
     * @param string $type
     * @param int $argumentIndex
     * @throws TypeError
     * @throws SodiumException
     * @return void
     */
    public static function declareScalarType(&$mixedVar = null, $type = 'void', $argumentIndex = 0)
    {
        if (func_num_args() === 0) {
            /* Tautology, by default */
            return;
        }
        if (func_num_args() === 1) {
            throw new TypeError('Declared void, but passed a variable');
        }
        $realType = strtolower(gettype($mixedVar));
        $type = strtolower($type);
        switch ($type) {
            case 'null':
                if ($mixedVar !== null) {
                    throw new TypeError('Argument ' . $argumentIndex . ' must be null, ' . $realType . ' given.');
                }
                break;
            case 'integer':
            case 'int':
                $allow = array('int', 'integer');
                if (!in_array($type, $allow)) {
                    throw new TypeError('Argument ' . $argumentIndex . ' must be an integer, ' . $realType . ' given.');
                }
                $mixedVar = (int) $mixedVar;
                break;
            case 'boolean':
            case 'bool':
                $allow = array('bool', 'boolean');
                if (!in_array($type, $allow)) {
                    throw new TypeError('Argument ' . $argumentIndex . ' must be a boolean, ' . $realType . ' given.');
                }
                $mixedVar = (bool) $mixedVar;
                break;
            case 'string':
                if (!is_string($mixedVar)) {
                    throw new TypeError('Argument ' . $argumentIndex . ' must be a string, ' . $realType . ' given.');
                }
                $mixedVar = (string) $mixedVar;
                break;
            case 'decimal':
            case 'double':
            case 'float':
                $allow = array('decimal', 'double', 'float');
                if (!in_array($type, $allow)) {
                    throw new TypeError('Argument ' . $argumentIndex . ' must be a float, ' . $realType . ' given.');
                }
                $mixedVar = (float) $mixedVar;
                break;
            case 'object':
                if (!is_object($mixedVar)) {
                    throw new TypeError('Argument ' . $argumentIndex . ' must be an object, ' . $realType . ' given.');
                }
                break;
            case 'array':
                if (!is_array($mixedVar)) {
                    if (is_object($mixedVar)) {
                        if ($mixedVar instanceof ArrayAccess) {
                            return;
                        }
                    }
                    throw new TypeError('Argument ' . $argumentIndex . ' must be an array, ' . $realType . ' given.');
                }
                break;
            default:
                throw new SodiumException('Unknown type (' . $realType .') does not match expect type (' . $type . ')');
        }
    }

    /**
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * Evaluate whether or not two strings are equal (in constant-time)
     *
     * @param string $left
     * @param string $right
     * @return bool
<<<<<<< HEAD
     * @throws SodiumException
     * @throws TypeError
     */
    public static function hashEquals($left, $right)
    {
        /* Type checks: */
        if (!is_string($left)) {
            throw new TypeError('Argument 1 must be a string, ' . gettype($left) . ' given.');
        }
        if (!is_string($right)) {
            throw new TypeError('Argument 2 must be a string, ' . gettype($right) . ' given.');
        }

        if (is_callable('hash_equals')) {
            return hash_equals($left, $right);
        }
        $d = 0;
        /** @var int $len */
        $len = self::strlen($left);
        if ($len !== self::strlen($right)) {
            return false;
        }
        for ($i = 0; $i < $len; ++$i) {
            $d |= self::chrToInt($left[$i]) ^ self::chrToInt($right[$i]);
        }

        if ($d !== 0) {
            return false;
        }
        return $left === $right;
    }

    /**
     * Catch hash_update() failures and throw instead of silently proceeding
     *
     * @param HashContext|resource &$hs
     * @param string $data
     * @return void
     * @throws SodiumException
     * @psalm-suppress PossiblyInvalidArgument
     */
    protected static function hash_update(&$hs, $data)
    {
        if (!hash_update($hs, $data)) {
            throw new SodiumException('hash_update() failed');
        }
=======
     *
     * @throws TypeError
     */
    public static function hashEquals(
        #[SensitiveParameter]
        string $left,
        #[SensitiveParameter]
        string $right
    ): bool {
        return hash_equals($left, $right);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Convert a hexadecimal string into a binary string without cache-timing
     * leaks
     *
     * @internal You should not use this directly from another application
     *
     * @param string $hexString
     * @param string $ignore
     * @param bool $strictPadding
     * @return string (raw binary)
     * @throws RangeException
     * @throws TypeError
     */
<<<<<<< HEAD
    public static function hex2bin($hexString, $ignore = '', $strictPadding = false)
    {
        /* Type checks: */
        if (!is_string($hexString)) {
            throw new TypeError('Argument 1 must be a string, ' . gettype($hexString) . ' given.');
        }
        if (!is_string($ignore)) {
            throw new TypeError('Argument 2 must be a string, ' . gettype($hexString) . ' given.');
        }

=======
    public static function hex2bin(
        #[SensitiveParameter]
        string $hexString,
        string $ignore = '',
        bool $strictPadding = false
    ): string {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        $hex_pos = 0;
        $bin = '';
        $c_acc = 0;
        $hex_len = self::strlen($hexString);
        $state = 0;
        if (($hex_len & 1) !== 0) {
            if ($strictPadding) {
                throw new RangeException(
                    'Expected an even number of hexadecimal characters'
                );
            } else {
                $hexString = '0' . $hexString;
                ++$hex_len;
            }
        }

        $chunk = unpack('C*', $hexString);
        while ($hex_pos < $hex_len) {
            ++$hex_pos;
            /** @var int $c */
            $c = $chunk[$hex_pos];
            $c_num = $c ^ 48;
            $c_num0 = ($c_num - 10) >> 8;
            $c_alpha = ($c & ~32) - 55;
            $c_alpha0 = (($c_alpha - 10) ^ ($c_alpha - 16)) >> 8;
            if (($c_num0 | $c_alpha0) === 0) {
<<<<<<< HEAD
                if ($ignore && $state === 0 && strpos($ignore, self::intToChr($c)) !== false) {
=======
                if ($ignore && $state === 0 && str_contains($ignore, self::intToChr($c))) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                    continue;
                }
                throw new RangeException(
                    'hex2bin() only expects hexadecimal characters'
                );
            }
            $c_val = ($c_num0 & $c_num) | ($c_alpha & $c_alpha0);
            if ($state === 0) {
                $c_acc = $c_val * 16;
            } else {
                $bin .= pack('C', $c_acc | $c_val);
            }
            $state ^= 1;
        }
        return $bin;
    }

    /**
     * Turn an array of integers into a string
     *
     * @internal You should not use this directly from another application
     *
     * @param array<int, int> $ints
     * @return string
     */
<<<<<<< HEAD
    public static function intArrayToString(array $ints)
    {
        $args = $ints;
        foreach ($args as $i => $v) {
            $args[$i] = (int) ($v & 0xff);
=======
    public static function intArrayToString(array $ints): string
    {
        $args = $ints;
        foreach ($args as $i => $v) {
            $args[$i] = ($v & 0xff);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        }
        array_unshift($args, str_repeat('C', count($ints)));
        return (string) (call_user_func_array('pack', $args));
    }

    /**
     * Cache-timing-safe variant of ord()
     *
     * @internal You should not use this directly from another application
     *
     * @param int $int
     * @return string
     * @throws TypeError
     */
<<<<<<< HEAD
    public static function intToChr($int)
    {
=======
    public static function intToChr(
        #[SensitiveParameter]
        int $int
    ): string {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        return pack('C', $int);
    }

    /**
     * Load a 3 character substring into an integer
     *
     * @internal You should not use this directly from another application
     *
     * @param string $string
     * @return int
     * @throws RangeException
     * @throws TypeError
     */
<<<<<<< HEAD
    public static function load_3($string)
    {
        /* Type checks: */
        if (!is_string($string)) {
            throw new TypeError('Argument 1 must be a string, ' . gettype($string) . ' given.');
        }

=======
    public static function load_3(
        #[SensitiveParameter]
        string $string
    ): int {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        /* Input validation: */
        if (self::strlen($string) < 3) {
            throw new RangeException(
                'String must be 3 bytes or more; ' . self::strlen($string) . ' given.'
            );
        }
        /** @var array<int, int> $unpacked */
        $unpacked = unpack('V', $string . "\0");
<<<<<<< HEAD
        return (int) ($unpacked[1] & 0xffffff);
=======
        return ($unpacked[1] & 0xffffff);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Load a 4 character substring into an integer
     *
     * @internal You should not use this directly from another application
     *
     * @param string $string
     * @return int
     * @throws RangeException
     * @throws TypeError
     */
<<<<<<< HEAD
    public static function load_4($string)
    {
        /* Type checks: */
        if (!is_string($string)) {
            throw new TypeError('Argument 1 must be a string, ' . gettype($string) . ' given.');
        }

=======
    public static function load_4(
        #[SensitiveParameter]
        string $string
    ): int {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        /* Input validation: */
        if (self::strlen($string) < 4) {
            throw new RangeException(
                'String must be 4 bytes or more; ' . self::strlen($string) . ' given.'
            );
        }
        /** @var array<int, int> $unpacked */
        $unpacked = unpack('V', $string);
<<<<<<< HEAD
        return (int) $unpacked[1];
=======
        return $unpacked[1];
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Load a 8 character substring into an integer
     *
     * @internal You should not use this directly from another application
     *
     * @param string $string
     * @return int
<<<<<<< HEAD
=======
     *
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * @throws RangeException
     * @throws SodiumException
     * @throws TypeError
     */
<<<<<<< HEAD
    public static function load64_le($string)
    {
        /* Type checks: */
        if (!is_string($string)) {
            throw new TypeError('Argument 1 must be a string, ' . gettype($string) . ' given.');
        }

=======
    public static function load64_le(
        #[SensitiveParameter]
        string $string
    ): int {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        /* Input validation: */
        if (self::strlen($string) < 4) {
            throw new RangeException(
                'String must be 4 bytes or more; ' . self::strlen($string) . ' given.'
            );
        }
<<<<<<< HEAD
        if (PHP_VERSION_ID >= 50603 && PHP_INT_SIZE === 8) {
            /** @var array<int, int> $unpacked */
            $unpacked = unpack('P', $string);
            return (int) $unpacked[1];
        }

        /** @var int $result */
        $result  = (self::chrToInt($string[0]) & 0xff);
        $result |= (self::chrToInt($string[1]) & 0xff) <<  8;
        $result |= (self::chrToInt($string[2]) & 0xff) << 16;
        $result |= (self::chrToInt($string[3]) & 0xff) << 24;
        $result |= (self::chrToInt($string[4]) & 0xff) << 32;
        $result |= (self::chrToInt($string[5]) & 0xff) << 40;
        $result |= (self::chrToInt($string[6]) & 0xff) << 48;
        $result |= (self::chrToInt($string[7]) & 0xff) << 56;
        return (int) $result;
=======
        $unpacked = unpack('P', $string);
        return (int) $unpacked[1];
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * @internal You should not use this directly from another application
     *
     * @param string $left
     * @param string $right
     * @return int
<<<<<<< HEAD
     * @throws SodiumException
     * @throws TypeError
     */
    public static function memcmp($left, $right)
    {
=======
     * @throws TypeError
     */
    public static function memcmp(
        #[SensitiveParameter]
        string $left,
        #[SensitiveParameter]
        string $right
    ): int {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        if (self::hashEquals($left, $right)) {
            return 0;
        }
        return -1;
    }

    /**
     * Multiply two integers in constant-time
     *
     * Micro-architecture timing side-channels caused by how your CPU
     * implements multiplication are best prevented by never using the
     * multiplication operators and ensuring that our code always takes
     * the same number of operations to complete, regardless of the values
     * of $a and $b.
     *
     * @internal You should not use this directly from another application
     *
     * @param int $a
     * @param int $b
     * @param int $size Limits the number of operations (useful for small,
     *                  constant operands)
     * @return int
     */
<<<<<<< HEAD
    public static function mul($a, $b, $size = 0)
    {
=======
    public static function mul(
        #[SensitiveParameter]
        int $a,
        #[SensitiveParameter]
        int $b,
        int $size = 0
    ): int {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        if (ParagonIE_Sodium_Compat::$fastMult) {
            return (int) ($a * $b);
        }

        static $defaultSize = null;
<<<<<<< HEAD
        /** @var int $defaultSize */
        if (!$defaultSize) {
            /** @var int $defaultSize */
            $defaultSize = (PHP_INT_SIZE << 3) - 1;
        }
        if ($size < 1) {
            /** @var int $size */
=======
        if (!$defaultSize) {
            $defaultSize = (PHP_INT_SIZE << 3) - 1;
        }
        if ($size < 1) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $size = $defaultSize;
        }
        /** @var int $size */

        $c = 0;

        /**
         * Mask is either -1 or 0.
         *
         * -1 in binary looks like 0x1111 ... 1111
         *  0 in binary looks like 0x0000 ... 0000
<<<<<<< HEAD
         *
         * @var int
         */
        $mask = -(($b >> ((int) $defaultSize)) & 1);
=======
         */
        $mask = -(($b >> ($defaultSize)) & 1);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        /**
         * Ensure $b is a positive integer, without creating
         * a branching side-channel
         *
         * @var int $b
         */
        $b = ($b & ~$mask) | ($mask & -$b);

        /**
         * Unless $size is provided:
         *
         * This loop always runs 32 times when PHP_INT_SIZE is 4.
         * This loop always runs 64 times when PHP_INT_SIZE is 8.
         */
        for ($i = $size; $i >= 0; --$i) {
<<<<<<< HEAD
            $c += (int) ($a & -($b & 1));
=======
            $c += ($a & -($b & 1));
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $a <<= 1;
            $b >>= 1;
        }
        $c = (int) @($c & -1);

        /**
         * If $b was negative, we then apply the same value to $c here.
         * It doesn't matter much if $a was negative; the $c += above would
         * have produced a negative integer to begin with. But a negative $b
         * makes $b >>= 1 never return 0, so we would end up with incorrect
         * results.
         *
         * The end result is what we'd expect from integer multiplication.
         */
<<<<<<< HEAD
        return (int) (($c & ~$mask) | ($mask & -$c));
=======
        return (($c & ~$mask) | ($mask & -$c));
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Convert any arbitrary numbers into two 32-bit integers that represent
     * a 64-bit integer.
     *
     * @internal You should not use this directly from another application
     *
     * @param int|float $num
     * @return array<int, int>
<<<<<<< HEAD
     */
    public static function numericTo64BitInteger($num)
=======
     * @psalm-suppress RedundantCastGivenDocblockType
     */
    public static function numericTo64BitInteger(int|float $num): array
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $high = 0;
        /** @var int $low */
        if (PHP_INT_SIZE === 4) {
            $low = (int) $num;
        } else {
            $low = $num & 0xffffffff;
        }

        if ((+(abs($num))) >= 1) {
            if ($num > 0) {
                /** @var int $high */
                $high = min((+(floor($num/4294967296))), 4294967295);
            } else {
<<<<<<< HEAD
                /** @var int $high */
                $high = ~~((+(ceil(($num - (+((~~($num)))))/4294967296))));
            }
        }
=======
                $high = ~~((+(ceil(($num - (+((~~($num)))))/4294967296))));
            }
        }
        /**
         * @var int $high
         * @var int $low
         */
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        return array((int) $high, (int) $low);
    }

    /**
<<<<<<< HEAD
     * Store a 24-bit integer into a string, treating it as big-endian.
     *
     * @internal You should not use this directly from another application
     *
     * @param int $int
     * @return string
     * @throws TypeError
     */
    public static function store_3($int)
    {
        /* Type checks: */
        if (!is_int($int)) {
            if (is_numeric($int)) {
                $int = (int) $int;
            } else {
                throw new TypeError('Argument 1 must be an integer, ' . gettype($int) . ' given.');
            }
        }
        /** @var string $packed */
        $packed = pack('N', $int);
        return self::substr($packed, 1, 3);
    }

    /**
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * Store a 32-bit integer into a string, treating it as little-endian.
     *
     * @internal You should not use this directly from another application
     *
     * @param int $int
     * @return string
     * @throws TypeError
     */
<<<<<<< HEAD
    public static function store32_le($int)
    {
        /* Type checks: */
        if (!is_int($int)) {
            if (is_numeric($int)) {
                $int = (int) $int;
            } else {
                throw new TypeError('Argument 1 must be an integer, ' . gettype($int) . ' given.');
            }
        }

        /** @var string $packed */
        $packed = pack('V', $int);
        return $packed;
    }

    /**
     * Store a 32-bit integer into a string, treating it as big-endian.
     *
     * @internal You should not use this directly from another application
     *
     * @param int $int
     * @return string
     * @throws TypeError
     */
    public static function store_4($int)
    {
        /* Type checks: */
        if (!is_int($int)) {
            if (is_numeric($int)) {
                $int = (int) $int;
            } else {
                throw new TypeError('Argument 1 must be an integer, ' . gettype($int) . ' given.');
            }
        }

        /** @var string $packed */
        $packed = pack('N', $int);
        return $packed;
=======
    public static function store32_le(int $int): string
    {
       return pack('V', $int);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Stores a 64-bit integer as an string, treating it as little-endian.
     *
     * @internal You should not use this directly from another application
     *
     * @param int $int
     * @return string
     * @throws TypeError
     */
<<<<<<< HEAD
    public static function store64_le($int)
    {
        /* Type checks: */
        if (!is_int($int)) {
            if (is_numeric($int)) {
                $int = (int) $int;
            } else {
                throw new TypeError('Argument 1 must be an integer, ' . gettype($int) . ' given.');
            }
        }

        if (PHP_INT_SIZE === 8) {
            if (PHP_VERSION_ID >= 50603) {
                /** @var string $packed */
                $packed = pack('P', $int);
                return $packed;
            }
            return self::intToChr($int & 0xff) .
                self::intToChr(($int >>  8) & 0xff) .
                self::intToChr(($int >> 16) & 0xff) .
                self::intToChr(($int >> 24) & 0xff) .
                self::intToChr(($int >> 32) & 0xff) .
                self::intToChr(($int >> 40) & 0xff) .
                self::intToChr(($int >> 48) & 0xff) .
                self::intToChr(($int >> 56) & 0xff);
        }
        if ($int > PHP_INT_MAX) {
            list($hiB, $int) = self::numericTo64BitInteger($int);
        } else {
            $hiB = 0;
        }
        return
            self::intToChr(($int      ) & 0xff) .
            self::intToChr(($int >>  8) & 0xff) .
            self::intToChr(($int >> 16) & 0xff) .
            self::intToChr(($int >> 24) & 0xff) .
            self::intToChr($hiB & 0xff) .
            self::intToChr(($hiB >>  8) & 0xff) .
            self::intToChr(($hiB >> 16) & 0xff) .
            self::intToChr(($hiB >> 24) & 0xff);
=======
    public static function store64_le(int $int): string
    {
        return pack('P', $int);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Safe string length
     *
     * @internal You should not use this directly from another application
     *
     * @ref mbstring.func_overload
     *
     * @param string $str
     * @return int
     * @throws TypeError
     */
<<<<<<< HEAD
    public static function strlen($str)
    {
        /* Type checks: */
        if (!is_string($str)) {
            throw new TypeError('String expected');
        }

        return (int) (
=======
    public static function strlen(
        #[SensitiveParameter]
        string $str
    ): int {
        return (
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        self::isMbStringOverride()
            ? mb_strlen($str, '8bit')
            : strlen($str)
        );
    }

    /**
     * Turn a string into an array of integers
     *
     * @internal You should not use this directly from another application
     *
     * @param string $string
     * @return array<int, int>
     * @throws TypeError
     */
<<<<<<< HEAD
    public static function stringToIntArray($string)
    {
        if (!is_string($string)) {
            throw new TypeError('String expected');
        }
        /**
         * @var array<int, int>
         */
        $values = array_values(
            unpack('C*', $string)
        );
        return $values;
=======
    public static function stringToIntArray(string $string): array
    {
        return array_values(
            unpack('C*', $string)
        );
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Safe substring
     *
     * @internal You should not use this directly from another application
     *
     * @ref mbstring.func_overload
     *
     * @param string $str
     * @param int $start
<<<<<<< HEAD
     * @param int $length
     * @return string
     * @throws TypeError
     */
    public static function substr($str, $start = 0, $length = null)
    {
        /* Type checks: */
        if (!is_string($str)) {
            throw new TypeError('String expected');
        }

=======
     * @param ?int $length
     * @return string
     * @throws TypeError
     */
    public static function substr(
        #[SensitiveParameter]
        string $str,
        int $start = 0,
        ?int $length = null
    ): string {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        if ($length === 0) {
            return '';
        }

        if (self::isMbStringOverride()) {
            if (PHP_VERSION_ID < 50400 && $length === null) {
                $length = self::strlen($str);
            }
<<<<<<< HEAD
            $sub = (string) mb_substr($str, $start, $length, '8bit');
        } elseif ($length === null) {
            $sub = (string) substr($str, $start);
        } else {
            $sub = (string) substr($str, $start, $length);
=======
            $sub = mb_substr($str, $start, $length, '8bit');
        } elseif ($length === null) {
            $sub = substr($str, $start);
        } else {
            $sub = substr($str, $start, $length);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        }
        if ($sub !== '') {
            return $sub;
        }
        return '';
    }

    /**
     * Compare a 16-character byte string in constant time.
     *
     * @internal You should not use this directly from another application
     *
     * @param string $a
     * @param string $b
     * @return bool
<<<<<<< HEAD
     * @throws SodiumException
     * @throws TypeError
     */
    public static function verify_16($a, $b)
    {
        /* Type checks: */
        if (!is_string($a)) {
            throw new TypeError('String expected');
        }
        if (!is_string($b)) {
            throw new TypeError('String expected');
        }
=======
     * @throws TypeError
     */
    public static function verify_16(
        #[SensitiveParameter]
        string $a,
        #[SensitiveParameter]
        string $b
    ): bool {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        return self::hashEquals(
            self::substr($a, 0, 16),
            self::substr($b, 0, 16)
        );
    }

    /**
     * Compare a 32-character byte string in constant time.
     *
     * @internal You should not use this directly from another application
     *
     * @param string $a
     * @param string $b
     * @return bool
<<<<<<< HEAD
     * @throws SodiumException
     * @throws TypeError
     */
    public static function verify_32($a, $b)
    {
        /* Type checks: */
        if (!is_string($a)) {
            throw new TypeError('String expected');
        }
        if (!is_string($b)) {
            throw new TypeError('String expected');
        }
=======
     *
     * @throws SodiumException
     * @throws TypeError
     */
    public static function verify_32(
        #[SensitiveParameter]
        string $a,
        #[SensitiveParameter]
        string $b
    ): bool {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        return self::hashEquals(
            self::substr($a, 0, 32),
            self::substr($b, 0, 32)
        );
    }

    /**
     * Calculate $a ^ $b for two strings.
     *
     * @internal You should not use this directly from another application
     *
     * @param string $a
     * @param string $b
     * @return string
     * @throws TypeError
     */
<<<<<<< HEAD
    public static function xorStrings($a, $b)
    {
        /* Type checks: */
        if (!is_string($a)) {
            throw new TypeError('Argument 1 must be a string');
        }
        if (!is_string($b)) {
            throw new TypeError('Argument 2 must be a string');
        }

        return (string) ($a ^ $b);
=======
    public static function xorStrings(
        #[SensitiveParameter]
        string $a,
        #[SensitiveParameter]
        string $b
    ): string {
        return $a ^ $b;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Returns whether or not mbstring.func_overload is in effect.
     *
     * @internal You should not use this directly from another application
     *
     * Note: MB_OVERLOAD_STRING === 2, but we don't reference the constant
     * (for nuisance-free PHP 8 support)
     *
     * @return bool
     */
<<<<<<< HEAD
    protected static function isMbStringOverride()
=======
    protected static function isMbStringOverride(): bool
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        static $mbstring = null;

        if ($mbstring === null) {
            if (!defined('MB_OVERLOAD_STRING')) {
                $mbstring = false;
                return $mbstring;
            }
            $mbstring = extension_loaded('mbstring')
                && defined('MB_OVERLOAD_STRING')
                &&
            ((int) (ini_get('mbstring.func_overload')) & 2);
            // MB_OVERLOAD_STRING === 2
        }
        /** @var bool $mbstring */

        return $mbstring;
    }
}
