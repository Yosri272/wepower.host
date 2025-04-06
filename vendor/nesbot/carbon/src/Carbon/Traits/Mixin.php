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

use Carbon\CarbonInterface;
use Carbon\CarbonInterval;
use Carbon\CarbonPeriod;
use Closure;
use Generator;
use ReflectionClass;
use ReflectionException;
use ReflectionMethod;
use Throwable;

/**
 * Trait Mixin.
 *
 * Allows mixing in entire classes with multiple macros.
 */
trait Mixin
{
    /**
     * Stack of macro instance contexts.
<<<<<<< HEAD
     *
     * @var array
     */
    protected static $macroContextStack = [];
=======
     */
    protected static array $macroContextStack = [];
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    /**
     * Mix another object into the class.
     *
     * @example
     * ```
     * Carbon::mixin(new class {
     *   public function addMoon() {
     *     return function () {
     *       return $this->addDays(30);
     *     };
     *   }
     *   public function subMoon() {
     *     return function () {
     *       return $this->subDays(30);
     *     };
     *   }
     * });
     * $fullMoon = Carbon::create('2018-12-22');
     * $nextFullMoon = $fullMoon->addMoon();
     * $blackMoon = Carbon::create('2019-01-06');
     * $previousBlackMoon = $blackMoon->subMoon();
     * echo "$nextFullMoon\n";
     * echo "$previousBlackMoon\n";
     * ```
     *
<<<<<<< HEAD
     * @param object|string $mixin
     *
     * @throws ReflectionException
     *
     * @return void
     */
    public static function mixin($mixin)
=======
     * @throws ReflectionException
     */
    public static function mixin(object|string $mixin): void
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        \is_string($mixin) && trait_exists($mixin)
            ? self::loadMixinTrait($mixin)
            : self::loadMixinClass($mixin);
    }

    /**
<<<<<<< HEAD
     * @param object|string $mixin
     *
     * @throws ReflectionException
     */
    private static function loadMixinClass($mixin)
    {
        $methods = (new ReflectionClass($mixin))->getMethods(
            ReflectionMethod::IS_PUBLIC | ReflectionMethod::IS_PROTECTED
=======
     * @throws ReflectionException
     */
    private static function loadMixinClass(object|string $mixin): void
    {
        $methods = (new ReflectionClass($mixin))->getMethods(
            ReflectionMethod::IS_PUBLIC | ReflectionMethod::IS_PROTECTED,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        );

        foreach ($methods as $method) {
            if ($method->isConstructor() || $method->isDestructor()) {
                continue;
            }

<<<<<<< HEAD
            $method->setAccessible(true);

            static::macro($method->name, $method->invoke($mixin));
        }
    }

    /**
     * @param string $trait
     */
    private static function loadMixinTrait($trait)
=======
            $macro = $method->invoke($mixin);

            if (\is_callable($macro)) {
                static::macro($method->name, $macro);
            }
        }
    }

    private static function loadMixinTrait(string $trait): void
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $context = eval(self::getAnonymousClassCodeForTrait($trait));
        $className = \get_class($context);
        $baseClass = static::class;

        foreach (self::getMixableMethods($context) as $name) {
            $closureBase = Closure::fromCallable([$context, $name]);

            static::macro($name, function (...$parameters) use ($closureBase, $className, $baseClass) {
                $downContext = isset($this) ? ($this) : new $baseClass();
                $context = isset($this) ? $this->cast($className) : new $className();

                try {
                    // @ is required to handle error if not converted into exceptions
                    $closure = @$closureBase->bindTo($context);
<<<<<<< HEAD
                } catch (Throwable $throwable) { // @codeCoverageIgnore
=======
                } catch (Throwable) { // @codeCoverageIgnore
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                    $closure = $closureBase; // @codeCoverageIgnore
                }

                // in case of errors not converted into exceptions
                $closure = $closure ?: $closureBase;

                $result = $closure(...$parameters);

                if (!($result instanceof $className)) {
                    return $result;
                }

                if ($downContext instanceof CarbonInterface && $result instanceof CarbonInterface) {
                    if ($context !== $result) {
                        $downContext = $downContext->copy();
                    }

                    return $downContext
                        ->setTimezone($result->getTimezone())
                        ->modify($result->format('Y-m-d H:i:s.u'))
                        ->settings($result->getSettings());
                }

                if ($downContext instanceof CarbonInterval && $result instanceof CarbonInterval) {
                    if ($context !== $result) {
                        $downContext = $downContext->copy();
                    }

                    $downContext->copyProperties($result);
                    self::copyStep($downContext, $result);
                    self::copyNegativeUnits($downContext, $result);

                    return $downContext->settings($result->getSettings());
                }

                if ($downContext instanceof CarbonPeriod && $result instanceof CarbonPeriod) {
                    if ($context !== $result) {
                        $downContext = $downContext->copy();
                    }

                    return $downContext
                        ->setDates($result->getStartDate(), $result->getEndDate())
                        ->setRecurrences($result->getRecurrences())
                        ->setOptions($result->getOptions())
                        ->settings($result->getSettings());
                }

                return $result;
            });
        }
    }

<<<<<<< HEAD
    private static function getAnonymousClassCodeForTrait(string $trait)
=======
    private static function getAnonymousClassCodeForTrait(string $trait): string
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return 'return new class() extends '.static::class.' {use '.$trait.';};';
    }

    private static function getMixableMethods(self $context): Generator
    {
        foreach (get_class_methods($context) as $name) {
            if (method_exists(static::class, $name)) {
                continue;
            }

            yield $name;
        }
    }

    /**
     * Stack a Carbon context from inside calls of self::this() and execute a given action.
<<<<<<< HEAD
     *
     * @param static|null $context
     * @param callable    $callable
     *
     * @throws Throwable
     *
     * @return mixed
     */
    protected static function bindMacroContext($context, callable $callable)
=======
     */
    protected static function bindMacroContext(?self $context, callable $callable): mixed
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        static::$macroContextStack[] = $context;

        try {
            return $callable();
        } finally {
            array_pop(static::$macroContextStack);
        }
    }

    /**
     * Return the current context from inside a macro callee or a null if static.
<<<<<<< HEAD
     *
     * @return static|null
     */
    protected static function context()
=======
     */
    protected static function context(): ?static
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return end(static::$macroContextStack) ?: null;
    }

    /**
     * Return the current context from inside a macro callee or a new one if static.
<<<<<<< HEAD
     *
     * @return static
     */
    protected static function this()
=======
     */
    protected static function this(): static
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return end(static::$macroContextStack) ?: new static();
    }
}
