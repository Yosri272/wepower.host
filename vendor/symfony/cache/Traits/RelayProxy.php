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

<<<<<<< HEAD
use Symfony\Component\VarExporter\LazyObjectInterface;
use Symfony\Component\VarExporter\LazyProxyTrait;
=======
use Symfony\Component\Cache\Traits\Relay\CopyTrait;
use Symfony\Component\Cache\Traits\Relay\GeosearchTrait;
use Symfony\Component\Cache\Traits\Relay\GetrangeTrait;
use Symfony\Component\Cache\Traits\Relay\HsetTrait;
use Symfony\Component\Cache\Traits\Relay\MoveTrait;
use Symfony\Component\Cache\Traits\Relay\NullableReturnTrait;
use Symfony\Component\Cache\Traits\Relay\PfcountTrait;
use Symfony\Component\VarExporter\LazyObjectInterface;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use Symfony\Contracts\Service\ResetInterface;

// Help opcache.preload discover always-needed symbols
class_exists(\Symfony\Component\VarExporter\Internal\Hydrator::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectRegistry::class);
class_exists(\Symfony\Component\VarExporter\Internal\LazyObjectState::class);

/**
 * @internal
 */
class RelayProxy extends \Relay\Relay implements ResetInterface, LazyObjectInterface
{
<<<<<<< HEAD
    use LazyProxyTrait {
        resetLazyObject as reset;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [];

    public function __construct($host = null, $port = 6379, $connect_timeout = 0.0, $command_timeout = 0.0, #[\SensitiveParameter] $context = [], $database = 0)
    {
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->__construct(...\func_get_args());
=======
    use CopyTrait;
    use GeosearchTrait;
    use GetrangeTrait;
    use HsetTrait;
    use MoveTrait;
    use NullableReturnTrait;
    use PfcountTrait;
    use RedisProxyTrait {
        resetLazyObject as reset;
    }
    use RelayProxyTrait;

    public function __construct($host = null, $port = 6379, $connect_timeout = 0.0, $command_timeout = 0.0, #[\SensitiveParameter] $context = [], $database = 0)
    {
        $this->initializeLazyObject()->__construct(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function connect($host, $port = 6379, $timeout = 0.0, $persistent_id = null, $retry_interval = 0, $read_timeout = 0.0, #[\SensitiveParameter] $context = [], $database = 0): bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->connect(...\func_get_args());
=======
        return $this->initializeLazyObject()->connect(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function pconnect($host, $port = 6379, $timeout = 0.0, $persistent_id = null, $retry_interval = 0, $read_timeout = 0.0, #[\SensitiveParameter] $context = [], $database = 0): bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->pconnect(...\func_get_args());
=======
        return $this->initializeLazyObject()->pconnect(...\func_get_args());
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

    public function pclose(): bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->pclose(...\func_get_args());
=======
        return $this->initializeLazyObject()->pclose(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function listen($callback): bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->listen(...\func_get_args());
=======
        return $this->initializeLazyObject()->listen(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function onFlushed($callback): bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->onFlushed(...\func_get_args());
=======
        return $this->initializeLazyObject()->onFlushed(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function onInvalidated($callback, $pattern = null): bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->onInvalidated(...\func_get_args());
=======
        return $this->initializeLazyObject()->onInvalidated(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function dispatchEvents(): false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->dispatchEvents(...\func_get_args());
=======
        return $this->initializeLazyObject()->dispatchEvents(...\func_get_args());
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

    public function option($option, $value = null): mixed
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->option(...\func_get_args());
=======
        return $this->initializeLazyObject()->option(...\func_get_args());
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

    public function addIgnorePatterns(...$pattern): int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->addIgnorePatterns(...\func_get_args());
=======
        return $this->initializeLazyObject()->addIgnorePatterns(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function addAllowPatterns(...$pattern): int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->addAllowPatterns(...\func_get_args());
=======
        return $this->initializeLazyObject()->addAllowPatterns(...\func_get_args());
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

    public function timeout(): false|float
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->timeout(...\func_get_args());
=======
        return $this->initializeLazyObject()->timeout(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function getReadTimeout(): false|float
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getReadTimeout(...\func_get_args());
=======
        return $this->initializeLazyObject()->getReadTimeout(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function readTimeout(): false|float
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->readTimeout(...\func_get_args());
=======
        return $this->initializeLazyObject()->readTimeout(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function getBytes(): array
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getBytes(...\func_get_args());
=======
        return $this->initializeLazyObject()->getBytes(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function bytes(): array
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->bytes(...\func_get_args());
=======
        return $this->initializeLazyObject()->bytes(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function getHost(): false|string
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getHost(...\func_get_args());
=======
        return $this->initializeLazyObject()->getHost(...\func_get_args());
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

    public function getPort(): false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getPort(...\func_get_args());
=======
        return $this->initializeLazyObject()->getPort(...\func_get_args());
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

    public function getDbNum(): mixed
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getDbNum(...\func_get_args());
=======
        return $this->initializeLazyObject()->getDbNum(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function _serialize($value): mixed
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

    public function _prefix($value): string
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->_prefix(...\func_get_args());
=======
        return $this->initializeLazyObject()->_prefix(...\func_get_args());
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

    public function clearLastError(): bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->clearLastError(...\func_get_args());
=======
        return $this->initializeLazyObject()->clearLastError(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function endpointId(): false|string
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->endpointId(...\func_get_args());
=======
        return $this->initializeLazyObject()->endpointId(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function getPersistentID(): false|string
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getPersistentID(...\func_get_args());
=======
        return $this->initializeLazyObject()->getPersistentID(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function socketId(): false|string
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->socketId(...\func_get_args());
=======
        return $this->initializeLazyObject()->socketId(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function rawCommand($cmd, ...$args): mixed
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->rawCommand(...\func_get_args());
=======
        return $this->initializeLazyObject()->rawCommand(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function select($db): \Relay\Relay|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->select(...\func_get_args());
=======
        return $this->initializeLazyObject()->select(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function auth(#[\SensitiveParameter] $auth): bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->auth(...\func_get_args());
=======
        return $this->initializeLazyObject()->auth(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function info(...$sections): \Relay\Relay|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->info(...\func_get_args());
=======
        return $this->initializeLazyObject()->info(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function flushdb($sync = null): \Relay\Relay|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->flushdb(...\func_get_args());
=======
        return $this->initializeLazyObject()->flushdb(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function flushall($sync = null): \Relay\Relay|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->flushall(...\func_get_args());
=======
        return $this->initializeLazyObject()->flushall(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function fcall($name, $keys = [], $argv = [], $handler = null): mixed
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->fcall(...\func_get_args());
=======
        return $this->initializeLazyObject()->fcall(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function fcall_ro($name, $keys = [], $argv = [], $handler = null): mixed
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->fcall_ro(...\func_get_args());
=======
        return $this->initializeLazyObject()->fcall_ro(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function function($op, ...$args): mixed
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->function(...\func_get_args());
=======
        return $this->initializeLazyObject()->function(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function dbsize(): \Relay\Relay|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->dbsize(...\func_get_args());
    }

    public function dump($key): \Relay\Relay|false|string
    {
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->dump(...\func_get_args());
=======
        return $this->initializeLazyObject()->dbsize(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function replicaof($host = null, $port = 0): \Relay\Relay|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->replicaof(...\func_get_args());
=======
        return $this->initializeLazyObject()->replicaof(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function waitaof($numlocal, $numremote, $timeout): \Relay\Relay|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->waitaof(...\func_get_args());
=======
        return $this->initializeLazyObject()->waitaof(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function restore($key, $ttl, $value, $options = null): \Relay\Relay|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->restore(...\func_get_args());
=======
        return $this->initializeLazyObject()->restore(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function migrate($host, $port, $key, $dstdb, $timeout, $copy = false, $replace = false, #[\SensitiveParameter] $credentials = null): \Relay\Relay|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->migrate(...\func_get_args());
    }

    public function copy($src, $dst, $options = null): \Relay\Relay|false|int
    {
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->copy(...\func_get_args());
=======
        return $this->initializeLazyObject()->migrate(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function echo($arg): \Relay\Relay|bool|string
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->echo(...\func_get_args());
=======
        return $this->initializeLazyObject()->echo(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function ping($arg = null): \Relay\Relay|bool|string
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->ping(...\func_get_args());
=======
        return $this->initializeLazyObject()->ping(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function idleTime(): \Relay\Relay|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->idleTime(...\func_get_args());
=======
        return $this->initializeLazyObject()->idleTime(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function randomkey(): \Relay\Relay|bool|null|string
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->randomkey(...\func_get_args());
=======
        return $this->initializeLazyObject()->randomkey(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function time(): \Relay\Relay|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->time(...\func_get_args());
=======
        return $this->initializeLazyObject()->time(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function bgrewriteaof(): \Relay\Relay|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->bgrewriteaof(...\func_get_args());
=======
        return $this->initializeLazyObject()->bgrewriteaof(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function lastsave(): \Relay\Relay|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->lastsave(...\func_get_args());
=======
        return $this->initializeLazyObject()->lastsave(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function lcs($key1, $key2, $options = null): mixed
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->lcs(...\func_get_args());
=======
        return $this->initializeLazyObject()->lcs(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function bgsave($schedule = false): \Relay\Relay|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->bgsave(...\func_get_args());
=======
        return $this->initializeLazyObject()->bgsave(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function save(): \Relay\Relay|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->save(...\func_get_args());
=======
        return $this->initializeLazyObject()->save(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function role(): \Relay\Relay|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->role(...\func_get_args());
=======
        return $this->initializeLazyObject()->role(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function ttl($key): \Relay\Relay|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->ttl(...\func_get_args());
=======
        return $this->initializeLazyObject()->ttl(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function pttl($key): \Relay\Relay|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->pttl(...\func_get_args());
=======
        return $this->initializeLazyObject()->pttl(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function exists(...$keys): \Relay\Relay|bool|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->exists(...\func_get_args());
=======
        return $this->initializeLazyObject()->exists(...\func_get_args());
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

    public function evalsha($sha, $args = [], $num_keys = 0): mixed
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->evalsha(...\func_get_args());
=======
        return $this->initializeLazyObject()->evalsha(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function evalsha_ro($sha, $args = [], $num_keys = 0): mixed
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->evalsha_ro(...\func_get_args());
=======
        return $this->initializeLazyObject()->evalsha_ro(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function client($operation, ...$args): mixed
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->client(...\func_get_args());
=======
        return $this->initializeLazyObject()->client(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function geoadd($key, $lng, $lat, $member, ...$other_triples_and_options): \Relay\Relay|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->geoadd(...\func_get_args());
    }

    public function geodist($key, $src, $dst, $unit = null): \Relay\Relay|false|float
    {
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->geodist(...\func_get_args());
=======
        return $this->initializeLazyObject()->geoadd(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function geohash($key, $member, ...$other_members): \Relay\Relay|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->geohash(...\func_get_args());
=======
        return $this->initializeLazyObject()->geohash(...\func_get_args());
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

    public function georadius_ro($key, $lng, $lat, $radius, $unit, $options = []): mixed
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->georadius_ro(...\func_get_args());
    }

    public function geosearch($key, $position, $shape, $unit, $options = []): \Relay\Relay|array
    {
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->geosearch(...\func_get_args());
=======
        return $this->initializeLazyObject()->georadius_ro(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function geosearchstore($dst, $src, $position, $shape, $unit, $options = []): \Relay\Relay|false|int
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

    public function getset($key, $value): mixed
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getset(...\func_get_args());
    }

    public function getrange($key, $start, $end): \Relay\Relay|false|string
    {
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getrange(...\func_get_args());
=======
        return $this->initializeLazyObject()->getset(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function setrange($key, $start, $value): \Relay\Relay|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->setrange(...\func_get_args());
=======
        return $this->initializeLazyObject()->setrange(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function getbit($key, $pos): \Relay\Relay|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getbit(...\func_get_args());
=======
        return $this->initializeLazyObject()->getbit(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function bitcount($key, $start = 0, $end = -1, $by_bit = false): \Relay\Relay|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->bitcount(...\func_get_args());
=======
        return $this->initializeLazyObject()->bitcount(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function bitfield($key, ...$args): \Relay\Relay|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->bitfield(...\func_get_args());
=======
        return $this->initializeLazyObject()->bitfield(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function config($operation, $key = null, $value = null): \Relay\Relay|array|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->config(...\func_get_args());
=======
        return $this->initializeLazyObject()->config(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function command(...$args): \Relay\Relay|array|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->command(...\func_get_args());
=======
        return $this->initializeLazyObject()->command(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function bitop($operation, $dstkey, $srckey, ...$other_keys): \Relay\Relay|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->bitop(...\func_get_args());
=======
        return $this->initializeLazyObject()->bitop(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function bitpos($key, $bit, $start = null, $end = null, $bybit = false): \Relay\Relay|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->bitpos(...\func_get_args());
=======
        return $this->initializeLazyObject()->bitpos(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function setbit($key, $pos, $val): \Relay\Relay|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->setbit(...\func_get_args());
=======
        return $this->initializeLazyObject()->setbit(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function acl($cmd, ...$args): mixed
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->acl(...\func_get_args());
=======
        return $this->initializeLazyObject()->acl(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function append($key, $value): \Relay\Relay|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->append(...\func_get_args());
=======
        return $this->initializeLazyObject()->append(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function set($key, $value, $options = null): mixed
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->set(...\func_get_args());
=======
        return $this->initializeLazyObject()->set(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function getex($key, $options = null): mixed
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getex(...\func_get_args());
=======
        return $this->initializeLazyObject()->getex(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function getdel($key): mixed
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getdel(...\func_get_args());
=======
        return $this->initializeLazyObject()->getdel(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function setex($key, $seconds, $value): \Relay\Relay|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->setex(...\func_get_args());
=======
        return $this->initializeLazyObject()->setex(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function pfadd($key, $elements): \Relay\Relay|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->pfadd(...\func_get_args());
    }

    public function pfcount($key): \Relay\Relay|false|int
    {
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->pfcount(...\func_get_args());
=======
        return $this->initializeLazyObject()->pfadd(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function pfmerge($dst, $srckeys): \Relay\Relay|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->pfmerge(...\func_get_args());
=======
        return $this->initializeLazyObject()->pfmerge(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function psetex($key, $milliseconds, $value): \Relay\Relay|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->psetex(...\func_get_args());
=======
        return $this->initializeLazyObject()->psetex(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function publish($channel, $message): \Relay\Relay|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->publish(...\func_get_args());
=======
        return $this->initializeLazyObject()->publish(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function pubsub($operation, ...$args): mixed
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->pubsub(...\func_get_args());
=======
        return $this->initializeLazyObject()->pubsub(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function spublish($channel, $message): \Relay\Relay|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->spublish(...\func_get_args());
=======
        return $this->initializeLazyObject()->spublish(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function setnx($key, $value): \Relay\Relay|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->setnx(...\func_get_args());
=======
        return $this->initializeLazyObject()->setnx(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function mget($keys): \Relay\Relay|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->mget(...\func_get_args());
=======
        return $this->initializeLazyObject()->mget(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function move($key, $db): \Relay\Relay|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->move(...\func_get_args());
=======
        return $this->initializeLazyObject()->move(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function mset($kvals): \Relay\Relay|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->mset(...\func_get_args());
=======
        return $this->initializeLazyObject()->mset(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function msetnx($kvals): \Relay\Relay|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->msetnx(...\func_get_args());
=======
        return $this->initializeLazyObject()->msetnx(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function rename($key, $newkey): \Relay\Relay|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->rename(...\func_get_args());
=======
        return $this->initializeLazyObject()->rename(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function renamenx($key, $newkey): \Relay\Relay|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->renamenx(...\func_get_args());
=======
        return $this->initializeLazyObject()->renamenx(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function del(...$keys): \Relay\Relay|bool|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->del(...\func_get_args());
=======
        return $this->initializeLazyObject()->del(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function unlink(...$keys): \Relay\Relay|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->unlink(...\func_get_args());
=======
        return $this->initializeLazyObject()->unlink(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function expire($key, $seconds, $mode = null): \Relay\Relay|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->expire(...\func_get_args());
=======
        return $this->initializeLazyObject()->expire(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function pexpire($key, $milliseconds): \Relay\Relay|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->pexpire(...\func_get_args());
=======
        return $this->initializeLazyObject()->pexpire(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function expireat($key, $timestamp): \Relay\Relay|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->expireat(...\func_get_args());
=======
        return $this->initializeLazyObject()->expireat(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function expiretime($key): \Relay\Relay|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->expiretime(...\func_get_args());
=======
        return $this->initializeLazyObject()->expiretime(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function pexpireat($key, $timestamp_ms): \Relay\Relay|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->pexpireat(...\func_get_args());
=======
        return $this->initializeLazyObject()->pexpireat(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function pexpiretime($key): \Relay\Relay|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->pexpiretime(...\func_get_args());
=======
        return $this->initializeLazyObject()->pexpiretime(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function persist($key): \Relay\Relay|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->persist(...\func_get_args());
=======
        return $this->initializeLazyObject()->persist(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function type($key): \Relay\Relay|bool|int|string
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->type(...\func_get_args());
    }

    public function lmove($srckey, $dstkey, $srcpos, $dstpos): \Relay\Relay|false|null|string
    {
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->lmove(...\func_get_args());
    }

    public function blmove($srckey, $dstkey, $srcpos, $dstpos, $timeout): \Relay\Relay|false|null|string
    {
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->blmove(...\func_get_args());
=======
        return $this->initializeLazyObject()->type(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function lrange($key, $start, $stop): \Relay\Relay|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->lrange(...\func_get_args());
=======
        return $this->initializeLazyObject()->lrange(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function lpush($key, $mem, ...$mems): \Relay\Relay|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->lpush(...\func_get_args());
=======
        return $this->initializeLazyObject()->lpush(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function rpush($key, $mem, ...$mems): \Relay\Relay|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->rpush(...\func_get_args());
=======
        return $this->initializeLazyObject()->rpush(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function lpushx($key, $mem, ...$mems): \Relay\Relay|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->lpushx(...\func_get_args());
=======
        return $this->initializeLazyObject()->lpushx(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function rpushx($key, $mem, ...$mems): \Relay\Relay|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->rpushx(...\func_get_args());
=======
        return $this->initializeLazyObject()->rpushx(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function lset($key, $index, $mem): \Relay\Relay|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->lset(...\func_get_args());
=======
        return $this->initializeLazyObject()->lset(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function lpop($key, $count = 1): mixed
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->lpop(...\func_get_args());
=======
        return $this->initializeLazyObject()->lpop(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function lpos($key, $value, $options = null): \Relay\Relay|array|false|int|null
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->lpos(...\func_get_args());
=======
        return $this->initializeLazyObject()->lpos(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function rpop($key, $count = 1): mixed
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->rpop(...\func_get_args());
=======
        return $this->initializeLazyObject()->rpop(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function rpoplpush($source, $dest): mixed
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->rpoplpush(...\func_get_args());
=======
        return $this->initializeLazyObject()->rpoplpush(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function brpoplpush($source, $dest, $timeout): mixed
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->brpoplpush(...\func_get_args());
=======
        return $this->initializeLazyObject()->brpoplpush(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function blpop($key, $timeout_or_key, ...$extra_args): \Relay\Relay|array|false|null
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->blpop(...\func_get_args());
=======
        return $this->initializeLazyObject()->blpop(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function blmpop($timeout, $keys, $from, $count = 1): \Relay\Relay|array|false|null
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->blmpop(...\func_get_args());
=======
        return $this->initializeLazyObject()->blmpop(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function bzmpop($timeout, $keys, $from, $count = 1): \Relay\Relay|array|false|null
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->bzmpop(...\func_get_args());
=======
        return $this->initializeLazyObject()->bzmpop(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function lmpop($keys, $from, $count = 1): \Relay\Relay|array|false|null
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->lmpop(...\func_get_args());
=======
        return $this->initializeLazyObject()->lmpop(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zmpop($keys, $from, $count = 1): \Relay\Relay|array|false|null
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zmpop(...\func_get_args());
=======
        return $this->initializeLazyObject()->zmpop(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function brpop($key, $timeout_or_key, ...$extra_args): \Relay\Relay|array|false|null
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->brpop(...\func_get_args());
=======
        return $this->initializeLazyObject()->brpop(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function bzpopmax($key, $timeout_or_key, ...$extra_args): \Relay\Relay|array|false|null
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->bzpopmax(...\func_get_args());
=======
        return $this->initializeLazyObject()->bzpopmax(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function bzpopmin($key, $timeout_or_key, ...$extra_args): \Relay\Relay|array|false|null
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->bzpopmin(...\func_get_args());
=======
        return $this->initializeLazyObject()->bzpopmin(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function object($op, $key): mixed
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->object(...\func_get_args());
=======
        return $this->initializeLazyObject()->object(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function geopos($key, ...$members): \Relay\Relay|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->geopos(...\func_get_args());
=======
        return $this->initializeLazyObject()->geopos(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function lrem($key, $mem, $count = 0): \Relay\Relay|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->lrem(...\func_get_args());
=======
        return $this->initializeLazyObject()->lrem(...\func_get_args());
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

    public function linsert($key, $op, $pivot, $element): \Relay\Relay|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->linsert(...\func_get_args());
=======
        return $this->initializeLazyObject()->linsert(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function ltrim($key, $start, $end): \Relay\Relay|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->ltrim(...\func_get_args());
=======
        return $this->initializeLazyObject()->ltrim(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function hget($hash, $member): mixed
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hget(...\func_get_args());
=======
        return $this->initializeLazyObject()->hget(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function hstrlen($hash, $member): \Relay\Relay|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hstrlen(...\func_get_args());
=======
        return $this->initializeLazyObject()->hstrlen(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function hgetall($hash): \Relay\Relay|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hgetall(...\func_get_args());
=======
        return $this->initializeLazyObject()->hgetall(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function hkeys($hash): \Relay\Relay|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hkeys(...\func_get_args());
=======
        return $this->initializeLazyObject()->hkeys(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function hvals($hash): \Relay\Relay|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hvals(...\func_get_args());
=======
        return $this->initializeLazyObject()->hvals(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function hmget($hash, $members): \Relay\Relay|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hmget(...\func_get_args());
    }

    public function hrandfield($hash, $options = null): \Relay\Relay|array|false|string
    {
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hrandfield(...\func_get_args());
=======
        return $this->initializeLazyObject()->hmget(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function hmset($hash, $members): \Relay\Relay|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hmset(...\func_get_args());
=======
        return $this->initializeLazyObject()->hmset(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function hexists($hash, $member): \Relay\Relay|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hexists(...\func_get_args());
=======
        return $this->initializeLazyObject()->hexists(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function hsetnx($hash, $member, $value): \Relay\Relay|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hsetnx(...\func_get_args());
    }

    public function hset($key, $mem, $val, ...$kvals): \Relay\Relay|false|int
    {
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hset(...\func_get_args());
=======
        return $this->initializeLazyObject()->hsetnx(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function hdel($key, $mem, ...$mems): \Relay\Relay|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hdel(...\func_get_args());
=======
        return $this->initializeLazyObject()->hdel(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function hincrby($key, $mem, $value): \Relay\Relay|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hincrby(...\func_get_args());
=======
        return $this->initializeLazyObject()->hincrby(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function hincrbyfloat($key, $mem, $value): \Relay\Relay|bool|float
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hincrbyfloat(...\func_get_args());
=======
        return $this->initializeLazyObject()->hincrbyfloat(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function incr($key, $by = 1): \Relay\Relay|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->incr(...\func_get_args());
=======
        return $this->initializeLazyObject()->incr(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function decr($key, $by = 1): \Relay\Relay|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->decr(...\func_get_args());
=======
        return $this->initializeLazyObject()->decr(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function incrby($key, $value): \Relay\Relay|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->incrby(...\func_get_args());
=======
        return $this->initializeLazyObject()->incrby(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function decrby($key, $value): \Relay\Relay|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->decrby(...\func_get_args());
=======
        return $this->initializeLazyObject()->decrby(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function incrbyfloat($key, $value): \Relay\Relay|false|float
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->incrbyfloat(...\func_get_args());
=======
        return $this->initializeLazyObject()->incrbyfloat(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sdiff($key, ...$other_keys): \Relay\Relay|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sdiff(...\func_get_args());
=======
        return $this->initializeLazyObject()->sdiff(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sdiffstore($key, ...$other_keys): \Relay\Relay|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sdiffstore(...\func_get_args());
=======
        return $this->initializeLazyObject()->sdiffstore(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sinter($key, ...$other_keys): \Relay\Relay|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sinter(...\func_get_args());
=======
        return $this->initializeLazyObject()->sinter(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sintercard($keys, $limit = -1): \Relay\Relay|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sintercard(...\func_get_args());
=======
        return $this->initializeLazyObject()->sintercard(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sinterstore($key, ...$other_keys): \Relay\Relay|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sinterstore(...\func_get_args());
=======
        return $this->initializeLazyObject()->sinterstore(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sunion($key, ...$other_keys): \Relay\Relay|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sunion(...\func_get_args());
=======
        return $this->initializeLazyObject()->sunion(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sunionstore($key, ...$other_keys): \Relay\Relay|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sunionstore(...\func_get_args());
=======
        return $this->initializeLazyObject()->sunionstore(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function subscribe($channels, $callback): bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->subscribe(...\func_get_args());
=======
        return $this->initializeLazyObject()->subscribe(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function unsubscribe($channels = []): bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->unsubscribe(...\func_get_args());
=======
        return $this->initializeLazyObject()->unsubscribe(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function psubscribe($patterns, $callback): bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->psubscribe(...\func_get_args());
=======
        return $this->initializeLazyObject()->psubscribe(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function punsubscribe($patterns = []): bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->punsubscribe(...\func_get_args());
=======
        return $this->initializeLazyObject()->punsubscribe(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function ssubscribe($channels, $callback): bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->ssubscribe(...\func_get_args());
=======
        return $this->initializeLazyObject()->ssubscribe(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sunsubscribe($channels = []): bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sunsubscribe(...\func_get_args());
=======
        return $this->initializeLazyObject()->sunsubscribe(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function touch($key_or_array, ...$more_keys): \Relay\Relay|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->touch(...\func_get_args());
=======
        return $this->initializeLazyObject()->touch(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function pipeline(): \Relay\Relay|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->pipeline(...\func_get_args());
=======
        return $this->initializeLazyObject()->pipeline(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function multi($mode = 0): \Relay\Relay|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->multi(...\func_get_args());
=======
        return $this->initializeLazyObject()->multi(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function exec(): \Relay\Relay|array|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->exec(...\func_get_args());
=======
        return $this->initializeLazyObject()->exec(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function wait($replicas, $timeout): \Relay\Relay|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->wait(...\func_get_args());
=======
        return $this->initializeLazyObject()->wait(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function watch($key, ...$other_keys): \Relay\Relay|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->watch(...\func_get_args());
=======
        return $this->initializeLazyObject()->watch(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function unwatch(): \Relay\Relay|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->unwatch(...\func_get_args());
=======
        return $this->initializeLazyObject()->unwatch(...\func_get_args());
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

    public function getMode($masked = false): int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->getMode(...\func_get_args());
=======
        return $this->initializeLazyObject()->getMode(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function clearBytes(): void
    {
<<<<<<< HEAD
        ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->clearBytes(...\func_get_args());
=======
        $this->initializeLazyObject()->clearBytes(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function scan(&$iterator, $match = null, $count = 0, $type = null): array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->scan($iterator, ...\array_slice(\func_get_args(), 1));
=======
        return $this->initializeLazyObject()->scan($iterator, ...\array_slice(\func_get_args(), 1));
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function hscan($key, &$iterator, $match = null, $count = 0): array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hscan($key, $iterator, ...\array_slice(\func_get_args(), 2));
=======
        return $this->initializeLazyObject()->hscan($key, $iterator, ...\array_slice(\func_get_args(), 2));
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sscan($key, &$iterator, $match = null, $count = 0): array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sscan($key, $iterator, ...\array_slice(\func_get_args(), 2));
=======
        return $this->initializeLazyObject()->sscan($key, $iterator, ...\array_slice(\func_get_args(), 2));
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zscan($key, &$iterator, $match = null, $count = 0): array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zscan($key, $iterator, ...\array_slice(\func_get_args(), 2));
=======
        return $this->initializeLazyObject()->zscan($key, $iterator, ...\array_slice(\func_get_args(), 2));
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function keys($pattern): \Relay\Relay|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->keys(...\func_get_args());
=======
        return $this->initializeLazyObject()->keys(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function slowlog($operation, ...$extra_args): \Relay\Relay|array|bool|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->slowlog(...\func_get_args());
=======
        return $this->initializeLazyObject()->slowlog(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function smembers($set): \Relay\Relay|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->smembers(...\func_get_args());
=======
        return $this->initializeLazyObject()->smembers(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sismember($set, $member): \Relay\Relay|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sismember(...\func_get_args());
=======
        return $this->initializeLazyObject()->sismember(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function smismember($set, ...$members): \Relay\Relay|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->smismember(...\func_get_args());
=======
        return $this->initializeLazyObject()->smismember(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function srem($set, $member, ...$members): \Relay\Relay|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->srem(...\func_get_args());
=======
        return $this->initializeLazyObject()->srem(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sadd($set, $member, ...$members): \Relay\Relay|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sadd(...\func_get_args());
=======
        return $this->initializeLazyObject()->sadd(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sort($key, $options = []): \Relay\Relay|array|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sort(...\func_get_args());
=======
        return $this->initializeLazyObject()->sort(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function sort_ro($key, $options = []): \Relay\Relay|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->sort_ro(...\func_get_args());
=======
        return $this->initializeLazyObject()->sort_ro(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function smove($srcset, $dstset, $member): \Relay\Relay|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->smove(...\func_get_args());
=======
        return $this->initializeLazyObject()->smove(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function spop($set, $count = 1): mixed
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->spop(...\func_get_args());
=======
        return $this->initializeLazyObject()->spop(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function srandmember($set, $count = 1): mixed
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->srandmember(...\func_get_args());
=======
        return $this->initializeLazyObject()->srandmember(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function scard($key): \Relay\Relay|false|int
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

    public function strlen($key): \Relay\Relay|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->strlen(...\func_get_args());
=======
        return $this->initializeLazyObject()->strlen(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function hlen($key): \Relay\Relay|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->hlen(...\func_get_args());
=======
        return $this->initializeLazyObject()->hlen(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function llen($key): \Relay\Relay|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->llen(...\func_get_args());
=======
        return $this->initializeLazyObject()->llen(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function xack($key, $group, $ids): \Relay\Relay|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->xack(...\func_get_args());
    }

    public function xadd($key, $id, $values, $maxlen = 0, $approx = false, $nomkstream = false): \Relay\Relay|false|string
    {
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->xadd(...\func_get_args());
=======
        return $this->initializeLazyObject()->xack(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function xclaim($key, $group, $consumer, $min_idle, $ids, $options): \Relay\Relay|array|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->xclaim(...\func_get_args());
=======
        return $this->initializeLazyObject()->xclaim(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function xautoclaim($key, $group, $consumer, $min_idle, $start, $count = -1, $justid = false): \Relay\Relay|array|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->xautoclaim(...\func_get_args());
=======
        return $this->initializeLazyObject()->xautoclaim(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function xlen($key): \Relay\Relay|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->xlen(...\func_get_args());
=======
        return $this->initializeLazyObject()->xlen(...\func_get_args());
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

    public function xdel($key, $ids): \Relay\Relay|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->xdel(...\func_get_args());
=======
        return $this->initializeLazyObject()->xdel(...\func_get_args());
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

    public function xpending($key, $group, $start = null, $end = null, $count = -1, $consumer = null, $idle = 0): \Relay\Relay|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->xpending(...\func_get_args());
=======
        return $this->initializeLazyObject()->xpending(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function xrange($key, $start, $end, $count = -1): \Relay\Relay|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->xrange(...\func_get_args());
=======
        return $this->initializeLazyObject()->xrange(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function xrevrange($key, $end, $start, $count = -1): \Relay\Relay|array|bool
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->xrevrange(...\func_get_args());
=======
        return $this->initializeLazyObject()->xrevrange(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function xread($streams, $count = -1, $block = -1): \Relay\Relay|array|bool|null
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->xread(...\func_get_args());
=======
        return $this->initializeLazyObject()->xread(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function xreadgroup($group, $consumer, $streams, $count = 1, $block = 1): \Relay\Relay|array|bool|null
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->xreadgroup(...\func_get_args());
=======
        return $this->initializeLazyObject()->xreadgroup(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function xtrim($key, $threshold, $approx = false, $minid = false, $limit = -1): \Relay\Relay|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->xtrim(...\func_get_args());
=======
        return $this->initializeLazyObject()->xtrim(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zadd($key, ...$args): mixed
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zadd(...\func_get_args());
=======
        return $this->initializeLazyObject()->zadd(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zrandmember($key, $options = null): mixed
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zrandmember(...\func_get_args());
=======
        return $this->initializeLazyObject()->zrandmember(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zrange($key, $start, $end, $options = null): \Relay\Relay|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zrange(...\func_get_args());
=======
        return $this->initializeLazyObject()->zrange(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zrevrange($key, $start, $end, $options = null): \Relay\Relay|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zrevrange(...\func_get_args());
=======
        return $this->initializeLazyObject()->zrevrange(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zrangebyscore($key, $start, $end, $options = null): \Relay\Relay|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zrangebyscore(...\func_get_args());
=======
        return $this->initializeLazyObject()->zrangebyscore(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zrevrangebyscore($key, $start, $end, $options = null): \Relay\Relay|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zrevrangebyscore(...\func_get_args());
=======
        return $this->initializeLazyObject()->zrevrangebyscore(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zrangestore($dst, $src, $start, $end, $options = null): \Relay\Relay|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zrangestore(...\func_get_args());
=======
        return $this->initializeLazyObject()->zrangestore(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zrangebylex($key, $min, $max, $offset = -1, $count = -1): \Relay\Relay|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zrangebylex(...\func_get_args());
=======
        return $this->initializeLazyObject()->zrangebylex(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zrevrangebylex($key, $max, $min, $offset = -1, $count = -1): \Relay\Relay|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zrevrangebylex(...\func_get_args());
    }

    public function zrank($key, $rank, $withscore = false): \Relay\Relay|array|false|int
    {
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zrank(...\func_get_args());
    }

    public function zrevrank($key, $rank, $withscore = false): \Relay\Relay|array|false|int
    {
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zrevrank(...\func_get_args());
=======
        return $this->initializeLazyObject()->zrevrangebylex(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zrem($key, ...$args): \Relay\Relay|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zrem(...\func_get_args());
=======
        return $this->initializeLazyObject()->zrem(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zremrangebylex($key, $min, $max): \Relay\Relay|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zremrangebylex(...\func_get_args());
=======
        return $this->initializeLazyObject()->zremrangebylex(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zremrangebyrank($key, $start, $end): \Relay\Relay|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zremrangebyrank(...\func_get_args());
=======
        return $this->initializeLazyObject()->zremrangebyrank(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zremrangebyscore($key, $min, $max): \Relay\Relay|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zremrangebyscore(...\func_get_args());
=======
        return $this->initializeLazyObject()->zremrangebyscore(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zcard($key): \Relay\Relay|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zcard(...\func_get_args());
=======
        return $this->initializeLazyObject()->zcard(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zcount($key, $min, $max): \Relay\Relay|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zcount(...\func_get_args());
=======
        return $this->initializeLazyObject()->zcount(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zdiff($keys, $options = null): \Relay\Relay|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zdiff(...\func_get_args());
=======
        return $this->initializeLazyObject()->zdiff(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zdiffstore($dst, $keys): \Relay\Relay|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zdiffstore(...\func_get_args());
=======
        return $this->initializeLazyObject()->zdiffstore(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zincrby($key, $score, $mem): \Relay\Relay|false|float
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zincrby(...\func_get_args());
=======
        return $this->initializeLazyObject()->zincrby(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zlexcount($key, $min, $max): \Relay\Relay|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zlexcount(...\func_get_args());
=======
        return $this->initializeLazyObject()->zlexcount(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zmscore($key, ...$mems): \Relay\Relay|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zmscore(...\func_get_args());
    }

    public function zscore($key, $member): \Relay\Relay|false|float
    {
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zscore(...\func_get_args());
=======
        return $this->initializeLazyObject()->zmscore(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zinter($keys, $weights = null, $options = null): \Relay\Relay|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zinter(...\func_get_args());
=======
        return $this->initializeLazyObject()->zinter(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zintercard($keys, $limit = -1): \Relay\Relay|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zintercard(...\func_get_args());
=======
        return $this->initializeLazyObject()->zintercard(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zinterstore($dst, $keys, $weights = null, $options = null): \Relay\Relay|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zinterstore(...\func_get_args());
=======
        return $this->initializeLazyObject()->zinterstore(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zunion($keys, $weights = null, $options = null): \Relay\Relay|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zunion(...\func_get_args());
=======
        return $this->initializeLazyObject()->zunion(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zunionstore($dst, $keys, $weights = null, $options = null): \Relay\Relay|false|int
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zunionstore(...\func_get_args());
=======
        return $this->initializeLazyObject()->zunionstore(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zpopmin($key, $count = 1): \Relay\Relay|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zpopmin(...\func_get_args());
=======
        return $this->initializeLazyObject()->zpopmin(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function zpopmax($key, $count = 1): \Relay\Relay|array|false
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->zpopmax(...\func_get_args());
=======
        return $this->initializeLazyObject()->zpopmax(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function _getKeys()
    {
<<<<<<< HEAD
        return ($this->lazyObjectState->realInstance ??= ($this->lazyObjectState->initializer)())->_getKeys(...\func_get_args());
=======
        return $this->initializeLazyObject()->_getKeys(...\func_get_args());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }
}
