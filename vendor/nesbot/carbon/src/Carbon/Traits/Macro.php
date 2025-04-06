<?php

<<<<<<< HEAD
=======
declare(strict_types=1);

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
/**
 * This file is part of the Carbon package.
 *
 * (c) Brian Nesbitt <brian@nesbot.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Carbon\Traits;

<<<<<<< HEAD
=======
use Carbon\FactoryImmutable;

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
/**
 * Trait Macros.
 *
 * Allows users to register macros within the Carbon class.
 */
trait Macro
{
    use Mixin;

    /**
<<<<<<< HEAD
     * The registered macros.
     *
     * @var array
     */
    protected static $globalMacros = [];

    /**
     * The registered generic macros.
     *
     * @var array
     */
    protected static $globalGenericMacros = [];

    /**
     * Register a custom macro.
     *
=======
     * Register a custom macro.
     *
     * Pass null macro to remove it.
     *
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * @example
     * ```
     * $userSettings = [
     *   'locale' => 'pt',
     *   'timezone' => 'America/Sao_Paulo',
     * ];
     * Carbon::macro('userFormat', function () use ($userSettings) {
     *   return $this->copy()->locale($userSettings['locale'])->tz($userSettings['timezone'])->calendar();
     * });
     * echo Carbon::yesterday()->hours(11)->userFormat();
     * ```
<<<<<<< HEAD
     *
     * @param string          $name
     * @param object|callable $macro
     *
     * @return void
     */
    public static function macro($name, $macro)
    {
        static::$globalMacros[$name] = $macro;
=======
     */
    public static function macro(string $name, ?callable $macro): void
    {
        FactoryImmutable::getDefaultInstance()->macro($name, $macro);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Remove all macros and generic macros.
     */
<<<<<<< HEAD
    public static function resetMacros()
    {
        static::$globalMacros = [];
        static::$globalGenericMacros = [];
=======
    public static function resetMacros(): void
    {
        FactoryImmutable::getDefaultInstance()->resetMacros();
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Register a custom macro.
     *
<<<<<<< HEAD
     * @param object|callable $macro
     * @param int             $priority marco with higher priority is tried first
     *
     * @return void
     */
    public static function genericMacro($macro, $priority = 0)
    {
        if (!isset(static::$globalGenericMacros[$priority])) {
            static::$globalGenericMacros[$priority] = [];
            krsort(static::$globalGenericMacros, SORT_NUMERIC);
        }

        static::$globalGenericMacros[$priority][] = $macro;
=======
     * @param callable $macro
     * @param int      $priority marco with higher priority is tried first
     *
     * @return void
     */
    public static function genericMacro(callable $macro, int $priority = 0): void
    {
        FactoryImmutable::getDefaultInstance()->genericMacro($macro, $priority);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Checks if macro is registered globally.
     *
     * @param string $name
     *
     * @return bool
     */
<<<<<<< HEAD
    public static function hasMacro($name)
    {
        return isset(static::$globalMacros[$name]);
=======
    public static function hasMacro(string $name): bool
    {
        return FactoryImmutable::getInstance()->hasMacro($name);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Get the raw callable macro registered globally for a given name.
<<<<<<< HEAD
     *
     * @param string $name
     *
     * @return callable|null
     */
    public static function getMacro($name)
    {
        return static::$globalMacros[$name] ?? null;
=======
     */
    public static function getMacro(string $name): ?callable
    {
        return FactoryImmutable::getInstance()->getMacro($name);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Checks if macro is registered globally or locally.
<<<<<<< HEAD
     *
     * @param string $name
     *
     * @return bool
     */
    public function hasLocalMacro($name)
    {
        return ($this->localMacros && isset($this->localMacros[$name])) || static::hasMacro($name);
=======
     */
    public function hasLocalMacro(string $name): bool
    {
        return ($this->localMacros && isset($this->localMacros[$name])) || $this->transmitFactory(
            static fn () => static::hasMacro($name),
        );
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Get the raw callable macro registered globally or locally for a given name.
<<<<<<< HEAD
     *
     * @param string $name
     *
     * @return callable|null
     */
    public function getLocalMacro($name)
    {
        return ($this->localMacros ?? [])[$name] ?? static::getMacro($name);
=======
     */
    public function getLocalMacro(string $name): ?callable
    {
        return ($this->localMacros ?? [])[$name] ?? $this->transmitFactory(
            static fn () => static::getMacro($name),
        );
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }
}
