<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\VarDumper\Cloner;

/**
 * DumperInterface used by Data objects.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
interface DumperInterface
{
    /**
     * Dumps a scalar value.
<<<<<<< HEAD
     *
     * @return void
     */
    public function dumpScalar(Cursor $cursor, string $type, string|int|float|bool|null $value);
=======
     */
    public function dumpScalar(Cursor $cursor, string $type, string|int|float|bool|null $value): void;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    /**
     * Dumps a string.
     *
     * @param string $str The string being dumped
     * @param bool   $bin Whether $str is UTF-8 or binary encoded
     * @param int    $cut The number of characters $str has been cut by
<<<<<<< HEAD
     *
     * @return void
     */
    public function dumpString(Cursor $cursor, string $str, bool $bin, int $cut);
=======
     */
    public function dumpString(Cursor $cursor, string $str, bool $bin, int $cut): void;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    /**
     * Dumps while entering an hash.
     *
     * @param int             $type     A Cursor::HASH_* const for the type of hash
     * @param string|int|null $class    The object class, resource type or array count
     * @param bool            $hasChild When the dump of the hash has child item
<<<<<<< HEAD
     *
     * @return void
     */
    public function enterHash(Cursor $cursor, int $type, string|int|null $class, bool $hasChild);
=======
     */
    public function enterHash(Cursor $cursor, int $type, string|int|null $class, bool $hasChild): void;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    /**
     * Dumps while leaving an hash.
     *
     * @param int             $type     A Cursor::HASH_* const for the type of hash
     * @param string|int|null $class    The object class, resource type or array count
     * @param bool            $hasChild When the dump of the hash has child item
     * @param int             $cut      The number of items the hash has been cut by
<<<<<<< HEAD
     *
     * @return void
     */
    public function leaveHash(Cursor $cursor, int $type, string|int|null $class, bool $hasChild, int $cut);
=======
     */
    public function leaveHash(Cursor $cursor, int $type, string|int|null $class, bool $hasChild, int $cut): void;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
}
