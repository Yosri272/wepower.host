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
class Redis5Proxy extends \Redis implements ResetInterface, LazyObjectInterface
{
<<<<<<< HEAD
    use LazyProxyTrait {
        resetLazyObject as reset;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [];

    public function __construct()
    {
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->__construct(...\func_get_args());
=======
    use RedisProxyTrait {
        resetLazyObject as reset;
    }

    public function __construct()
    {
        $this->initializeLazyObject()->__construct(...\func_get_args());
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

    public function acl($subcmd, ...$args)
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

    public function auth(#[\SensitiveParameter] $auth)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->auth(...\func_get_args());
=======
        return $this->initializeLazyObject()->auth(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function bgSave()
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->bgSave(...\func_get_args());
=======
        return $this->initializeLazyObject()->bgSave(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function bgrewriteaof()
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->bgrewriteaof(...\func_get_args());
=======
        return $this->initializeLazyObject()->bgrewriteaof(...\func_get_args());
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

    public function blPop($key, $timeout_or_key, ...$extra_args)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->blPop(...\func_get_args());
=======
        return $this->initializeLazyObject()->blPop(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function brPop($key, $timeout_or_key, ...$extra_args)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->brPop(...\func_get_args());
=======
        return $this->initializeLazyObject()->brPop(...\func_get_args());
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

    public function bzPopMax($key, $timeout_or_key, ...$extra_args)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->bzPopMax(...\func_get_args());
=======
        return $this->initializeLazyObject()->bzPopMax(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function bzPopMin($key, $timeout_or_key, ...$extra_args)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->bzPopMin(...\func_get_args());
=======
        return $this->initializeLazyObject()->bzPopMin(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function clearLastError()
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->clearLastError(...\func_get_args());
=======
        return $this->initializeLazyObject()->clearLastError(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function client($cmd, ...$args)
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

    public function command(...$args)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->command(...\func_get_args());
=======
        return $this->initializeLazyObject()->command(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function config($cmd, $key, $value = null)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->config(...\func_get_args());
=======
        return $this->initializeLazyObject()->config(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function connect($host, $port = null, $timeout = null, $retry_interval = null)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->connect(...\func_get_args());
=======
        return $this->initializeLazyObject()->connect(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function dbSize()
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->dbSize(...\func_get_args());
=======
        return $this->initializeLazyObject()->dbSize(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function debug($key)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->debug(...\func_get_args());
=======
        return $this->initializeLazyObject()->debug(...\func_get_args());
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

    public function decrBy($key, $value)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->decrBy(...\func_get_args());
=======
        return $this->initializeLazyObject()->decrBy(...\func_get_args());
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

    public function exists($key, ...$other_keys)
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

    public function expireAt($key, $timestamp)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->expireAt(...\func_get_args());
=======
        return $this->initializeLazyObject()->expireAt(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function flushAll($async = null)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->flushAll(...\func_get_args());
=======
        return $this->initializeLazyObject()->flushAll(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function flushDB($async = null)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->flushDB(...\func_get_args());
=======
        return $this->initializeLazyObject()->flushDB(...\func_get_args());
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

    public function getAuth()
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getAuth(...\func_get_args());
=======
        return $this->initializeLazyObject()->getAuth(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function getBit($key, $offset)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getBit(...\func_get_args());
=======
        return $this->initializeLazyObject()->getBit(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function getDBNum()
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getDBNum(...\func_get_args());
=======
        return $this->initializeLazyObject()->getDBNum(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function getHost()
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getHost(...\func_get_args());
=======
        return $this->initializeLazyObject()->getHost(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function getLastError()
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getLastError(...\func_get_args());
=======
        return $this->initializeLazyObject()->getLastError(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function getMode()
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getMode(...\func_get_args());
=======
        return $this->initializeLazyObject()->getMode(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function getOption($option)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getOption(...\func_get_args());
=======
        return $this->initializeLazyObject()->getOption(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function getPersistentID()
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getPersistentID(...\func_get_args());
=======
        return $this->initializeLazyObject()->getPersistentID(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function getPort()
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getPort(...\func_get_args());
=======
        return $this->initializeLazyObject()->getPort(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function getRange($key, $start, $end)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getRange(...\func_get_args());
=======
        return $this->initializeLazyObject()->getRange(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function getReadTimeout()
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getReadTimeout(...\func_get_args());
=======
        return $this->initializeLazyObject()->getReadTimeout(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function getSet($key, $value)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getSet(...\func_get_args());
=======
        return $this->initializeLazyObject()->getSet(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function getTimeout()
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getTimeout(...\func_get_args());
=======
        return $this->initializeLazyObject()->getTimeout(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function hDel($key, $member, ...$other_members)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hDel(...\func_get_args());
=======
        return $this->initializeLazyObject()->hDel(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function hExists($key, $member)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hExists(...\func_get_args());
=======
        return $this->initializeLazyObject()->hExists(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function hGet($key, $member)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hGet(...\func_get_args());
=======
        return $this->initializeLazyObject()->hGet(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function hGetAll($key)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hGetAll(...\func_get_args());
=======
        return $this->initializeLazyObject()->hGetAll(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function hIncrBy($key, $member, $value)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hIncrBy(...\func_get_args());
=======
        return $this->initializeLazyObject()->hIncrBy(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function hIncrByFloat($key, $member, $value)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hIncrByFloat(...\func_get_args());
=======
        return $this->initializeLazyObject()->hIncrByFloat(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function hKeys($key)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hKeys(...\func_get_args());
=======
        return $this->initializeLazyObject()->hKeys(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function hLen($key)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hLen(...\func_get_args());
=======
        return $this->initializeLazyObject()->hLen(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function hMget($key, $keys)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hMget(...\func_get_args());
=======
        return $this->initializeLazyObject()->hMget(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function hMset($key, $pairs)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hMset(...\func_get_args());
=======
        return $this->initializeLazyObject()->hMset(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function hSet($key, $member, $value)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hSet(...\func_get_args());
=======
        return $this->initializeLazyObject()->hSet(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function hSetNx($key, $member, $value)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hSetNx(...\func_get_args());
=======
        return $this->initializeLazyObject()->hSetNx(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function hStrLen($key, $member)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hStrLen(...\func_get_args());
=======
        return $this->initializeLazyObject()->hStrLen(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function hVals($key)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hVals(...\func_get_args());
=======
        return $this->initializeLazyObject()->hVals(...\func_get_args());
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

    public function incr($key)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->incr(...\func_get_args());
=======
        return $this->initializeLazyObject()->incr(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function incrBy($key, $value)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->incrBy(...\func_get_args());
=======
        return $this->initializeLazyObject()->incrBy(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function incrByFloat($key, $value)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->incrByFloat(...\func_get_args());
=======
        return $this->initializeLazyObject()->incrByFloat(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function info($option = null)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->info(...\func_get_args());
=======
        return $this->initializeLazyObject()->info(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function isConnected()
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->isConnected(...\func_get_args());
=======
        return $this->initializeLazyObject()->isConnected(...\func_get_args());
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

    public function lInsert($key, $position, $pivot, $value)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->lInsert(...\func_get_args());
=======
        return $this->initializeLazyObject()->lInsert(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function lLen($key)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->lLen(...\func_get_args());
=======
        return $this->initializeLazyObject()->lLen(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function lPop($key)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->lPop(...\func_get_args());
=======
        return $this->initializeLazyObject()->lPop(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function lPush($key, $value)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->lPush(...\func_get_args());
=======
        return $this->initializeLazyObject()->lPush(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function lPushx($key, $value)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->lPushx(...\func_get_args());
=======
        return $this->initializeLazyObject()->lPushx(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function lSet($key, $index, $value)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->lSet(...\func_get_args());
=======
        return $this->initializeLazyObject()->lSet(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function lastSave()
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->lastSave(...\func_get_args());
=======
        return $this->initializeLazyObject()->lastSave(...\func_get_args());
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

    public function lrange($key, $start, $end)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->lrange(...\func_get_args());
=======
        return $this->initializeLazyObject()->lrange(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function lrem($key, $value, $count)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->lrem(...\func_get_args());
=======
        return $this->initializeLazyObject()->lrem(...\func_get_args());
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

    public function migrate($host, $port, $key, $db, $timeout, $copy = null, $replace = null)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->migrate(...\func_get_args());
=======
        return $this->initializeLazyObject()->migrate(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function move($key, $dbindex)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->move(...\func_get_args());
=======
        return $this->initializeLazyObject()->move(...\func_get_args());
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

    public function multi($mode = null)
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

    public function pconnect($host, $port = null, $timeout = null)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->pconnect(...\func_get_args());
=======
        return $this->initializeLazyObject()->pconnect(...\func_get_args());
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

    public function pexpireAt($key, $timestamp)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->pexpireAt(...\func_get_args());
=======
        return $this->initializeLazyObject()->pexpireAt(...\func_get_args());
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

    public function ping()
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->ping(...\func_get_args());
=======
        return $this->initializeLazyObject()->ping(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function pipeline()
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->pipeline(...\func_get_args());
=======
        return $this->initializeLazyObject()->pipeline(...\func_get_args());
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

    public function pubsub($cmd, ...$args)
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

    public function rPop($key)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->rPop(...\func_get_args());
=======
        return $this->initializeLazyObject()->rPop(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function rPush($key, $value)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->rPush(...\func_get_args());
=======
        return $this->initializeLazyObject()->rPush(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function rPushx($key, $value)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->rPushx(...\func_get_args());
=======
        return $this->initializeLazyObject()->rPushx(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function randomKey()
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->randomKey(...\func_get_args());
=======
        return $this->initializeLazyObject()->randomKey(...\func_get_args());
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

    public function renameNx($key, $newkey)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->renameNx(...\func_get_args());
=======
        return $this->initializeLazyObject()->renameNx(...\func_get_args());
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

    public function rpoplpush($src, $dst)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->rpoplpush(...\func_get_args());
=======
        return $this->initializeLazyObject()->rpoplpush(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sAdd($key, $value)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sAdd(...\func_get_args());
=======
        return $this->initializeLazyObject()->sAdd(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sAddArray($key, $options)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sAddArray(...\func_get_args());
=======
        return $this->initializeLazyObject()->sAddArray(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sDiff($key, ...$other_keys)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sDiff(...\func_get_args());
=======
        return $this->initializeLazyObject()->sDiff(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sDiffStore($dst, $key, ...$other_keys)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sDiffStore(...\func_get_args());
=======
        return $this->initializeLazyObject()->sDiffStore(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sInter($key, ...$other_keys)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sInter(...\func_get_args());
=======
        return $this->initializeLazyObject()->sInter(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sInterStore($dst, $key, ...$other_keys)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sInterStore(...\func_get_args());
=======
        return $this->initializeLazyObject()->sInterStore(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sMembers($key)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sMembers(...\func_get_args());
=======
        return $this->initializeLazyObject()->sMembers(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sMisMember($key, $member, ...$other_members)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sMisMember(...\func_get_args());
=======
        return $this->initializeLazyObject()->sMisMember(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sMove($src, $dst, $value)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sMove(...\func_get_args());
=======
        return $this->initializeLazyObject()->sMove(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sPop($key)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sPop(...\func_get_args());
=======
        return $this->initializeLazyObject()->sPop(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sRandMember($key, $count = null)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sRandMember(...\func_get_args());
=======
        return $this->initializeLazyObject()->sRandMember(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sUnion($key, ...$other_keys)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sUnion(...\func_get_args());
=======
        return $this->initializeLazyObject()->sUnion(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sUnionStore($dst, $key, ...$other_keys)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sUnionStore(...\func_get_args());
=======
        return $this->initializeLazyObject()->sUnionStore(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function save()
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->save(...\func_get_args());
=======
        return $this->initializeLazyObject()->save(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function scan(&$i_iterator, $str_pattern = null, $i_count = null)
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

    public function script($cmd, ...$args)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->script(...\func_get_args());
=======
        return $this->initializeLazyObject()->script(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function select($dbindex)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->select(...\func_get_args());
=======
        return $this->initializeLazyObject()->select(...\func_get_args());
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

    public function setBit($key, $offset, $value)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->setBit(...\func_get_args());
=======
        return $this->initializeLazyObject()->setBit(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function setOption($option, $value)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->setOption(...\func_get_args());
=======
        return $this->initializeLazyObject()->setOption(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function setRange($key, $offset, $value)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->setRange(...\func_get_args());
=======
        return $this->initializeLazyObject()->setRange(...\func_get_args());
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

    public function sismember($key, $value)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sismember(...\func_get_args());
=======
        return $this->initializeLazyObject()->sismember(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function slaveof($host = null, $port = null)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->slaveof(...\func_get_args());
=======
        return $this->initializeLazyObject()->slaveof(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function slowlog($arg, $option = null)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->slowlog(...\func_get_args());
=======
        return $this->initializeLazyObject()->slowlog(...\func_get_args());
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

    public function sortAsc($key, $pattern = null, $get = null, $start = null, $end = null, $getList = null)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sortAsc(...\func_get_args());
=======
        return $this->initializeLazyObject()->sortAsc(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sortAscAlpha($key, $pattern = null, $get = null, $start = null, $end = null, $getList = null)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sortAscAlpha(...\func_get_args());
=======
        return $this->initializeLazyObject()->sortAscAlpha(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sortDesc($key, $pattern = null, $get = null, $start = null, $end = null, $getList = null)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sortDesc(...\func_get_args());
=======
        return $this->initializeLazyObject()->sortDesc(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sortDescAlpha($key, $pattern = null, $get = null, $start = null, $end = null, $getList = null)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sortDescAlpha(...\func_get_args());
=======
        return $this->initializeLazyObject()->sortDescAlpha(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function srem($key, $member, ...$other_members)
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

    public function swapdb($srcdb, $dstdb)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->swapdb(...\func_get_args());
=======
        return $this->initializeLazyObject()->swapdb(...\func_get_args());
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

    public function unlink($key, ...$other_keys)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->unlink(...\func_get_args());
=======
        return $this->initializeLazyObject()->unlink(...\func_get_args());
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

    public function unwatch()
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->unwatch(...\func_get_args());
=======
        return $this->initializeLazyObject()->unwatch(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function wait($numslaves, $timeout)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->wait(...\func_get_args());
=======
        return $this->initializeLazyObject()->wait(...\func_get_args());
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

    public function zAdd($key, $score, $value, ...$extra_args)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zAdd(...\func_get_args());
=======
        return $this->initializeLazyObject()->zAdd(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zCard($key)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zCard(...\func_get_args());
=======
        return $this->initializeLazyObject()->zCard(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zCount($key, $min, $max)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zCount(...\func_get_args());
=======
        return $this->initializeLazyObject()->zCount(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zIncrBy($key, $value, $member)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zIncrBy(...\func_get_args());
=======
        return $this->initializeLazyObject()->zIncrBy(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zLexCount($key, $min, $max)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zLexCount(...\func_get_args());
=======
        return $this->initializeLazyObject()->zLexCount(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zPopMax($key)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zPopMax(...\func_get_args());
=======
        return $this->initializeLazyObject()->zPopMax(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zPopMin($key)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zPopMin(...\func_get_args());
=======
        return $this->initializeLazyObject()->zPopMin(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zRange($key, $start, $end, $scores = null)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zRange(...\func_get_args());
=======
        return $this->initializeLazyObject()->zRange(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zRangeByLex($key, $min, $max, $offset = null, $limit = null)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zRangeByLex(...\func_get_args());
=======
        return $this->initializeLazyObject()->zRangeByLex(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zRangeByScore($key, $start, $end, $options = null)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zRangeByScore(...\func_get_args());
=======
        return $this->initializeLazyObject()->zRangeByScore(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zRank($key, $member)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zRank(...\func_get_args());
=======
        return $this->initializeLazyObject()->zRank(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zRem($key, $member, ...$other_members)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zRem(...\func_get_args());
=======
        return $this->initializeLazyObject()->zRem(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zRemRangeByLex($key, $min, $max)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zRemRangeByLex(...\func_get_args());
=======
        return $this->initializeLazyObject()->zRemRangeByLex(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zRemRangeByRank($key, $start, $end)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zRemRangeByRank(...\func_get_args());
=======
        return $this->initializeLazyObject()->zRemRangeByRank(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zRemRangeByScore($key, $min, $max)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zRemRangeByScore(...\func_get_args());
=======
        return $this->initializeLazyObject()->zRemRangeByScore(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zRevRange($key, $start, $end, $scores = null)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zRevRange(...\func_get_args());
=======
        return $this->initializeLazyObject()->zRevRange(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zRevRangeByLex($key, $min, $max, $offset = null, $limit = null)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zRevRangeByLex(...\func_get_args());
=======
        return $this->initializeLazyObject()->zRevRangeByLex(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zRevRangeByScore($key, $start, $end, $options = null)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zRevRangeByScore(...\func_get_args());
=======
        return $this->initializeLazyObject()->zRevRangeByScore(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zRevRank($key, $member)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zRevRank(...\func_get_args());
=======
        return $this->initializeLazyObject()->zRevRank(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zScore($key, $member)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zScore(...\func_get_args());
=======
        return $this->initializeLazyObject()->zScore(...\func_get_args());
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

    public function zscan($str_key, &$i_iterator, $str_pattern = null, $i_count = null)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zscan($str_key, $i_iterator, ...\array_slice(\func_get_args(), 2));
=======
        return $this->initializeLazyObject()->zscan($str_key, $i_iterator, ...\array_slice(\func_get_args(), 2));
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

    public function delete($key, ...$other_keys)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->delete(...\func_get_args());
=======
        return $this->initializeLazyObject()->delete(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function evaluate($script, $args = null, $num_keys = null)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->evaluate(...\func_get_args());
=======
        return $this->initializeLazyObject()->evaluate(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function evaluateSha($script_sha, $args = null, $num_keys = null)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->evaluateSha(...\func_get_args());
=======
        return $this->initializeLazyObject()->evaluateSha(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function getKeys($pattern)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getKeys(...\func_get_args());
=======
        return $this->initializeLazyObject()->getKeys(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function getMultiple($keys)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getMultiple(...\func_get_args());
=======
        return $this->initializeLazyObject()->getMultiple(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function lGet($key, $index)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->lGet(...\func_get_args());
=======
        return $this->initializeLazyObject()->lGet(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function lGetRange($key, $start, $end)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->lGetRange(...\func_get_args());
=======
        return $this->initializeLazyObject()->lGetRange(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function lRemove($key, $value, $count)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->lRemove(...\func_get_args());
=======
        return $this->initializeLazyObject()->lRemove(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function lSize($key)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->lSize(...\func_get_args());
=======
        return $this->initializeLazyObject()->lSize(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function listTrim($key, $start, $stop)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->listTrim(...\func_get_args());
=======
        return $this->initializeLazyObject()->listTrim(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function open($host, $port = null, $timeout = null, $retry_interval = null)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->open(...\func_get_args());
=======
        return $this->initializeLazyObject()->open(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function popen($host, $port = null, $timeout = null)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->popen(...\func_get_args());
=======
        return $this->initializeLazyObject()->popen(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function renameKey($key, $newkey)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->renameKey(...\func_get_args());
=======
        return $this->initializeLazyObject()->renameKey(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sContains($key, $value)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sContains(...\func_get_args());
=======
        return $this->initializeLazyObject()->sContains(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sGetMembers($key)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sGetMembers(...\func_get_args());
=======
        return $this->initializeLazyObject()->sGetMembers(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sRemove($key, $member, ...$other_members)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sRemove(...\func_get_args());
=======
        return $this->initializeLazyObject()->sRemove(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sSize($key)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sSize(...\func_get_args());
=======
        return $this->initializeLazyObject()->sSize(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sendEcho($msg)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sendEcho(...\func_get_args());
=======
        return $this->initializeLazyObject()->sendEcho(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function setTimeout($key, $timeout)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->setTimeout(...\func_get_args());
=======
        return $this->initializeLazyObject()->setTimeout(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function substr($key, $start, $end)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->substr(...\func_get_args());
=======
        return $this->initializeLazyObject()->substr(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zDelete($key, $member, ...$other_members)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zDelete(...\func_get_args());
=======
        return $this->initializeLazyObject()->zDelete(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zDeleteRangeByRank($key, $min, $max)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zDeleteRangeByRank(...\func_get_args());
=======
        return $this->initializeLazyObject()->zDeleteRangeByRank(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zDeleteRangeByScore($key, $min, $max)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zDeleteRangeByScore(...\func_get_args());
=======
        return $this->initializeLazyObject()->zDeleteRangeByScore(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zInter($key, $keys, $weights = null, $aggregate = null)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zInter(...\func_get_args());
=======
        return $this->initializeLazyObject()->zInter(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zRemove($key, $member, ...$other_members)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zRemove(...\func_get_args());
=======
        return $this->initializeLazyObject()->zRemove(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zRemoveRangeByScore($key, $min, $max)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zRemoveRangeByScore(...\func_get_args());
=======
        return $this->initializeLazyObject()->zRemoveRangeByScore(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zReverseRange($key, $start, $end, $scores = null)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zReverseRange(...\func_get_args());
=======
        return $this->initializeLazyObject()->zReverseRange(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zSize($key)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zSize(...\func_get_args());
=======
        return $this->initializeLazyObject()->zSize(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zUnion($key, $keys, $weights = null, $aggregate = null)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zUnion(...\func_get_args());
=======
        return $this->initializeLazyObject()->zUnion(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }
}
