<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Cache\Traits;

use Symfony\Component\VarExporter\LazyObjectInterface;
<<<<<<< HEAD
use Symfony\Component\VarExporter\LazyProxyTrait;
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use Symfony\Contracts\Service\ResetInterface;

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

/**
 * @internal
 */
class RedisCluster5Proxy extends \RedisCluster implements ResetInterface, LazyObjectInterface
{
<<<<<<< HEAD
    use LazyProxyTrait {
        resetLazyObject as reset;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [];

    public function __construct($name, $seeds = null, $timeout = null, $read_timeout = null, $persistent = null, #[\SensitiveParameter] $auth = null)
    {
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->__construct(...\func_get_args());
=======
    use RedisProxyTrait {
        resetLazyObject as reset;
    }

    public function __construct($name, $seeds = null, $timeout = null, $read_timeout = null, $persistent = null, #[\SensitiveParameter] $auth = null)
    {
        $this->initializeLazyObject()->__construct(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function _masters()
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->_masters(...\func_get_args());
=======
        return $this->initializeLazyObject()->_masters(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function _prefix($key)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->_prefix(...\func_get_args());
=======
        return $this->initializeLazyObject()->_prefix(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function _redir()
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->_redir(...\func_get_args());
=======
        return $this->initializeLazyObject()->_redir(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function _serialize($value)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->_serialize(...\func_get_args());
=======
        return $this->initializeLazyObject()->_serialize(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function _unserialize($value)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->_unserialize(...\func_get_args());
=======
        return $this->initializeLazyObject()->_unserialize(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function _compress($value)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->_compress(...\func_get_args());
=======
        return $this->initializeLazyObject()->_compress(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function _uncompress($value)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->_uncompress(...\func_get_args());
=======
        return $this->initializeLazyObject()->_uncompress(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function _pack($value)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->_pack(...\func_get_args());
=======
        return $this->initializeLazyObject()->_pack(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function _unpack($value)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->_unpack(...\func_get_args());
=======
        return $this->initializeLazyObject()->_unpack(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function acl($key_or_address, $subcmd, ...$args)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->acl(...\func_get_args());
=======
        return $this->initializeLazyObject()->acl(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function append($key, $value)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->append(...\func_get_args());
=======
        return $this->initializeLazyObject()->append(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function bgrewriteaof($key_or_address)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->bgrewriteaof(...\func_get_args());
=======
        return $this->initializeLazyObject()->bgrewriteaof(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function bgsave($key_or_address)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->bgsave(...\func_get_args());
=======
        return $this->initializeLazyObject()->bgsave(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function bitcount($key)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->bitcount(...\func_get_args());
=======
        return $this->initializeLazyObject()->bitcount(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function bitop($operation, $ret_key, $key, ...$other_keys)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->bitop(...\func_get_args());
=======
        return $this->initializeLazyObject()->bitop(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function bitpos($key, $bit, $start = null, $end = null)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->bitpos(...\func_get_args());
=======
        return $this->initializeLazyObject()->bitpos(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function blpop($key, $timeout_or_key, ...$extra_args)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->blpop(...\func_get_args());
=======
        return $this->initializeLazyObject()->blpop(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function brpop($key, $timeout_or_key, ...$extra_args)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->brpop(...\func_get_args());
=======
        return $this->initializeLazyObject()->brpop(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function brpoplpush($src, $dst, $timeout)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->brpoplpush(...\func_get_args());
=======
        return $this->initializeLazyObject()->brpoplpush(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function clearlasterror()
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->clearlasterror(...\func_get_args());
=======
        return $this->initializeLazyObject()->clearlasterror(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function bzpopmax($key, $timeout_or_key, ...$extra_args)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->bzpopmax(...\func_get_args());
=======
        return $this->initializeLazyObject()->bzpopmax(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function bzpopmin($key, $timeout_or_key, ...$extra_args)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->bzpopmin(...\func_get_args());
=======
        return $this->initializeLazyObject()->bzpopmin(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function client($key_or_address, $arg = null, ...$other_args)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->client(...\func_get_args());
=======
        return $this->initializeLazyObject()->client(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function close()
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->close(...\func_get_args());
=======
        return $this->initializeLazyObject()->close(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function cluster($key_or_address, $arg = null, ...$other_args)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->cluster(...\func_get_args());
=======
        return $this->initializeLazyObject()->cluster(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function command(...$args)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->command(...\func_get_args());
=======
        return $this->initializeLazyObject()->command(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function config($key_or_address, $arg = null, ...$other_args)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->config(...\func_get_args());
=======
        return $this->initializeLazyObject()->config(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function dbsize($key_or_address)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->dbsize(...\func_get_args());
=======
        return $this->initializeLazyObject()->dbsize(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function decr($key)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->decr(...\func_get_args());
=======
        return $this->initializeLazyObject()->decr(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function decrby($key, $value)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->decrby(...\func_get_args());
=======
        return $this->initializeLazyObject()->decrby(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function del($key, ...$other_keys)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->del(...\func_get_args());
=======
        return $this->initializeLazyObject()->del(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function discard()
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->discard(...\func_get_args());
=======
        return $this->initializeLazyObject()->discard(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function dump($key)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->dump(...\func_get_args());
=======
        return $this->initializeLazyObject()->dump(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function echo($msg)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->echo(...\func_get_args());
=======
        return $this->initializeLazyObject()->echo(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function eval($script, $args = null, $num_keys = null)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->eval(...\func_get_args());
=======
        return $this->initializeLazyObject()->eval(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function evalsha($script_sha, $args = null, $num_keys = null)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->evalsha(...\func_get_args());
=======
        return $this->initializeLazyObject()->evalsha(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function exec()
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->exec(...\func_get_args());
=======
        return $this->initializeLazyObject()->exec(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function exists($key)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->exists(...\func_get_args());
=======
        return $this->initializeLazyObject()->exists(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function expire($key, $timeout)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->expire(...\func_get_args());
=======
        return $this->initializeLazyObject()->expire(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function expireat($key, $timestamp)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->expireat(...\func_get_args());
=======
        return $this->initializeLazyObject()->expireat(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function flushall($key_or_address, $async = null)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->flushall(...\func_get_args());
=======
        return $this->initializeLazyObject()->flushall(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function flushdb($key_or_address, $async = null)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->flushdb(...\func_get_args());
=======
        return $this->initializeLazyObject()->flushdb(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function geoadd($key, $lng, $lat, $member, ...$other_triples)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->geoadd(...\func_get_args());
=======
        return $this->initializeLazyObject()->geoadd(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function geodist($key, $src, $dst, $unit = null)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->geodist(...\func_get_args());
=======
        return $this->initializeLazyObject()->geodist(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function geohash($key, $member, ...$other_members)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->geohash(...\func_get_args());
=======
        return $this->initializeLazyObject()->geohash(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function geopos($key, $member, ...$other_members)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->geopos(...\func_get_args());
=======
        return $this->initializeLazyObject()->geopos(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function georadius($key, $lng, $lan, $radius, $unit, $opts = null)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->georadius(...\func_get_args());
=======
        return $this->initializeLazyObject()->georadius(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function georadius_ro($key, $lng, $lan, $radius, $unit, $opts = null)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->georadius_ro(...\func_get_args());
=======
        return $this->initializeLazyObject()->georadius_ro(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function georadiusbymember($key, $member, $radius, $unit, $opts = null)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->georadiusbymember(...\func_get_args());
=======
        return $this->initializeLazyObject()->georadiusbymember(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function georadiusbymember_ro($key, $member, $radius, $unit, $opts = null)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->georadiusbymember_ro(...\func_get_args());
=======
        return $this->initializeLazyObject()->georadiusbymember_ro(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function get($key)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->get(...\func_get_args());
=======
        return $this->initializeLazyObject()->get(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function getbit($key, $offset)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getbit(...\func_get_args());
=======
        return $this->initializeLazyObject()->getbit(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function getlasterror()
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getlasterror(...\func_get_args());
=======
        return $this->initializeLazyObject()->getlasterror(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function getmode()
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getmode(...\func_get_args());
=======
        return $this->initializeLazyObject()->getmode(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function getoption($option)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getoption(...\func_get_args());
=======
        return $this->initializeLazyObject()->getoption(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function getrange($key, $start, $end)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getrange(...\func_get_args());
=======
        return $this->initializeLazyObject()->getrange(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function getset($key, $value)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getset(...\func_get_args());
=======
        return $this->initializeLazyObject()->getset(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function hdel($key, $member, ...$other_members)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hdel(...\func_get_args());
=======
        return $this->initializeLazyObject()->hdel(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function hexists($key, $member)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hexists(...\func_get_args());
=======
        return $this->initializeLazyObject()->hexists(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function hget($key, $member)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hget(...\func_get_args());
=======
        return $this->initializeLazyObject()->hget(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function hgetall($key)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hgetall(...\func_get_args());
=======
        return $this->initializeLazyObject()->hgetall(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function hincrby($key, $member, $value)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hincrby(...\func_get_args());
=======
        return $this->initializeLazyObject()->hincrby(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function hincrbyfloat($key, $member, $value)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hincrbyfloat(...\func_get_args());
=======
        return $this->initializeLazyObject()->hincrbyfloat(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function hkeys($key)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hkeys(...\func_get_args());
=======
        return $this->initializeLazyObject()->hkeys(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function hlen($key)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hlen(...\func_get_args());
=======
        return $this->initializeLazyObject()->hlen(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function hmget($key, $keys)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hmget(...\func_get_args());
=======
        return $this->initializeLazyObject()->hmget(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function hmset($key, $pairs)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hmset(...\func_get_args());
=======
        return $this->initializeLazyObject()->hmset(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function hscan($str_key, &$i_iterator, $str_pattern = null, $i_count = null)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hscan($str_key, $i_iterator, ...\array_slice(\func_get_args(), 2));
=======
        return $this->initializeLazyObject()->hscan($str_key, $i_iterator, ...\array_slice(\func_get_args(), 2));
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function hset($key, $member, $value)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hset(...\func_get_args());
=======
        return $this->initializeLazyObject()->hset(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function hsetnx($key, $member, $value)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hsetnx(...\func_get_args());
=======
        return $this->initializeLazyObject()->hsetnx(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function hstrlen($key, $member)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hstrlen(...\func_get_args());
=======
        return $this->initializeLazyObject()->hstrlen(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function hvals($key)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hvals(...\func_get_args());
=======
        return $this->initializeLazyObject()->hvals(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function incr($key)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->incr(...\func_get_args());
=======
        return $this->initializeLazyObject()->incr(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function incrby($key, $value)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->incrby(...\func_get_args());
=======
        return $this->initializeLazyObject()->incrby(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function incrbyfloat($key, $value)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->incrbyfloat(...\func_get_args());
=======
        return $this->initializeLazyObject()->incrbyfloat(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function info($key_or_address, $option = null)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->info(...\func_get_args());
=======
        return $this->initializeLazyObject()->info(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function keys($pattern)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->keys(...\func_get_args());
=======
        return $this->initializeLazyObject()->keys(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function lastsave($key_or_address)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->lastsave(...\func_get_args());
=======
        return $this->initializeLazyObject()->lastsave(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function lget($key, $index)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->lget(...\func_get_args());
=======
        return $this->initializeLazyObject()->lget(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function lindex($key, $index)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->lindex(...\func_get_args());
=======
        return $this->initializeLazyObject()->lindex(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function linsert($key, $position, $pivot, $value)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->linsert(...\func_get_args());
=======
        return $this->initializeLazyObject()->linsert(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function llen($key)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->llen(...\func_get_args());
=======
        return $this->initializeLazyObject()->llen(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function lpop($key)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->lpop(...\func_get_args());
=======
        return $this->initializeLazyObject()->lpop(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function lpush($key, $value)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->lpush(...\func_get_args());
=======
        return $this->initializeLazyObject()->lpush(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function lpushx($key, $value)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->lpushx(...\func_get_args());
=======
        return $this->initializeLazyObject()->lpushx(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function lrange($key, $start, $end)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->lrange(...\func_get_args());
=======
        return $this->initializeLazyObject()->lrange(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function lrem($key, $value)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->lrem(...\func_get_args());
=======
        return $this->initializeLazyObject()->lrem(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function lset($key, $index, $value)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->lset(...\func_get_args());
=======
        return $this->initializeLazyObject()->lset(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function ltrim($key, $start, $stop)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->ltrim(...\func_get_args());
=======
        return $this->initializeLazyObject()->ltrim(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function mget($keys)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->mget(...\func_get_args());
=======
        return $this->initializeLazyObject()->mget(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function mset($pairs)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->mset(...\func_get_args());
=======
        return $this->initializeLazyObject()->mset(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function msetnx($pairs)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->msetnx(...\func_get_args());
=======
        return $this->initializeLazyObject()->msetnx(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function multi()
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->multi(...\func_get_args());
=======
        return $this->initializeLazyObject()->multi(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function object($field, $key)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->object(...\func_get_args());
=======
        return $this->initializeLazyObject()->object(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function persist($key)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->persist(...\func_get_args());
=======
        return $this->initializeLazyObject()->persist(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function pexpire($key, $timestamp)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->pexpire(...\func_get_args());
=======
        return $this->initializeLazyObject()->pexpire(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function pexpireat($key, $timestamp)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->pexpireat(...\func_get_args());
=======
        return $this->initializeLazyObject()->pexpireat(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function pfadd($key, $elements)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->pfadd(...\func_get_args());
=======
        return $this->initializeLazyObject()->pfadd(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function pfcount($key)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->pfcount(...\func_get_args());
=======
        return $this->initializeLazyObject()->pfcount(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function pfmerge($dstkey, $keys)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->pfmerge(...\func_get_args());
=======
        return $this->initializeLazyObject()->pfmerge(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function ping($key_or_address)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->ping(...\func_get_args());
=======
        return $this->initializeLazyObject()->ping(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function psetex($key, $expire, $value)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->psetex(...\func_get_args());
=======
        return $this->initializeLazyObject()->psetex(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function psubscribe($patterns, $callback)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->psubscribe(...\func_get_args());
=======
        return $this->initializeLazyObject()->psubscribe(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function pttl($key)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->pttl(...\func_get_args());
=======
        return $this->initializeLazyObject()->pttl(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function publish($channel, $message)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->publish(...\func_get_args());
=======
        return $this->initializeLazyObject()->publish(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function pubsub($key_or_address, $arg = null, ...$other_args)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->pubsub(...\func_get_args());
=======
        return $this->initializeLazyObject()->pubsub(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function punsubscribe($pattern, ...$other_patterns)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->punsubscribe(...\func_get_args());
=======
        return $this->initializeLazyObject()->punsubscribe(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function randomkey($key_or_address)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->randomkey(...\func_get_args());
=======
        return $this->initializeLazyObject()->randomkey(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function rawcommand($cmd, ...$args)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->rawcommand(...\func_get_args());
=======
        return $this->initializeLazyObject()->rawcommand(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function rename($key, $newkey)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->rename(...\func_get_args());
=======
        return $this->initializeLazyObject()->rename(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function renamenx($key, $newkey)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->renamenx(...\func_get_args());
=======
        return $this->initializeLazyObject()->renamenx(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function restore($ttl, $key, $value)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->restore(...\func_get_args());
=======
        return $this->initializeLazyObject()->restore(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function role()
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->role(...\func_get_args());
=======
        return $this->initializeLazyObject()->role(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function rpop($key)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->rpop(...\func_get_args());
=======
        return $this->initializeLazyObject()->rpop(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function rpoplpush($src, $dst)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->rpoplpush(...\func_get_args());
=======
        return $this->initializeLazyObject()->rpoplpush(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function rpush($key, $value)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->rpush(...\func_get_args());
=======
        return $this->initializeLazyObject()->rpush(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function rpushx($key, $value)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->rpushx(...\func_get_args());
=======
        return $this->initializeLazyObject()->rpushx(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sadd($key, $value)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sadd(...\func_get_args());
=======
        return $this->initializeLazyObject()->sadd(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function saddarray($key, $options)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->saddarray(...\func_get_args());
=======
        return $this->initializeLazyObject()->saddarray(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function save($key_or_address)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->save(...\func_get_args());
=======
        return $this->initializeLazyObject()->save(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function scan(&$i_iterator, $str_node, $str_pattern = null, $i_count = null)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->scan($i_iterator, ...\array_slice(\func_get_args(), 1));
=======
        return $this->initializeLazyObject()->scan($i_iterator, ...\array_slice(\func_get_args(), 1));
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function scard($key)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->scard(...\func_get_args());
=======
        return $this->initializeLazyObject()->scard(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function script($key_or_address, $arg = null, ...$other_args)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->script(...\func_get_args());
=======
        return $this->initializeLazyObject()->script(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sdiff($key, ...$other_keys)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sdiff(...\func_get_args());
=======
        return $this->initializeLazyObject()->sdiff(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sdiffstore($dst, $key, ...$other_keys)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sdiffstore(...\func_get_args());
=======
        return $this->initializeLazyObject()->sdiffstore(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function set($key, $value, $opts = null)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->set(...\func_get_args());
=======
        return $this->initializeLazyObject()->set(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function setbit($key, $offset, $value)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->setbit(...\func_get_args());
=======
        return $this->initializeLazyObject()->setbit(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function setex($key, $expire, $value)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->setex(...\func_get_args());
=======
        return $this->initializeLazyObject()->setex(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function setnx($key, $value)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->setnx(...\func_get_args());
=======
        return $this->initializeLazyObject()->setnx(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function setoption($option, $value)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->setoption(...\func_get_args());
=======
        return $this->initializeLazyObject()->setoption(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function setrange($key, $offset, $value)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->setrange(...\func_get_args());
=======
        return $this->initializeLazyObject()->setrange(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sinter($key, ...$other_keys)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sinter(...\func_get_args());
=======
        return $this->initializeLazyObject()->sinter(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sinterstore($dst, $key, ...$other_keys)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sinterstore(...\func_get_args());
=======
        return $this->initializeLazyObject()->sinterstore(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sismember($key, $value)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sismember(...\func_get_args());
=======
        return $this->initializeLazyObject()->sismember(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function slowlog($key_or_address, $arg = null, ...$other_args)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->slowlog(...\func_get_args());
=======
        return $this->initializeLazyObject()->slowlog(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function smembers($key)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->smembers(...\func_get_args());
=======
        return $this->initializeLazyObject()->smembers(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function smove($src, $dst, $value)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->smove(...\func_get_args());
=======
        return $this->initializeLazyObject()->smove(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sort($key, $options = null)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sort(...\func_get_args());
=======
        return $this->initializeLazyObject()->sort(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function spop($key)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->spop(...\func_get_args());
=======
        return $this->initializeLazyObject()->spop(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function srandmember($key, $count = null)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->srandmember(...\func_get_args());
=======
        return $this->initializeLazyObject()->srandmember(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function srem($key, $value)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->srem(...\func_get_args());
=======
        return $this->initializeLazyObject()->srem(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sscan($str_key, &$i_iterator, $str_pattern = null, $i_count = null)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sscan($str_key, $i_iterator, ...\array_slice(\func_get_args(), 2));
=======
        return $this->initializeLazyObject()->sscan($str_key, $i_iterator, ...\array_slice(\func_get_args(), 2));
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function strlen($key)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->strlen(...\func_get_args());
=======
        return $this->initializeLazyObject()->strlen(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function subscribe($channels, $callback)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->subscribe(...\func_get_args());
=======
        return $this->initializeLazyObject()->subscribe(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sunion($key, ...$other_keys)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sunion(...\func_get_args());
=======
        return $this->initializeLazyObject()->sunion(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sunionstore($dst, $key, ...$other_keys)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sunionstore(...\func_get_args());
=======
        return $this->initializeLazyObject()->sunionstore(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function time()
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->time(...\func_get_args());
=======
        return $this->initializeLazyObject()->time(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function ttl($key)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->ttl(...\func_get_args());
=======
        return $this->initializeLazyObject()->ttl(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function type($key)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->type(...\func_get_args());
=======
        return $this->initializeLazyObject()->type(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function unsubscribe($channel, ...$other_channels)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->unsubscribe(...\func_get_args());
=======
        return $this->initializeLazyObject()->unsubscribe(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function unlink($key, ...$other_keys)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->unlink(...\func_get_args());
=======
        return $this->initializeLazyObject()->unlink(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function unwatch()
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->unwatch(...\func_get_args());
=======
        return $this->initializeLazyObject()->unwatch(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function watch($key, ...$other_keys)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->watch(...\func_get_args());
=======
        return $this->initializeLazyObject()->watch(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function xack($str_key, $str_group, $arr_ids)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->xack(...\func_get_args());
=======
        return $this->initializeLazyObject()->xack(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function xadd($str_key, $str_id, $arr_fields, $i_maxlen = null, $boo_approximate = null)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->xadd(...\func_get_args());
=======
        return $this->initializeLazyObject()->xadd(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function xclaim($str_key, $str_group, $str_consumer, $i_min_idle, $arr_ids, $arr_opts = null)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->xclaim(...\func_get_args());
=======
        return $this->initializeLazyObject()->xclaim(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function xdel($str_key, $arr_ids)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->xdel(...\func_get_args());
=======
        return $this->initializeLazyObject()->xdel(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function xgroup($str_operation, $str_key = null, $str_arg1 = null, $str_arg2 = null, $str_arg3 = null)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->xgroup(...\func_get_args());
=======
        return $this->initializeLazyObject()->xgroup(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function xinfo($str_cmd, $str_key = null, $str_group = null)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->xinfo(...\func_get_args());
=======
        return $this->initializeLazyObject()->xinfo(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function xlen($key)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->xlen(...\func_get_args());
=======
        return $this->initializeLazyObject()->xlen(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function xpending($str_key, $str_group, $str_start = null, $str_end = null, $i_count = null, $str_consumer = null)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->xpending(...\func_get_args());
=======
        return $this->initializeLazyObject()->xpending(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function xrange($str_key, $str_start, $str_end, $i_count = null)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->xrange(...\func_get_args());
=======
        return $this->initializeLazyObject()->xrange(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function xread($arr_streams, $i_count = null, $i_block = null)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->xread(...\func_get_args());
=======
        return $this->initializeLazyObject()->xread(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function xreadgroup($str_group, $str_consumer, $arr_streams, $i_count = null, $i_block = null)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->xreadgroup(...\func_get_args());
=======
        return $this->initializeLazyObject()->xreadgroup(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function xrevrange($str_key, $str_start, $str_end, $i_count = null)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->xrevrange(...\func_get_args());
=======
        return $this->initializeLazyObject()->xrevrange(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function xtrim($str_key, $i_maxlen, $boo_approximate = null)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->xtrim(...\func_get_args());
=======
        return $this->initializeLazyObject()->xtrim(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zadd($key, $score, $value, ...$extra_args)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zadd(...\func_get_args());
=======
        return $this->initializeLazyObject()->zadd(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zcard($key)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zcard(...\func_get_args());
=======
        return $this->initializeLazyObject()->zcard(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zcount($key, $min, $max)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zcount(...\func_get_args());
=======
        return $this->initializeLazyObject()->zcount(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zincrby($key, $value, $member)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zincrby(...\func_get_args());
=======
        return $this->initializeLazyObject()->zincrby(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zinterstore($key, $keys, $weights = null, $aggregate = null)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zinterstore(...\func_get_args());
=======
        return $this->initializeLazyObject()->zinterstore(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zlexcount($key, $min, $max)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zlexcount(...\func_get_args());
=======
        return $this->initializeLazyObject()->zlexcount(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zpopmax($key)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zpopmax(...\func_get_args());
=======
        return $this->initializeLazyObject()->zpopmax(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zpopmin($key)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zpopmin(...\func_get_args());
=======
        return $this->initializeLazyObject()->zpopmin(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zrange($key, $start, $end, $scores = null)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zrange(...\func_get_args());
=======
        return $this->initializeLazyObject()->zrange(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zrangebylex($key, $min, $max, $offset = null, $limit = null)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zrangebylex(...\func_get_args());
=======
        return $this->initializeLazyObject()->zrangebylex(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zrangebyscore($key, $start, $end, $options = null)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zrangebyscore(...\func_get_args());
=======
        return $this->initializeLazyObject()->zrangebyscore(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zrank($key, $member)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zrank(...\func_get_args());
=======
        return $this->initializeLazyObject()->zrank(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zrem($key, $member, ...$other_members)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zrem(...\func_get_args());
=======
        return $this->initializeLazyObject()->zrem(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zremrangebylex($key, $min, $max)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zremrangebylex(...\func_get_args());
=======
        return $this->initializeLazyObject()->zremrangebylex(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zremrangebyrank($key, $min, $max)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zremrangebyrank(...\func_get_args());
=======
        return $this->initializeLazyObject()->zremrangebyrank(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zremrangebyscore($key, $min, $max)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zremrangebyscore(...\func_get_args());
=======
        return $this->initializeLazyObject()->zremrangebyscore(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zrevrange($key, $start, $end, $scores = null)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zrevrange(...\func_get_args());
=======
        return $this->initializeLazyObject()->zrevrange(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zrevrangebylex($key, $min, $max, $offset = null, $limit = null)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zrevrangebylex(...\func_get_args());
=======
        return $this->initializeLazyObject()->zrevrangebylex(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zrevrangebyscore($key, $start, $end, $options = null)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zrevrangebyscore(...\func_get_args());
=======
        return $this->initializeLazyObject()->zrevrangebyscore(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zrevrank($key, $member)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zrevrank(...\func_get_args());
=======
        return $this->initializeLazyObject()->zrevrank(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zscan($str_key, &$i_iterator, $str_pattern = null, $i_count = null)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zscan($str_key, $i_iterator, ...\array_slice(\func_get_args(), 2));
=======
        return $this->initializeLazyObject()->zscan($str_key, $i_iterator, ...\array_slice(\func_get_args(), 2));
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zscore($key, $member)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zscore(...\func_get_args());
=======
        return $this->initializeLazyObject()->zscore(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zunionstore($key, $keys, $weights = null, $aggregate = null)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zunionstore(...\func_get_args());
=======
        return $this->initializeLazyObject()->zunionstore(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }
}
