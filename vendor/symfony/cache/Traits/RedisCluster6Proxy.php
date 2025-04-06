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
class RedisCluster6Proxy extends \RedisCluster implements ResetInterface, LazyObjectInterface
{
<<<<<<< HEAD
    use LazyProxyTrait {
        resetLazyObject as reset;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [];

    public function __construct($name, $seeds = null, $timeout = 0, $read_timeout = 0, $persistent = false, #[\SensitiveParameter] $auth = null, $context = null)
    {
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->__construct(...\func_get_args());
=======
    use RedisCluster6ProxyTrait;
    use RedisProxyTrait {
        resetLazyObject as reset;
    }

    public function __construct($name, $seeds = null, $timeout = 0, $read_timeout = 0, $persistent = false, #[\SensitiveParameter] $auth = null, $context = null)
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

    public function _serialize($value): bool|string
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

    public function _prefix($key): bool|string
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->_prefix(...\func_get_args());
=======
        return $this->initializeLazyObject()->_prefix(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function _masters(): array
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->_masters(...\func_get_args());
=======
        return $this->initializeLazyObject()->_masters(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function _redir(): ?string
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->_redir(...\func_get_args());
=======
        return $this->initializeLazyObject()->_redir(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function acl($key_or_address, $subcmd, ...$args): mixed
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->acl(...\func_get_args());
=======
        return $this->initializeLazyObject()->acl(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function append($key, $value): \RedisCluster|bool|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->append(...\func_get_args());
=======
        return $this->initializeLazyObject()->append(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function bgrewriteaof($key_or_address): \RedisCluster|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->bgrewriteaof(...\func_get_args());
=======
        return $this->initializeLazyObject()->bgrewriteaof(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function bgsave($key_or_address): \RedisCluster|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->bgsave(...\func_get_args());
=======
        return $this->initializeLazyObject()->bgsave(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function bitcount($key, $start = 0, $end = -1, $bybit = false): \RedisCluster|bool|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->bitcount(...\func_get_args());
=======
        return $this->initializeLazyObject()->bitcount(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function bitop($operation, $deskey, $srckey, ...$otherkeys): \RedisCluster|bool|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->bitop(...\func_get_args());
=======
        return $this->initializeLazyObject()->bitop(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function bitpos($key, $bit, $start = 0, $end = -1, $bybit = false): \RedisCluster|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->bitpos(...\func_get_args());
=======
        return $this->initializeLazyObject()->bitpos(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function blpop($key, $timeout_or_key, ...$extra_args): \RedisCluster|array|false|null
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->blpop(...\func_get_args());
=======
        return $this->initializeLazyObject()->blpop(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function brpop($key, $timeout_or_key, ...$extra_args): \RedisCluster|array|false|null
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->brpop(...\func_get_args());
=======
        return $this->initializeLazyObject()->brpop(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function brpoplpush($srckey, $deskey, $timeout): mixed
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->brpoplpush(...\func_get_args());
=======
        return $this->initializeLazyObject()->brpoplpush(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function lmove($src, $dst, $wherefrom, $whereto): \Redis|false|string
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->lmove(...\func_get_args());
=======
        return $this->initializeLazyObject()->lmove(...\func_get_args());
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

    public function bzpopmax($key, $timeout_or_key, ...$extra_args): array
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->bzpopmax(...\func_get_args());
=======
        return $this->initializeLazyObject()->bzpopmax(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function bzpopmin($key, $timeout_or_key, ...$extra_args): array
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->bzpopmin(...\func_get_args());
=======
        return $this->initializeLazyObject()->bzpopmin(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function bzmpop($timeout, $keys, $from, $count = 1): \RedisCluster|array|false|null
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->bzmpop(...\func_get_args());
=======
        return $this->initializeLazyObject()->bzmpop(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zmpop($keys, $from, $count = 1): \RedisCluster|array|false|null
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zmpop(...\func_get_args());
=======
        return $this->initializeLazyObject()->zmpop(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function blmpop($timeout, $keys, $from, $count = 1): \RedisCluster|array|false|null
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->blmpop(...\func_get_args());
=======
        return $this->initializeLazyObject()->blmpop(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function lmpop($keys, $from, $count = 1): \RedisCluster|array|false|null
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->lmpop(...\func_get_args());
=======
        return $this->initializeLazyObject()->lmpop(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function clearlasterror(): bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->clearlasterror(...\func_get_args());
=======
        return $this->initializeLazyObject()->clearlasterror(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function client($key_or_address, $subcommand, $arg = null): array|bool|string
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

    public function cluster($key_or_address, $command, ...$extra_args): mixed
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->cluster(...\func_get_args());
=======
        return $this->initializeLazyObject()->cluster(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function command(...$extra_args): mixed
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->command(...\func_get_args());
=======
        return $this->initializeLazyObject()->command(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function config($key_or_address, $subcommand, ...$extra_args): mixed
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->config(...\func_get_args());
=======
        return $this->initializeLazyObject()->config(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function dbsize($key_or_address): \RedisCluster|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->dbsize(...\func_get_args());
=======
        return $this->initializeLazyObject()->dbsize(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function copy($src, $dst, $options = null): \RedisCluster|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->copy(...\func_get_args());
=======
        return $this->initializeLazyObject()->copy(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function decr($key, $by = 1): \RedisCluster|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->decr(...\func_get_args());
=======
        return $this->initializeLazyObject()->decr(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function decrby($key, $value): \RedisCluster|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->decrby(...\func_get_args());
=======
        return $this->initializeLazyObject()->decrby(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function decrbyfloat($key, $value): float
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->decrbyfloat(...\func_get_args());
=======
        return $this->initializeLazyObject()->decrbyfloat(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function del($key, ...$other_keys): \RedisCluster|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->del(...\func_get_args());
=======
        return $this->initializeLazyObject()->del(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function discard(): bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->discard(...\func_get_args());
=======
        return $this->initializeLazyObject()->discard(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function dump($key): \RedisCluster|false|string
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->dump(...\func_get_args());
=======
        return $this->initializeLazyObject()->dump(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function echo($key_or_address, $msg): \RedisCluster|false|string
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

    public function eval_ro($script, $args = [], $num_keys = 0): mixed
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->eval_ro(...\func_get_args());
=======
        return $this->initializeLazyObject()->eval_ro(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function evalsha($script_sha, $args = [], $num_keys = 0): mixed
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->evalsha(...\func_get_args());
=======
        return $this->initializeLazyObject()->evalsha(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function evalsha_ro($script_sha, $args = [], $num_keys = 0): mixed
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->evalsha_ro(...\func_get_args());
=======
        return $this->initializeLazyObject()->evalsha_ro(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function exec(): array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->exec(...\func_get_args());
=======
        return $this->initializeLazyObject()->exec(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function exists($key, ...$other_keys): \RedisCluster|bool|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->exists(...\func_get_args());
=======
        return $this->initializeLazyObject()->exists(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function touch($key, ...$other_keys): \RedisCluster|bool|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->touch(...\func_get_args());
=======
        return $this->initializeLazyObject()->touch(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function expire($key, $timeout, $mode = null): \RedisCluster|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->expire(...\func_get_args());
=======
        return $this->initializeLazyObject()->expire(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function expireat($key, $timestamp, $mode = null): \RedisCluster|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->expireat(...\func_get_args());
=======
        return $this->initializeLazyObject()->expireat(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function expiretime($key): \RedisCluster|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->expiretime(...\func_get_args());
=======
        return $this->initializeLazyObject()->expiretime(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function pexpiretime($key): \RedisCluster|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->pexpiretime(...\func_get_args());
=======
        return $this->initializeLazyObject()->pexpiretime(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function flushall($key_or_address, $async = false): \RedisCluster|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->flushall(...\func_get_args());
=======
        return $this->initializeLazyObject()->flushall(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function flushdb($key_or_address, $async = false): \RedisCluster|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->flushdb(...\func_get_args());
=======
        return $this->initializeLazyObject()->flushdb(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function geoadd($key, $lng, $lat, $member, ...$other_triples_and_options): \RedisCluster|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->geoadd(...\func_get_args());
=======
        return $this->initializeLazyObject()->geoadd(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function geodist($key, $src, $dest, $unit = null): \RedisCluster|false|float
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->geodist(...\func_get_args());
=======
        return $this->initializeLazyObject()->geodist(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function geohash($key, $member, ...$other_members): \RedisCluster|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->geohash(...\func_get_args());
=======
        return $this->initializeLazyObject()->geohash(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function geopos($key, $member, ...$other_members): \RedisCluster|array|false
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

    public function geosearch($key, $position, $shape, $unit, $options = []): \RedisCluster|array
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->geosearch(...\func_get_args());
=======
        return $this->initializeLazyObject()->geosearch(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function geosearchstore($dst, $src, $position, $shape, $unit, $options = []): \RedisCluster|array|false|int
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

    public function getbit($key, $value): \RedisCluster|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getbit(...\func_get_args());
=======
        return $this->initializeLazyObject()->getbit(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function getlasterror(): ?string
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getlasterror(...\func_get_args());
=======
        return $this->initializeLazyObject()->getlasterror(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function getmode(): int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getmode(...\func_get_args());
=======
        return $this->initializeLazyObject()->getmode(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function getoption($option): mixed
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getoption(...\func_get_args());
=======
        return $this->initializeLazyObject()->getoption(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function getrange($key, $start, $end): \RedisCluster|false|string
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getrange(...\func_get_args());
=======
        return $this->initializeLazyObject()->getrange(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function lcs($key1, $key2, $options = null): \RedisCluster|array|false|int|string
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->lcs(...\func_get_args());
=======
        return $this->initializeLazyObject()->lcs(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function getset($key, $value): \RedisCluster|bool|string
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getset(...\func_get_args());
=======
        return $this->initializeLazyObject()->getset(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function gettransferredbytes(): array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->gettransferredbytes(...\func_get_args());
=======
        return $this->initializeLazyObject()->gettransferredbytes(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function cleartransferredbytes(): void
    {
<<<<<<< HEAD
        ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->cleartransferredbytes(...\func_get_args());
=======
        $this->initializeLazyObject()->cleartransferredbytes(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function hdel($key, $member, ...$other_members): \RedisCluster|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hdel(...\func_get_args());
=======
        return $this->initializeLazyObject()->hdel(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function hexists($key, $member): \RedisCluster|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hexists(...\func_get_args());
=======
        return $this->initializeLazyObject()->hexists(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function hget($key, $member): mixed
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hget(...\func_get_args());
=======
        return $this->initializeLazyObject()->hget(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function hgetall($key): \RedisCluster|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hgetall(...\func_get_args());
=======
        return $this->initializeLazyObject()->hgetall(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function hincrby($key, $member, $value): \RedisCluster|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hincrby(...\func_get_args());
=======
        return $this->initializeLazyObject()->hincrby(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function hincrbyfloat($key, $member, $value): \RedisCluster|false|float
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hincrbyfloat(...\func_get_args());
=======
        return $this->initializeLazyObject()->hincrbyfloat(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function hkeys($key): \RedisCluster|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hkeys(...\func_get_args());
=======
        return $this->initializeLazyObject()->hkeys(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function hlen($key): \RedisCluster|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hlen(...\func_get_args());
=======
        return $this->initializeLazyObject()->hlen(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function hmget($key, $keys): \RedisCluster|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hmget(...\func_get_args());
=======
        return $this->initializeLazyObject()->hmget(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function hmset($key, $key_values): \RedisCluster|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hmset(...\func_get_args());
=======
        return $this->initializeLazyObject()->hmset(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function hscan($key, &$iterator, $pattern = null, $count = 0): array|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hscan($key, $iterator, ...\array_slice(\func_get_args(), 2));
=======
        return $this->initializeLazyObject()->hscan($key, $iterator, ...\array_slice(\func_get_args(), 2));
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function hrandfield($key, $options = null): \RedisCluster|array|string
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hrandfield(...\func_get_args());
=======
        return $this->initializeLazyObject()->hrandfield(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function hset($key, $member, $value): \RedisCluster|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hset(...\func_get_args());
=======
        return $this->initializeLazyObject()->hset(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function hsetnx($key, $member, $value): \RedisCluster|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hsetnx(...\func_get_args());
=======
        return $this->initializeLazyObject()->hsetnx(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function hstrlen($key, $field): \RedisCluster|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hstrlen(...\func_get_args());
=======
        return $this->initializeLazyObject()->hstrlen(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function hvals($key): \RedisCluster|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hvals(...\func_get_args());
=======
        return $this->initializeLazyObject()->hvals(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function incr($key, $by = 1): \RedisCluster|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->incr(...\func_get_args());
=======
        return $this->initializeLazyObject()->incr(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function incrby($key, $value): \RedisCluster|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->incrby(...\func_get_args());
=======
        return $this->initializeLazyObject()->incrby(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function incrbyfloat($key, $value): \RedisCluster|false|float
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->incrbyfloat(...\func_get_args());
=======
        return $this->initializeLazyObject()->incrbyfloat(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function info($key_or_address, ...$sections): \RedisCluster|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->info(...\func_get_args());
=======
        return $this->initializeLazyObject()->info(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function keys($pattern): \RedisCluster|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->keys(...\func_get_args());
=======
        return $this->initializeLazyObject()->keys(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function lastsave($key_or_address): \RedisCluster|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->lastsave(...\func_get_args());
=======
        return $this->initializeLazyObject()->lastsave(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function lget($key, $index): \RedisCluster|bool|string
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->lget(...\func_get_args());
=======
        return $this->initializeLazyObject()->lget(...\func_get_args());
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

    public function linsert($key, $pos, $pivot, $value): \RedisCluster|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->linsert(...\func_get_args());
=======
        return $this->initializeLazyObject()->linsert(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function llen($key): \RedisCluster|bool|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->llen(...\func_get_args());
=======
        return $this->initializeLazyObject()->llen(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function lpop($key, $count = 0): \RedisCluster|array|bool|string
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->lpop(...\func_get_args());
=======
        return $this->initializeLazyObject()->lpop(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function lpos($key, $value, $options = null): \Redis|array|bool|int|null
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->lpos(...\func_get_args());
=======
        return $this->initializeLazyObject()->lpos(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function lpush($key, $value, ...$other_values): \RedisCluster|bool|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->lpush(...\func_get_args());
=======
        return $this->initializeLazyObject()->lpush(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function lpushx($key, $value): \RedisCluster|bool|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->lpushx(...\func_get_args());
=======
        return $this->initializeLazyObject()->lpushx(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function lrange($key, $start, $end): \RedisCluster|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->lrange(...\func_get_args());
=======
        return $this->initializeLazyObject()->lrange(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function lrem($key, $value, $count = 0): \RedisCluster|bool|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->lrem(...\func_get_args());
=======
        return $this->initializeLazyObject()->lrem(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function lset($key, $index, $value): \RedisCluster|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->lset(...\func_get_args());
=======
        return $this->initializeLazyObject()->lset(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function ltrim($key, $start, $end): \RedisCluster|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->ltrim(...\func_get_args());
=======
        return $this->initializeLazyObject()->ltrim(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function mget($keys): \RedisCluster|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->mget(...\func_get_args());
=======
        return $this->initializeLazyObject()->mget(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function mset($key_values): \RedisCluster|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->mset(...\func_get_args());
=======
        return $this->initializeLazyObject()->mset(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function msetnx($key_values): \RedisCluster|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->msetnx(...\func_get_args());
=======
        return $this->initializeLazyObject()->msetnx(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function multi($value = \Redis::MULTI): \RedisCluster|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->multi(...\func_get_args());
=======
        return $this->initializeLazyObject()->multi(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function object($subcommand, $key): \RedisCluster|false|int|string
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->object(...\func_get_args());
=======
        return $this->initializeLazyObject()->object(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function persist($key): \RedisCluster|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->persist(...\func_get_args());
=======
        return $this->initializeLazyObject()->persist(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function pexpire($key, $timeout, $mode = null): \RedisCluster|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->pexpire(...\func_get_args());
=======
        return $this->initializeLazyObject()->pexpire(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function pexpireat($key, $timestamp, $mode = null): \RedisCluster|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->pexpireat(...\func_get_args());
=======
        return $this->initializeLazyObject()->pexpireat(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function pfadd($key, $elements): \RedisCluster|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->pfadd(...\func_get_args());
=======
        return $this->initializeLazyObject()->pfadd(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function pfcount($key): \RedisCluster|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->pfcount(...\func_get_args());
=======
        return $this->initializeLazyObject()->pfcount(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function pfmerge($key, $keys): \RedisCluster|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->pfmerge(...\func_get_args());
=======
        return $this->initializeLazyObject()->pfmerge(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function ping($key_or_address, $message = null): mixed
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->ping(...\func_get_args());
=======
        return $this->initializeLazyObject()->ping(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function psetex($key, $timeout, $value): \RedisCluster|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->psetex(...\func_get_args());
=======
        return $this->initializeLazyObject()->psetex(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function psubscribe($patterns, $callback): void
    {
<<<<<<< HEAD
        ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->psubscribe(...\func_get_args());
=======
        $this->initializeLazyObject()->psubscribe(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function pttl($key): \RedisCluster|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->pttl(...\func_get_args());
    }

    public function publish($channel, $message): \RedisCluster|bool
    {
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->publish(...\func_get_args());
=======
        return $this->initializeLazyObject()->pttl(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function pubsub($key_or_address, ...$values): mixed
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->pubsub(...\func_get_args());
=======
        return $this->initializeLazyObject()->pubsub(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function punsubscribe($pattern, ...$other_patterns): array|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->punsubscribe(...\func_get_args());
=======
        return $this->initializeLazyObject()->punsubscribe(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function randomkey($key_or_address): \RedisCluster|bool|string
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->randomkey(...\func_get_args());
=======
        return $this->initializeLazyObject()->randomkey(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function rawcommand($key_or_address, $command, ...$args): mixed
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->rawcommand(...\func_get_args());
=======
        return $this->initializeLazyObject()->rawcommand(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function rename($key_src, $key_dst): \RedisCluster|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->rename(...\func_get_args());
=======
        return $this->initializeLazyObject()->rename(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function renamenx($key, $newkey): \RedisCluster|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->renamenx(...\func_get_args());
=======
        return $this->initializeLazyObject()->renamenx(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function restore($key, $timeout, $value, $options = null): \RedisCluster|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->restore(...\func_get_args());
=======
        return $this->initializeLazyObject()->restore(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function role($key_or_address): mixed
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->role(...\func_get_args());
=======
        return $this->initializeLazyObject()->role(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function rpop($key, $count = 0): \RedisCluster|array|bool|string
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->rpop(...\func_get_args());
=======
        return $this->initializeLazyObject()->rpop(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function rpoplpush($src, $dst): \RedisCluster|bool|string
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->rpoplpush(...\func_get_args());
=======
        return $this->initializeLazyObject()->rpoplpush(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function rpush($key, ...$elements): \RedisCluster|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->rpush(...\func_get_args());
=======
        return $this->initializeLazyObject()->rpush(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function rpushx($key, $value): \RedisCluster|bool|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->rpushx(...\func_get_args());
=======
        return $this->initializeLazyObject()->rpushx(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sadd($key, $value, ...$other_values): \RedisCluster|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sadd(...\func_get_args());
=======
        return $this->initializeLazyObject()->sadd(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function saddarray($key, $values): \RedisCluster|bool|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->saddarray(...\func_get_args());
=======
        return $this->initializeLazyObject()->saddarray(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function save($key_or_address): \RedisCluster|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->save(...\func_get_args());
=======
        return $this->initializeLazyObject()->save(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function scan(&$iterator, $key_or_address, $pattern = null, $count = 0): array|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->scan($iterator, ...\array_slice(\func_get_args(), 1));
=======
        return $this->initializeLazyObject()->scan($iterator, ...\array_slice(\func_get_args(), 1));
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function scard($key): \RedisCluster|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->scard(...\func_get_args());
=======
        return $this->initializeLazyObject()->scard(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function script($key_or_address, ...$args): mixed
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->script(...\func_get_args());
=======
        return $this->initializeLazyObject()->script(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sdiff($key, ...$other_keys): \RedisCluster|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sdiff(...\func_get_args());
=======
        return $this->initializeLazyObject()->sdiff(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sdiffstore($dst, $key, ...$other_keys): \RedisCluster|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sdiffstore(...\func_get_args());
=======
        return $this->initializeLazyObject()->sdiffstore(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function set($key, $value, $options = null): \RedisCluster|bool|string
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->set(...\func_get_args());
=======
        return $this->initializeLazyObject()->set(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function setbit($key, $offset, $onoff): \RedisCluster|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->setbit(...\func_get_args());
=======
        return $this->initializeLazyObject()->setbit(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function setex($key, $expire, $value): \RedisCluster|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->setex(...\func_get_args());
=======
        return $this->initializeLazyObject()->setex(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function setnx($key, $value): \RedisCluster|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->setnx(...\func_get_args());
=======
        return $this->initializeLazyObject()->setnx(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function setoption($option, $value): bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->setoption(...\func_get_args());
=======
        return $this->initializeLazyObject()->setoption(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function setrange($key, $offset, $value): \RedisCluster|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->setrange(...\func_get_args());
=======
        return $this->initializeLazyObject()->setrange(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sinter($key, ...$other_keys): \RedisCluster|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sinter(...\func_get_args());
=======
        return $this->initializeLazyObject()->sinter(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sintercard($keys, $limit = -1): \RedisCluster|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sintercard(...\func_get_args());
=======
        return $this->initializeLazyObject()->sintercard(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sinterstore($key, ...$other_keys): \RedisCluster|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sinterstore(...\func_get_args());
=======
        return $this->initializeLazyObject()->sinterstore(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sismember($key, $value): \RedisCluster|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sismember(...\func_get_args());
=======
        return $this->initializeLazyObject()->sismember(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function smismember($key, $member, ...$other_members): \RedisCluster|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->smismember(...\func_get_args());
=======
        return $this->initializeLazyObject()->smismember(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function slowlog($key_or_address, ...$args): mixed
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->slowlog(...\func_get_args());
=======
        return $this->initializeLazyObject()->slowlog(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function smembers($key): \RedisCluster|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->smembers(...\func_get_args());
=======
        return $this->initializeLazyObject()->smembers(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function smove($src, $dst, $member): \RedisCluster|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->smove(...\func_get_args());
=======
        return $this->initializeLazyObject()->smove(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sort($key, $options = null): \RedisCluster|array|bool|int|string
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sort(...\func_get_args());
=======
        return $this->initializeLazyObject()->sort(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sort_ro($key, $options = null): \RedisCluster|array|bool|int|string
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sort_ro(...\func_get_args());
=======
        return $this->initializeLazyObject()->sort_ro(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function spop($key, $count = 0): \RedisCluster|array|false|string
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->spop(...\func_get_args());
=======
        return $this->initializeLazyObject()->spop(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function srandmember($key, $count = 0): \RedisCluster|array|false|string
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->srandmember(...\func_get_args());
=======
        return $this->initializeLazyObject()->srandmember(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function srem($key, $value, ...$other_values): \RedisCluster|false|int
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

    public function strlen($key): \RedisCluster|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->strlen(...\func_get_args());
=======
        return $this->initializeLazyObject()->strlen(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function subscribe($channels, $cb): void
    {
<<<<<<< HEAD
        ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->subscribe(...\func_get_args());
=======
        $this->initializeLazyObject()->subscribe(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sunion($key, ...$other_keys): \RedisCluster|array|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sunion(...\func_get_args());
=======
        return $this->initializeLazyObject()->sunion(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sunionstore($dst, $key, ...$other_keys): \RedisCluster|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sunionstore(...\func_get_args());
=======
        return $this->initializeLazyObject()->sunionstore(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function time($key_or_address): \RedisCluster|array|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->time(...\func_get_args());
=======
        return $this->initializeLazyObject()->time(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function ttl($key): \RedisCluster|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->ttl(...\func_get_args());
=======
        return $this->initializeLazyObject()->ttl(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function type($key): \RedisCluster|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->type(...\func_get_args());
=======
        return $this->initializeLazyObject()->type(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function unsubscribe($channels): array|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->unsubscribe(...\func_get_args());
=======
        return $this->initializeLazyObject()->unsubscribe(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function unlink($key, ...$other_keys): \RedisCluster|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->unlink(...\func_get_args());
=======
        return $this->initializeLazyObject()->unlink(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function unwatch(): bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->unwatch(...\func_get_args());
=======
        return $this->initializeLazyObject()->unwatch(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function watch($key, ...$other_keys): \RedisCluster|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->watch(...\func_get_args());
=======
        return $this->initializeLazyObject()->watch(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function xack($key, $group, $ids): \RedisCluster|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->xack(...\func_get_args());
=======
        return $this->initializeLazyObject()->xack(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function xadd($key, $id, $values, $maxlen = 0, $approx = false): \RedisCluster|false|string
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->xadd(...\func_get_args());
=======
        return $this->initializeLazyObject()->xadd(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function xclaim($key, $group, $consumer, $min_iddle, $ids, $options): \RedisCluster|array|false|string
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->xclaim(...\func_get_args());
=======
        return $this->initializeLazyObject()->xclaim(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function xdel($key, $ids): \RedisCluster|false|int
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

    public function xautoclaim($key, $group, $consumer, $min_idle, $start, $count = -1, $justid = false): \RedisCluster|array|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->xautoclaim(...\func_get_args());
=======
        return $this->initializeLazyObject()->xautoclaim(...\func_get_args());
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

    public function xlen($key): \RedisCluster|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->xlen(...\func_get_args());
=======
        return $this->initializeLazyObject()->xlen(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function xpending($key, $group, $start = null, $end = null, $count = -1, $consumer = null): \RedisCluster|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->xpending(...\func_get_args());
=======
        return $this->initializeLazyObject()->xpending(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function xrange($key, $start, $end, $count = -1): \RedisCluster|array|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->xrange(...\func_get_args());
=======
        return $this->initializeLazyObject()->xrange(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function xread($streams, $count = -1, $block = -1): \RedisCluster|array|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->xread(...\func_get_args());
=======
        return $this->initializeLazyObject()->xread(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function xreadgroup($group, $consumer, $streams, $count = 1, $block = 1): \RedisCluster|array|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->xreadgroup(...\func_get_args());
=======
        return $this->initializeLazyObject()->xreadgroup(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function xrevrange($key, $start, $end, $count = -1): \RedisCluster|array|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->xrevrange(...\func_get_args());
=======
        return $this->initializeLazyObject()->xrevrange(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function xtrim($key, $maxlen, $approx = false, $minid = false, $limit = -1): \RedisCluster|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->xtrim(...\func_get_args());
=======
        return $this->initializeLazyObject()->xtrim(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zadd($key, $score_or_options, ...$more_scores_and_mems): \RedisCluster|false|float|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zadd(...\func_get_args());
=======
        return $this->initializeLazyObject()->zadd(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zcard($key): \RedisCluster|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zcard(...\func_get_args());
=======
        return $this->initializeLazyObject()->zcard(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zcount($key, $start, $end): \RedisCluster|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zcount(...\func_get_args());
=======
        return $this->initializeLazyObject()->zcount(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zincrby($key, $value, $member): \RedisCluster|false|float
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zincrby(...\func_get_args());
=======
        return $this->initializeLazyObject()->zincrby(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zinterstore($dst, $keys, $weights = null, $aggregate = null): \RedisCluster|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zinterstore(...\func_get_args());
=======
        return $this->initializeLazyObject()->zinterstore(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zintercard($keys, $limit = -1): \RedisCluster|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zintercard(...\func_get_args());
=======
        return $this->initializeLazyObject()->zintercard(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zlexcount($key, $min, $max): \RedisCluster|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zlexcount(...\func_get_args());
=======
        return $this->initializeLazyObject()->zlexcount(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zpopmax($key, $value = null): \RedisCluster|array|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zpopmax(...\func_get_args());
=======
        return $this->initializeLazyObject()->zpopmax(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zpopmin($key, $value = null): \RedisCluster|array|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zpopmin(...\func_get_args());
=======
        return $this->initializeLazyObject()->zpopmin(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zrange($key, $start, $end, $options = null): \RedisCluster|array|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zrange(...\func_get_args());
=======
        return $this->initializeLazyObject()->zrange(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zrangestore($dstkey, $srckey, $start, $end, $options = null): \RedisCluster|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zrangestore(...\func_get_args());
=======
        return $this->initializeLazyObject()->zrangestore(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zrandmember($key, $options = null): \RedisCluster|array|string
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zrandmember(...\func_get_args());
=======
        return $this->initializeLazyObject()->zrandmember(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zrangebylex($key, $min, $max, $offset = -1, $count = -1): \RedisCluster|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zrangebylex(...\func_get_args());
=======
        return $this->initializeLazyObject()->zrangebylex(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zrangebyscore($key, $start, $end, $options = []): \RedisCluster|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zrangebyscore(...\func_get_args());
=======
        return $this->initializeLazyObject()->zrangebyscore(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zrank($key, $member): \RedisCluster|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zrank(...\func_get_args());
=======
        return $this->initializeLazyObject()->zrank(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zrem($key, $value, ...$other_values): \RedisCluster|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zrem(...\func_get_args());
=======
        return $this->initializeLazyObject()->zrem(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zremrangebylex($key, $min, $max): \RedisCluster|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zremrangebylex(...\func_get_args());
=======
        return $this->initializeLazyObject()->zremrangebylex(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zremrangebyrank($key, $min, $max): \RedisCluster|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zremrangebyrank(...\func_get_args());
=======
        return $this->initializeLazyObject()->zremrangebyrank(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zremrangebyscore($key, $min, $max): \RedisCluster|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zremrangebyscore(...\func_get_args());
=======
        return $this->initializeLazyObject()->zremrangebyscore(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zrevrange($key, $min, $max, $options = null): \RedisCluster|array|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zrevrange(...\func_get_args());
=======
        return $this->initializeLazyObject()->zrevrange(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zrevrangebylex($key, $min, $max, $options = null): \RedisCluster|array|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zrevrangebylex(...\func_get_args());
=======
        return $this->initializeLazyObject()->zrevrangebylex(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zrevrangebyscore($key, $min, $max, $options = null): \RedisCluster|array|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zrevrangebyscore(...\func_get_args());
=======
        return $this->initializeLazyObject()->zrevrangebyscore(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zrevrank($key, $member): \RedisCluster|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zrevrank(...\func_get_args());
=======
        return $this->initializeLazyObject()->zrevrank(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zscan($key, &$iterator, $pattern = null, $count = 0): \RedisCluster|array|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zscan($key, $iterator, ...\array_slice(\func_get_args(), 2));
=======
        return $this->initializeLazyObject()->zscan($key, $iterator, ...\array_slice(\func_get_args(), 2));
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zscore($key, $member): \RedisCluster|false|float
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zscore(...\func_get_args());
=======
        return $this->initializeLazyObject()->zscore(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zmscore($key, $member, ...$other_members): \Redis|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zmscore(...\func_get_args());
=======
        return $this->initializeLazyObject()->zmscore(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zunionstore($dst, $keys, $weights = null, $aggregate = null): \RedisCluster|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zunionstore(...\func_get_args());
=======
        return $this->initializeLazyObject()->zunionstore(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zinter($keys, $weights = null, $options = null): \RedisCluster|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zinter(...\func_get_args());
=======
        return $this->initializeLazyObject()->zinter(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zdiffstore($dst, $keys): \RedisCluster|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zdiffstore(...\func_get_args());
=======
        return $this->initializeLazyObject()->zdiffstore(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zunion($keys, $weights = null, $options = null): \RedisCluster|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zunion(...\func_get_args());
=======
        return $this->initializeLazyObject()->zunion(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zdiff($keys, $options = null): \RedisCluster|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zdiff(...\func_get_args());
=======
        return $this->initializeLazyObject()->zdiff(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }
}
