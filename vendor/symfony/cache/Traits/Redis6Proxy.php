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
class Redis6Proxy extends \Redis implements ResetInterface, LazyObjectInterface
{
<<<<<<< HEAD
    use LazyProxyTrait {
        resetLazyObject as reset;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [];

    public function __construct($options = null)
    {
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->__construct(...\func_get_args());
=======
    use Redis6ProxyTrait;
    use RedisProxyTrait {
        resetLazyObject as reset;
    }

    public function __construct($options = null)
    {
        $this->initializeLazyObject()->__construct(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function _compress($value): string
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->_compress(...\func_get_args());
=======
        return $this->initializeLazyObject()->_compress(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function _uncompress($value): string
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->_uncompress(...\func_get_args());
=======
        return $this->initializeLazyObject()->_uncompress(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function _prefix($key): string
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->_prefix(...\func_get_args());
=======
        return $this->initializeLazyObject()->_prefix(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function _serialize($value): string
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->_serialize(...\func_get_args());
=======
        return $this->initializeLazyObject()->_serialize(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function _unserialize($value): mixed
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->_unserialize(...\func_get_args());
=======
        return $this->initializeLazyObject()->_unserialize(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function _pack($value): string
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->_pack(...\func_get_args());
=======
        return $this->initializeLazyObject()->_pack(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function _unpack($value): mixed
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->_unpack(...\func_get_args());
=======
        return $this->initializeLazyObject()->_unpack(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function acl($subcmd, ...$args): mixed
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->acl(...\func_get_args());
=======
        return $this->initializeLazyObject()->acl(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function append($key, $value): \Redis|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->append(...\func_get_args());
=======
        return $this->initializeLazyObject()->append(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function auth(#[\SensitiveParameter] $credentials): \Redis|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->auth(...\func_get_args());
=======
        return $this->initializeLazyObject()->auth(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function bgSave(): \Redis|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->bgSave(...\func_get_args());
=======
        return $this->initializeLazyObject()->bgSave(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function bgrewriteaof(): \Redis|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->bgrewriteaof(...\func_get_args());
=======
        return $this->initializeLazyObject()->bgrewriteaof(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function bitcount($key, $start = 0, $end = -1, $bybit = false): \Redis|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->bitcount(...\func_get_args());
=======
        return $this->initializeLazyObject()->bitcount(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function bitop($operation, $deskey, $srckey, ...$other_keys): \Redis|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->bitop(...\func_get_args());
=======
        return $this->initializeLazyObject()->bitop(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function bitpos($key, $bit, $start = 0, $end = -1, $bybit = false): \Redis|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->bitpos(...\func_get_args());
=======
        return $this->initializeLazyObject()->bitpos(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function blPop($key_or_keys, $timeout_or_key, ...$extra_args): \Redis|array|false|null
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->blPop(...\func_get_args());
=======
        return $this->initializeLazyObject()->blPop(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function brPop($key_or_keys, $timeout_or_key, ...$extra_args): \Redis|array|false|null
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->brPop(...\func_get_args());
=======
        return $this->initializeLazyObject()->brPop(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function brpoplpush($src, $dst, $timeout): \Redis|false|string
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->brpoplpush(...\func_get_args());
=======
        return $this->initializeLazyObject()->brpoplpush(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function bzPopMax($key, $timeout_or_key, ...$extra_args): \Redis|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->bzPopMax(...\func_get_args());
=======
        return $this->initializeLazyObject()->bzPopMax(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function bzPopMin($key, $timeout_or_key, ...$extra_args): \Redis|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->bzPopMin(...\func_get_args());
=======
        return $this->initializeLazyObject()->bzPopMin(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function bzmpop($timeout, $keys, $from, $count = 1): \Redis|array|false|null
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->bzmpop(...\func_get_args());
=======
        return $this->initializeLazyObject()->bzmpop(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zmpop($keys, $from, $count = 1): \Redis|array|false|null
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zmpop(...\func_get_args());
=======
        return $this->initializeLazyObject()->zmpop(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function blmpop($timeout, $keys, $from, $count = 1): \Redis|array|false|null
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->blmpop(...\func_get_args());
=======
        return $this->initializeLazyObject()->blmpop(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function lmpop($keys, $from, $count = 1): \Redis|array|false|null
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->lmpop(...\func_get_args());
=======
        return $this->initializeLazyObject()->lmpop(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function clearLastError(): bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->clearLastError(...\func_get_args());
=======
        return $this->initializeLazyObject()->clearLastError(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function client($opt, ...$args): mixed
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->client(...\func_get_args());
=======
        return $this->initializeLazyObject()->client(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function close(): bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->close(...\func_get_args());
=======
        return $this->initializeLazyObject()->close(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function command($opt = null, ...$args): mixed
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->command(...\func_get_args());
=======
        return $this->initializeLazyObject()->command(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function config($operation, $key_or_settings = null, $value = null): mixed
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->config(...\func_get_args());
=======
        return $this->initializeLazyObject()->config(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function connect($host, $port = 6379, $timeout = 0, $persistent_id = null, $retry_interval = 0, $read_timeout = 0, $context = null): bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->connect(...\func_get_args());
=======
        return $this->initializeLazyObject()->connect(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function copy($src, $dst, $options = null): \Redis|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->copy(...\func_get_args());
=======
        return $this->initializeLazyObject()->copy(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function dbSize(): \Redis|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->dbSize(...\func_get_args());
=======
        return $this->initializeLazyObject()->dbSize(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function debug($key): \Redis|string
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->debug(...\func_get_args());
=======
        return $this->initializeLazyObject()->debug(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function decr($key, $by = 1): \Redis|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->decr(...\func_get_args());
=======
        return $this->initializeLazyObject()->decr(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function decrBy($key, $value): \Redis|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->decrBy(...\func_get_args());
=======
        return $this->initializeLazyObject()->decrBy(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function del($key, ...$other_keys): \Redis|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->del(...\func_get_args());
=======
        return $this->initializeLazyObject()->del(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function delete($key, ...$other_keys): \Redis|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->delete(...\func_get_args());
=======
        return $this->initializeLazyObject()->delete(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function discard(): \Redis|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->discard(...\func_get_args());
    }

    public function dump($key): \Redis|string
    {
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->dump(...\func_get_args());
=======
        return $this->initializeLazyObject()->discard(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function echo($str): \Redis|false|string
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->echo(...\func_get_args());
=======
        return $this->initializeLazyObject()->echo(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function eval($script, $args = [], $num_keys = 0): mixed
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->eval(...\func_get_args());
=======
        return $this->initializeLazyObject()->eval(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function eval_ro($script_sha, $args = [], $num_keys = 0): mixed
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->eval_ro(...\func_get_args());
=======
        return $this->initializeLazyObject()->eval_ro(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function evalsha($sha1, $args = [], $num_keys = 0): mixed
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->evalsha(...\func_get_args());
=======
        return $this->initializeLazyObject()->evalsha(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function evalsha_ro($sha1, $args = [], $num_keys = 0): mixed
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->evalsha_ro(...\func_get_args());
=======
        return $this->initializeLazyObject()->evalsha_ro(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function exec(): \Redis|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->exec(...\func_get_args());
=======
        return $this->initializeLazyObject()->exec(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function exists($key, ...$other_keys): \Redis|bool|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->exists(...\func_get_args());
=======
        return $this->initializeLazyObject()->exists(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function expire($key, $timeout, $mode = null): \Redis|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->expire(...\func_get_args());
=======
        return $this->initializeLazyObject()->expire(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function expireAt($key, $timestamp, $mode = null): \Redis|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->expireAt(...\func_get_args());
=======
        return $this->initializeLazyObject()->expireAt(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function failover($to = null, $abort = false, $timeout = 0): \Redis|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->failover(...\func_get_args());
=======
        return $this->initializeLazyObject()->failover(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function expiretime($key): \Redis|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->expiretime(...\func_get_args());
=======
        return $this->initializeLazyObject()->expiretime(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function pexpiretime($key): \Redis|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->pexpiretime(...\func_get_args());
=======
        return $this->initializeLazyObject()->pexpiretime(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function fcall($fn, $keys = [], $args = []): mixed
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->fcall(...\func_get_args());
=======
        return $this->initializeLazyObject()->fcall(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function fcall_ro($fn, $keys = [], $args = []): mixed
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->fcall_ro(...\func_get_args());
=======
        return $this->initializeLazyObject()->fcall_ro(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function flushAll($sync = null): \Redis|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->flushAll(...\func_get_args());
=======
        return $this->initializeLazyObject()->flushAll(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function flushDB($sync = null): \Redis|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->flushDB(...\func_get_args());
=======
        return $this->initializeLazyObject()->flushDB(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function function($operation, ...$args): \Redis|array|bool|string
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->function(...\func_get_args());
=======
        return $this->initializeLazyObject()->function(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function geoadd($key, $lng, $lat, $member, ...$other_triples_and_options): \Redis|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->geoadd(...\func_get_args());
=======
        return $this->initializeLazyObject()->geoadd(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function geodist($key, $src, $dst, $unit = null): \Redis|false|float
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->geodist(...\func_get_args());
=======
        return $this->initializeLazyObject()->geodist(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function geohash($key, $member, ...$other_members): \Redis|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->geohash(...\func_get_args());
=======
        return $this->initializeLazyObject()->geohash(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function geopos($key, $member, ...$other_members): \Redis|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->geopos(...\func_get_args());
=======
        return $this->initializeLazyObject()->geopos(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function georadius($key, $lng, $lat, $radius, $unit, $options = []): mixed
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->georadius(...\func_get_args());
=======
        return $this->initializeLazyObject()->georadius(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function georadius_ro($key, $lng, $lat, $radius, $unit, $options = []): mixed
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->georadius_ro(...\func_get_args());
=======
        return $this->initializeLazyObject()->georadius_ro(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function georadiusbymember($key, $member, $radius, $unit, $options = []): mixed
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->georadiusbymember(...\func_get_args());
=======
        return $this->initializeLazyObject()->georadiusbymember(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function georadiusbymember_ro($key, $member, $radius, $unit, $options = []): mixed
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->georadiusbymember_ro(...\func_get_args());
=======
        return $this->initializeLazyObject()->georadiusbymember_ro(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function geosearch($key, $position, $shape, $unit, $options = []): array
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->geosearch(...\func_get_args());
=======
        return $this->initializeLazyObject()->geosearch(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function geosearchstore($dst, $src, $position, $shape, $unit, $options = []): \Redis|array|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->geosearchstore(...\func_get_args());
=======
        return $this->initializeLazyObject()->geosearchstore(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function get($key): mixed
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->get(...\func_get_args());
=======
        return $this->initializeLazyObject()->get(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function getAuth(): mixed
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getAuth(...\func_get_args());
=======
        return $this->initializeLazyObject()->getAuth(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function getBit($key, $idx): \Redis|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getBit(...\func_get_args());
=======
        return $this->initializeLazyObject()->getBit(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function getEx($key, $options = []): \Redis|bool|string
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getEx(...\func_get_args());
=======
        return $this->initializeLazyObject()->getEx(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function getDBNum(): int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getDBNum(...\func_get_args());
=======
        return $this->initializeLazyObject()->getDBNum(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function getDel($key): \Redis|bool|string
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getDel(...\func_get_args());
=======
        return $this->initializeLazyObject()->getDel(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function getHost(): string
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getHost(...\func_get_args());
=======
        return $this->initializeLazyObject()->getHost(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function getLastError(): ?string
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getLastError(...\func_get_args());
=======
        return $this->initializeLazyObject()->getLastError(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function getMode(): int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getMode(...\func_get_args());
=======
        return $this->initializeLazyObject()->getMode(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function getOption($option): mixed
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getOption(...\func_get_args());
=======
        return $this->initializeLazyObject()->getOption(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function getPersistentID(): ?string
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getPersistentID(...\func_get_args());
=======
        return $this->initializeLazyObject()->getPersistentID(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function getPort(): int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getPort(...\func_get_args());
=======
        return $this->initializeLazyObject()->getPort(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function getRange($key, $start, $end): \Redis|false|string
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getRange(...\func_get_args());
=======
        return $this->initializeLazyObject()->getRange(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function lcs($key1, $key2, $options = null): \Redis|array|false|int|string
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->lcs(...\func_get_args());
=======
        return $this->initializeLazyObject()->lcs(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function getReadTimeout(): float
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getReadTimeout(...\func_get_args());
=======
        return $this->initializeLazyObject()->getReadTimeout(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function getset($key, $value): \Redis|false|string
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getset(...\func_get_args());
=======
        return $this->initializeLazyObject()->getset(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function getTimeout(): false|float
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getTimeout(...\func_get_args());
=======
        return $this->initializeLazyObject()->getTimeout(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function getTransferredBytes(): array
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getTransferredBytes(...\func_get_args());
=======
        return $this->initializeLazyObject()->getTransferredBytes(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function clearTransferredBytes(): void
    {
<<<<<<< HEAD
        ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->clearTransferredBytes(...\func_get_args());
=======
        $this->initializeLazyObject()->clearTransferredBytes(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function hDel($key, $field, ...$other_fields): \Redis|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hDel(...\func_get_args());
=======
        return $this->initializeLazyObject()->hDel(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function hExists($key, $field): \Redis|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hExists(...\func_get_args());
=======
        return $this->initializeLazyObject()->hExists(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function hGet($key, $member): mixed
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hGet(...\func_get_args());
=======
        return $this->initializeLazyObject()->hGet(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function hGetAll($key): \Redis|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hGetAll(...\func_get_args());
=======
        return $this->initializeLazyObject()->hGetAll(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function hIncrBy($key, $field, $value): \Redis|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hIncrBy(...\func_get_args());
=======
        return $this->initializeLazyObject()->hIncrBy(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function hIncrByFloat($key, $field, $value): \Redis|false|float
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hIncrByFloat(...\func_get_args());
=======
        return $this->initializeLazyObject()->hIncrByFloat(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function hKeys($key): \Redis|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hKeys(...\func_get_args());
=======
        return $this->initializeLazyObject()->hKeys(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function hLen($key): \Redis|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hLen(...\func_get_args());
=======
        return $this->initializeLazyObject()->hLen(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function hMget($key, $fields): \Redis|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hMget(...\func_get_args());
=======
        return $this->initializeLazyObject()->hMget(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function hMset($key, $fieldvals): \Redis|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hMset(...\func_get_args());
    }

    public function hRandField($key, $options = null): \Redis|array|string
    {
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hRandField(...\func_get_args());
    }

    public function hSet($key, $member, $value): \Redis|false|int
    {
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hSet(...\func_get_args());
=======
        return $this->initializeLazyObject()->hMset(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function hSetNx($key, $field, $value): \Redis|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hSetNx(...\func_get_args());
=======
        return $this->initializeLazyObject()->hSetNx(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function hStrLen($key, $field): \Redis|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hStrLen(...\func_get_args());
=======
        return $this->initializeLazyObject()->hStrLen(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function hVals($key): \Redis|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hVals(...\func_get_args());
=======
        return $this->initializeLazyObject()->hVals(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function hscan($key, &$iterator, $pattern = null, $count = 0): \Redis|array|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hscan($key, $iterator, ...\array_slice(\func_get_args(), 2));
=======
        return $this->initializeLazyObject()->hscan($key, $iterator, ...\array_slice(\func_get_args(), 2));
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function incr($key, $by = 1): \Redis|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->incr(...\func_get_args());
=======
        return $this->initializeLazyObject()->incr(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function incrBy($key, $value): \Redis|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->incrBy(...\func_get_args());
=======
        return $this->initializeLazyObject()->incrBy(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function incrByFloat($key, $value): \Redis|false|float
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->incrByFloat(...\func_get_args());
=======
        return $this->initializeLazyObject()->incrByFloat(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function info(...$sections): \Redis|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->info(...\func_get_args());
=======
        return $this->initializeLazyObject()->info(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function isConnected(): bool
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

    public function lInsert($key, $pos, $pivot, $value)
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->lInsert(...\func_get_args());
=======
        return $this->initializeLazyObject()->lInsert(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function lLen($key): \Redis|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->lLen(...\func_get_args());
=======
        return $this->initializeLazyObject()->lLen(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function lMove($src, $dst, $wherefrom, $whereto): \Redis|false|string
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->lMove(...\func_get_args());
=======
        return $this->initializeLazyObject()->lMove(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function blmove($src, $dst, $wherefrom, $whereto, $timeout): \Redis|false|string
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->blmove(...\func_get_args());
=======
        return $this->initializeLazyObject()->blmove(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function lPop($key, $count = 0): \Redis|array|bool|string
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->lPop(...\func_get_args());
=======
        return $this->initializeLazyObject()->lPop(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function lPos($key, $value, $options = null): \Redis|array|bool|int|null
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->lPos(...\func_get_args());
=======
        return $this->initializeLazyObject()->lPos(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function lPush($key, ...$elements): \Redis|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->lPush(...\func_get_args());
=======
        return $this->initializeLazyObject()->lPush(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function rPush($key, ...$elements): \Redis|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->rPush(...\func_get_args());
=======
        return $this->initializeLazyObject()->rPush(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function lPushx($key, $value): \Redis|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->lPushx(...\func_get_args());
=======
        return $this->initializeLazyObject()->lPushx(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function rPushx($key, $value): \Redis|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->rPushx(...\func_get_args());
=======
        return $this->initializeLazyObject()->rPushx(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function lSet($key, $index, $value): \Redis|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->lSet(...\func_get_args());
=======
        return $this->initializeLazyObject()->lSet(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function lastSave(): int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->lastSave(...\func_get_args());
=======
        return $this->initializeLazyObject()->lastSave(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function lindex($key, $index): mixed
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->lindex(...\func_get_args());
=======
        return $this->initializeLazyObject()->lindex(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function lrange($key, $start, $end): \Redis|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->lrange(...\func_get_args());
=======
        return $this->initializeLazyObject()->lrange(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function lrem($key, $value, $count = 0): \Redis|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->lrem(...\func_get_args());
=======
        return $this->initializeLazyObject()->lrem(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function ltrim($key, $start, $end): \Redis|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->ltrim(...\func_get_args());
    }

    public function mget($keys): \Redis|array
    {
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->mget(...\func_get_args());
=======
        return $this->initializeLazyObject()->ltrim(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function migrate($host, $port, $key, $dstdb, $timeout, $copy = false, $replace = false, #[\SensitiveParameter] $credentials = null): \Redis|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->migrate(...\func_get_args());
=======
        return $this->initializeLazyObject()->migrate(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function move($key, $index): \Redis|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->move(...\func_get_args());
=======
        return $this->initializeLazyObject()->move(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function mset($key_values): \Redis|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->mset(...\func_get_args());
=======
        return $this->initializeLazyObject()->mset(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function msetnx($key_values): \Redis|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->msetnx(...\func_get_args());
=======
        return $this->initializeLazyObject()->msetnx(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function multi($value = \Redis::MULTI): \Redis|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->multi(...\func_get_args());
=======
        return $this->initializeLazyObject()->multi(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function object($subcommand, $key): \Redis|false|int|string
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->object(...\func_get_args());
=======
        return $this->initializeLazyObject()->object(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function open($host, $port = 6379, $timeout = 0, $persistent_id = null, $retry_interval = 0, $read_timeout = 0, $context = null): bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->open(...\func_get_args());
=======
        return $this->initializeLazyObject()->open(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function pconnect($host, $port = 6379, $timeout = 0, $persistent_id = null, $retry_interval = 0, $read_timeout = 0, $context = null): bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->pconnect(...\func_get_args());
=======
        return $this->initializeLazyObject()->pconnect(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function persist($key): \Redis|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->persist(...\func_get_args());
=======
        return $this->initializeLazyObject()->persist(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function pexpire($key, $timeout, $mode = null): bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->pexpire(...\func_get_args());
=======
        return $this->initializeLazyObject()->pexpire(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function pexpireAt($key, $timestamp, $mode = null): \Redis|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->pexpireAt(...\func_get_args());
=======
        return $this->initializeLazyObject()->pexpireAt(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function pfadd($key, $elements): \Redis|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->pfadd(...\func_get_args());
=======
        return $this->initializeLazyObject()->pfadd(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function pfcount($key_or_keys): \Redis|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->pfcount(...\func_get_args());
=======
        return $this->initializeLazyObject()->pfcount(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function pfmerge($dst, $srckeys): \Redis|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->pfmerge(...\func_get_args());
=======
        return $this->initializeLazyObject()->pfmerge(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function ping($message = null): \Redis|bool|string
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->ping(...\func_get_args());
=======
        return $this->initializeLazyObject()->ping(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function pipeline(): \Redis|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->pipeline(...\func_get_args());
=======
        return $this->initializeLazyObject()->pipeline(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function popen($host, $port = 6379, $timeout = 0, $persistent_id = null, $retry_interval = 0, $read_timeout = 0, $context = null): bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->popen(...\func_get_args());
=======
        return $this->initializeLazyObject()->popen(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function psetex($key, $expire, $value): \Redis|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->psetex(...\func_get_args());
=======
        return $this->initializeLazyObject()->psetex(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function psubscribe($patterns, $cb): bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->psubscribe(...\func_get_args());
=======
        return $this->initializeLazyObject()->psubscribe(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function pttl($key): \Redis|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->pttl(...\func_get_args());
=======
        return $this->initializeLazyObject()->pttl(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function publish($channel, $message): \Redis|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->publish(...\func_get_args());
=======
        return $this->initializeLazyObject()->publish(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function pubsub($command, $arg = null): mixed
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->pubsub(...\func_get_args());
=======
        return $this->initializeLazyObject()->pubsub(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function punsubscribe($patterns): \Redis|array|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->punsubscribe(...\func_get_args());
=======
        return $this->initializeLazyObject()->punsubscribe(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function rPop($key, $count = 0): \Redis|array|bool|string
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->rPop(...\func_get_args());
=======
        return $this->initializeLazyObject()->rPop(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function randomKey(): \Redis|false|string
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->randomKey(...\func_get_args());
=======
        return $this->initializeLazyObject()->randomKey(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function rawcommand($command, ...$args): mixed
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->rawcommand(...\func_get_args());
=======
        return $this->initializeLazyObject()->rawcommand(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function rename($old_name, $new_name): \Redis|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->rename(...\func_get_args());
=======
        return $this->initializeLazyObject()->rename(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function renameNx($key_src, $key_dst): \Redis|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->renameNx(...\func_get_args());
=======
        return $this->initializeLazyObject()->renameNx(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function restore($key, $ttl, $value, $options = null): \Redis|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->restore(...\func_get_args());
=======
        return $this->initializeLazyObject()->restore(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function role(): mixed
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->role(...\func_get_args());
=======
        return $this->initializeLazyObject()->role(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function rpoplpush($srckey, $dstkey): \Redis|false|string
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->rpoplpush(...\func_get_args());
=======
        return $this->initializeLazyObject()->rpoplpush(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sAdd($key, $value, ...$other_values): \Redis|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sAdd(...\func_get_args());
=======
        return $this->initializeLazyObject()->sAdd(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sAddArray($key, $values): int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sAddArray(...\func_get_args());
=======
        return $this->initializeLazyObject()->sAddArray(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sDiff($key, ...$other_keys): \Redis|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sDiff(...\func_get_args());
=======
        return $this->initializeLazyObject()->sDiff(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sDiffStore($dst, $key, ...$other_keys): \Redis|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sDiffStore(...\func_get_args());
=======
        return $this->initializeLazyObject()->sDiffStore(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sInter($key, ...$other_keys): \Redis|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sInter(...\func_get_args());
=======
        return $this->initializeLazyObject()->sInter(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sintercard($keys, $limit = -1): \Redis|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sintercard(...\func_get_args());
=======
        return $this->initializeLazyObject()->sintercard(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sInterStore($key, ...$other_keys): \Redis|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sInterStore(...\func_get_args());
=======
        return $this->initializeLazyObject()->sInterStore(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sMembers($key): \Redis|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sMembers(...\func_get_args());
=======
        return $this->initializeLazyObject()->sMembers(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sMisMember($key, $member, ...$other_members): \Redis|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sMisMember(...\func_get_args());
=======
        return $this->initializeLazyObject()->sMisMember(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sMove($src, $dst, $value): \Redis|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sMove(...\func_get_args());
=======
        return $this->initializeLazyObject()->sMove(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sPop($key, $count = 0): \Redis|array|false|string
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sPop(...\func_get_args());
    }

    public function sRandMember($key, $count = 0): \Redis|array|false|string
    {
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sRandMember(...\func_get_args());
=======
        return $this->initializeLazyObject()->sPop(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sUnion($key, ...$other_keys): \Redis|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sUnion(...\func_get_args());
=======
        return $this->initializeLazyObject()->sUnion(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sUnionStore($dst, $key, ...$other_keys): \Redis|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sUnionStore(...\func_get_args());
=======
        return $this->initializeLazyObject()->sUnionStore(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function save(): \Redis|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->save(...\func_get_args());
=======
        return $this->initializeLazyObject()->save(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function scan(&$iterator, $pattern = null, $count = 0, $type = null): array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->scan($iterator, ...\array_slice(\func_get_args(), 1));
=======
        return $this->initializeLazyObject()->scan($iterator, ...\array_slice(\func_get_args(), 1));
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function scard($key): \Redis|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->scard(...\func_get_args());
=======
        return $this->initializeLazyObject()->scard(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function script($command, ...$args): mixed
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->script(...\func_get_args());
=======
        return $this->initializeLazyObject()->script(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function select($db): \Redis|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->select(...\func_get_args());
=======
        return $this->initializeLazyObject()->select(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function set($key, $value, $options = null): \Redis|bool|string
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->set(...\func_get_args());
=======
        return $this->initializeLazyObject()->set(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function setBit($key, $idx, $value): \Redis|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->setBit(...\func_get_args());
=======
        return $this->initializeLazyObject()->setBit(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function setRange($key, $index, $value): \Redis|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->setRange(...\func_get_args());
=======
        return $this->initializeLazyObject()->setRange(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function setOption($option, $value): bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->setOption(...\func_get_args());
=======
        return $this->initializeLazyObject()->setOption(...\func_get_args());
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

    public function setnx($key, $value): \Redis|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->setnx(...\func_get_args());
=======
        return $this->initializeLazyObject()->setnx(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sismember($key, $value): \Redis|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sismember(...\func_get_args());
=======
        return $this->initializeLazyObject()->sismember(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function slaveof($host = null, $port = 6379): \Redis|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->slaveof(...\func_get_args());
=======
        return $this->initializeLazyObject()->slaveof(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function replicaof($host = null, $port = 6379): \Redis|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->replicaof(...\func_get_args());
=======
        return $this->initializeLazyObject()->replicaof(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function touch($key_or_array, ...$more_keys): \Redis|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->touch(...\func_get_args());
=======
        return $this->initializeLazyObject()->touch(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function slowlog($operation, $length = 0): mixed
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->slowlog(...\func_get_args());
=======
        return $this->initializeLazyObject()->slowlog(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sort($key, $options = null): mixed
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sort(...\func_get_args());
=======
        return $this->initializeLazyObject()->sort(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sort_ro($key, $options = null): mixed
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sort_ro(...\func_get_args());
=======
        return $this->initializeLazyObject()->sort_ro(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sortAsc($key, $pattern = null, $get = null, $offset = -1, $count = -1, $store = null): array
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sortAsc(...\func_get_args());
=======
        return $this->initializeLazyObject()->sortAsc(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sortAscAlpha($key, $pattern = null, $get = null, $offset = -1, $count = -1, $store = null): array
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sortAscAlpha(...\func_get_args());
=======
        return $this->initializeLazyObject()->sortAscAlpha(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sortDesc($key, $pattern = null, $get = null, $offset = -1, $count = -1, $store = null): array
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sortDesc(...\func_get_args());
=======
        return $this->initializeLazyObject()->sortDesc(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sortDescAlpha($key, $pattern = null, $get = null, $offset = -1, $count = -1, $store = null): array
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sortDescAlpha(...\func_get_args());
=======
        return $this->initializeLazyObject()->sortDescAlpha(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function srem($key, $value, ...$other_values): \Redis|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->srem(...\func_get_args());
=======
        return $this->initializeLazyObject()->srem(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sscan($key, &$iterator, $pattern = null, $count = 0): array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sscan($key, $iterator, ...\array_slice(\func_get_args(), 2));
=======
        return $this->initializeLazyObject()->sscan($key, $iterator, ...\array_slice(\func_get_args(), 2));
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function ssubscribe($channels, $cb): bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->ssubscribe(...\func_get_args());
=======
        return $this->initializeLazyObject()->ssubscribe(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function strlen($key): \Redis|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->strlen(...\func_get_args());
=======
        return $this->initializeLazyObject()->strlen(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function subscribe($channels, $cb): bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->subscribe(...\func_get_args());
=======
        return $this->initializeLazyObject()->subscribe(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sunsubscribe($channels): \Redis|array|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sunsubscribe(...\func_get_args());
=======
        return $this->initializeLazyObject()->sunsubscribe(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function swapdb($src, $dst): \Redis|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->swapdb(...\func_get_args());
=======
        return $this->initializeLazyObject()->swapdb(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function time(): \Redis|array
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->time(...\func_get_args());
=======
        return $this->initializeLazyObject()->time(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function ttl($key): \Redis|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->ttl(...\func_get_args());
=======
        return $this->initializeLazyObject()->ttl(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function type($key): \Redis|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->type(...\func_get_args());
=======
        return $this->initializeLazyObject()->type(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function unlink($key, ...$other_keys): \Redis|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->unlink(...\func_get_args());
=======
        return $this->initializeLazyObject()->unlink(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function unsubscribe($channels): \Redis|array|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->unsubscribe(...\func_get_args());
=======
        return $this->initializeLazyObject()->unsubscribe(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function unwatch(): \Redis|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->unwatch(...\func_get_args());
=======
        return $this->initializeLazyObject()->unwatch(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function watch($key, ...$other_keys): \Redis|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->watch(...\func_get_args());
=======
        return $this->initializeLazyObject()->watch(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function wait($numreplicas, $timeout): false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->wait(...\func_get_args());
=======
        return $this->initializeLazyObject()->wait(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function xack($key, $group, $ids): false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->xack(...\func_get_args());
=======
        return $this->initializeLazyObject()->xack(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function xadd($key, $id, $values, $maxlen = 0, $approx = false, $nomkstream = false): \Redis|false|string
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->xadd(...\func_get_args());
=======
        return $this->initializeLazyObject()->xadd(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function xautoclaim($key, $group, $consumer, $min_idle, $start, $count = -1, $justid = false): \Redis|array|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->xautoclaim(...\func_get_args());
=======
        return $this->initializeLazyObject()->xautoclaim(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function xclaim($key, $group, $consumer, $min_idle, $ids, $options): \Redis|array|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->xclaim(...\func_get_args());
=======
        return $this->initializeLazyObject()->xclaim(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function xdel($key, $ids): \Redis|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->xdel(...\func_get_args());
=======
        return $this->initializeLazyObject()->xdel(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function xgroup($operation, $key = null, $group = null, $id_or_consumer = null, $mkstream = false, $entries_read = -2): mixed
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->xgroup(...\func_get_args());
=======
        return $this->initializeLazyObject()->xgroup(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function xinfo($operation, $arg1 = null, $arg2 = null, $count = -1): mixed
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->xinfo(...\func_get_args());
=======
        return $this->initializeLazyObject()->xinfo(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function xlen($key): \Redis|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->xlen(...\func_get_args());
=======
        return $this->initializeLazyObject()->xlen(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function xpending($key, $group, $start = null, $end = null, $count = -1, $consumer = null): \Redis|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->xpending(...\func_get_args());
=======
        return $this->initializeLazyObject()->xpending(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function xrange($key, $start, $end, $count = -1): \Redis|array|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->xrange(...\func_get_args());
=======
        return $this->initializeLazyObject()->xrange(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function xread($streams, $count = -1, $block = -1): \Redis|array|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->xread(...\func_get_args());
=======
        return $this->initializeLazyObject()->xread(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function xreadgroup($group, $consumer, $streams, $count = 1, $block = 1): \Redis|array|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->xreadgroup(...\func_get_args());
=======
        return $this->initializeLazyObject()->xreadgroup(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function xrevrange($key, $end, $start, $count = -1): \Redis|array|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->xrevrange(...\func_get_args());
=======
        return $this->initializeLazyObject()->xrevrange(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function xtrim($key, $threshold, $approx = false, $minid = false, $limit = -1): \Redis|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->xtrim(...\func_get_args());
=======
        return $this->initializeLazyObject()->xtrim(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zAdd($key, $score_or_options, ...$more_scores_and_mems): \Redis|false|float|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zAdd(...\func_get_args());
=======
        return $this->initializeLazyObject()->zAdd(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zCard($key): \Redis|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zCard(...\func_get_args());
=======
        return $this->initializeLazyObject()->zCard(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zCount($key, $start, $end): \Redis|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zCount(...\func_get_args());
=======
        return $this->initializeLazyObject()->zCount(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zIncrBy($key, $value, $member): \Redis|false|float
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zIncrBy(...\func_get_args());
=======
        return $this->initializeLazyObject()->zIncrBy(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zLexCount($key, $min, $max): \Redis|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zLexCount(...\func_get_args());
=======
        return $this->initializeLazyObject()->zLexCount(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zMscore($key, $member, ...$other_members): \Redis|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zMscore(...\func_get_args());
=======
        return $this->initializeLazyObject()->zMscore(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zPopMax($key, $count = null): \Redis|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zPopMax(...\func_get_args());
=======
        return $this->initializeLazyObject()->zPopMax(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zPopMin($key, $count = null): \Redis|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zPopMin(...\func_get_args());
=======
        return $this->initializeLazyObject()->zPopMin(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zRange($key, $start, $end, $options = null): \Redis|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zRange(...\func_get_args());
=======
        return $this->initializeLazyObject()->zRange(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zRangeByLex($key, $min, $max, $offset = -1, $count = -1): \Redis|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zRangeByLex(...\func_get_args());
=======
        return $this->initializeLazyObject()->zRangeByLex(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zRangeByScore($key, $start, $end, $options = []): \Redis|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zRangeByScore(...\func_get_args());
=======
        return $this->initializeLazyObject()->zRangeByScore(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zrangestore($dstkey, $srckey, $start, $end, $options = null): \Redis|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zrangestore(...\func_get_args());
=======
        return $this->initializeLazyObject()->zrangestore(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zRandMember($key, $options = null): \Redis|array|string
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zRandMember(...\func_get_args());
=======
        return $this->initializeLazyObject()->zRandMember(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zRank($key, $member): \Redis|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zRank(...\func_get_args());
=======
        return $this->initializeLazyObject()->zRank(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zRem($key, $member, ...$other_members): \Redis|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zRem(...\func_get_args());
=======
        return $this->initializeLazyObject()->zRem(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zRemRangeByLex($key, $min, $max): \Redis|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zRemRangeByLex(...\func_get_args());
=======
        return $this->initializeLazyObject()->zRemRangeByLex(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zRemRangeByRank($key, $start, $end): \Redis|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zRemRangeByRank(...\func_get_args());
=======
        return $this->initializeLazyObject()->zRemRangeByRank(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zRemRangeByScore($key, $start, $end): \Redis|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zRemRangeByScore(...\func_get_args());
=======
        return $this->initializeLazyObject()->zRemRangeByScore(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zRevRange($key, $start, $end, $scores = null): \Redis|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zRevRange(...\func_get_args());
=======
        return $this->initializeLazyObject()->zRevRange(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zRevRangeByLex($key, $max, $min, $offset = -1, $count = -1): \Redis|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zRevRangeByLex(...\func_get_args());
=======
        return $this->initializeLazyObject()->zRevRangeByLex(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zRevRangeByScore($key, $max, $min, $options = []): \Redis|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zRevRangeByScore(...\func_get_args());
=======
        return $this->initializeLazyObject()->zRevRangeByScore(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zRevRank($key, $member): \Redis|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zRevRank(...\func_get_args());
=======
        return $this->initializeLazyObject()->zRevRank(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zScore($key, $member): \Redis|false|float
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zScore(...\func_get_args());
=======
        return $this->initializeLazyObject()->zScore(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zdiff($keys, $options = null): \Redis|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zdiff(...\func_get_args());
=======
        return $this->initializeLazyObject()->zdiff(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zdiffstore($dst, $keys): \Redis|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zdiffstore(...\func_get_args());
=======
        return $this->initializeLazyObject()->zdiffstore(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zinter($keys, $weights = null, $options = null): \Redis|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zinter(...\func_get_args());
=======
        return $this->initializeLazyObject()->zinter(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zintercard($keys, $limit = -1): \Redis|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zintercard(...\func_get_args());
=======
        return $this->initializeLazyObject()->zintercard(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zinterstore($dst, $keys, $weights = null, $aggregate = null): \Redis|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zinterstore(...\func_get_args());
=======
        return $this->initializeLazyObject()->zinterstore(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zscan($key, &$iterator, $pattern = null, $count = 0): \Redis|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zscan($key, $iterator, ...\array_slice(\func_get_args(), 2));
=======
        return $this->initializeLazyObject()->zscan($key, $iterator, ...\array_slice(\func_get_args(), 2));
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zunion($keys, $weights = null, $options = null): \Redis|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zunion(...\func_get_args());
=======
        return $this->initializeLazyObject()->zunion(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zunionstore($dst, $keys, $weights = null, $aggregate = null): \Redis|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zunionstore(...\func_get_args());
=======
        return $this->initializeLazyObject()->zunionstore(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }
}
