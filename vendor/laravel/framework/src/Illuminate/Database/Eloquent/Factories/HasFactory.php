<?php

namespace Illuminate\Database\Eloquent\Factories;

<<<<<<< HEAD
=======
use Illuminate\Database\Eloquent\Attributes\UseFactory;

/**
 * @template TFactory of \Illuminate\Database\Eloquent\Factories\Factory
 */
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
trait HasFactory
{
    /**
     * Get a new factory instance for the model.
     *
<<<<<<< HEAD
     * @param  callable|array|int|null  $count
     * @param  callable|array  $state
     * @return \Illuminate\Database\Eloquent\Factories\Factory<static>
     */
    public static function factory($count = null, $state = [])
    {
        $factory = static::newFactory() ?: Factory::factoryForModel(get_called_class());

        return $factory
                    ->count(is_numeric($count) ? $count : null)
                    ->state(is_callable($count) || is_array($count) ? $count : $state);
=======
     * @param  (callable(array<string, mixed>, static|null): array<string, mixed>)|array<string, mixed>|int|null  $count
     * @param  (callable(array<string, mixed>, static|null): array<string, mixed>)|array<string, mixed>  $state
     * @return TFactory
     */
    public static function factory($count = null, $state = [])
    {
        $factory = static::newFactory() ?? Factory::factoryForModel(static::class);

        return $factory
            ->count(is_numeric($count) ? $count : null)
            ->state(is_callable($count) || is_array($count) ? $count : $state);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Create a new factory instance for the model.
     *
<<<<<<< HEAD
     * @return \Illuminate\Database\Eloquent\Factories\Factory<static>
     */
    protected static function newFactory()
    {
        //
=======
     * @return TFactory|null
     */
    protected static function newFactory()
    {
        if (isset(static::$factory)) {
            return static::$factory::new();
        }

        return static::getUseFactoryAttribute() ?? null;
    }

    /**
     * Get the factory from the UseFactory class attribute.
     *
     * @return TFactory|null
     */
    protected static function getUseFactoryAttribute()
    {
        $attributes = (new \ReflectionClass(static::class))
            ->getAttributes(UseFactory::class);

        if ($attributes !== []) {
            $useFactory = $attributes[0]->newInstance();

            $factory = new $useFactory->factoryClass;

            $factory->guessModelNamesUsing(fn () => static::class);

            return $factory;
        }
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }
}
