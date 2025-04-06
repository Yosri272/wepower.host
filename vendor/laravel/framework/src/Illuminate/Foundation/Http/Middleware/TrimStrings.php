<?php

namespace Illuminate\Foundation\Http\Middleware;

use Closure;
<<<<<<< HEAD
=======
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

class TrimStrings extends TransformsRequest
{
    /**
<<<<<<< HEAD
     * All of the registered skip callbacks.
     *
     * @var array
     */
    protected static $skipCallbacks = [];

    /**
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * The attributes that should not be trimmed.
     *
     * @var array<int, string>
     */
    protected $except = [
<<<<<<< HEAD
        //
    ];

    /**
=======
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * The globally ignored attributes that should not be trimmed.
     *
     * @var array
     */
    protected static $neverTrim = [];

    /**
     * All of the registered skip callbacks.
     *
     * @var array
     */
    protected static $skipCallbacks = [];

    /**
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        foreach (static::$skipCallbacks as $callback) {
            if ($callback($request)) {
                return $next($request);
            }
        }

        return parent::handle($request, $next);
    }

    /**
     * Transform the given value.
     *
     * @param  string  $key
     * @param  mixed  $value
     * @return mixed
     */
    protected function transform($key, $value)
    {
<<<<<<< HEAD
        if (in_array($key, $this->except, true) || ! is_string($value)) {
            return $value;
        }

        return preg_replace('~^[\s\x{FEFF}\x{200B}]+|[\s\x{FEFF}\x{200B}]+$~u', '', $value) ?? trim($value);
=======
        $except = array_merge($this->except, static::$neverTrim);

        if ($this->shouldSkip($key, $except) || ! is_string($value)) {
            return $value;
        }

        return Str::trim($value);
    }

    /**
     * Determine if the given key should be skipped.
     *
     * @param  string  $key
     * @param  array  $except
     * @return bool
     */
    protected function shouldSkip($key, $except)
    {
        return in_array($key, $except, true);
    }

    /**
     * Indicate that the given attributes should never be trimmed.
     *
     * @param  array|string  $attributes
     * @return void
     */
    public static function except($attributes)
    {
        static::$neverTrim = array_values(array_unique(
            array_merge(static::$neverTrim, Arr::wrap($attributes))
        ));
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Register a callback that instructs the middleware to be skipped.
     *
     * @param  \Closure  $callback
     * @return void
     */
    public static function skipWhen(Closure $callback)
    {
        static::$skipCallbacks[] = $callback;
    }

    /**
     * Flush the middleware's global state.
     *
     * @return void
     */
    public static function flushState()
    {
<<<<<<< HEAD
=======
        static::$neverTrim = [];

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        static::$skipCallbacks = [];
    }
}
