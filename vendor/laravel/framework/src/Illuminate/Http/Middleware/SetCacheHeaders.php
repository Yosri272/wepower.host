<?php

namespace Illuminate\Http\Middleware;

use Closure;
use Illuminate\Support\Carbon;
<<<<<<< HEAD
=======
use Illuminate\Support\Collection;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\StreamedResponse;

class SetCacheHeaders
{
    /**
     * Specify the options for the middleware.
     *
     * @param  array|string  $options
     * @return string
     */
    public static function using($options)
    {
        if (is_string($options)) {
            return static::class.':'.$options;
        }

<<<<<<< HEAD
        return collect($options)
            ->map(fn ($value, $key) => is_int($key) ? $value : "{$key}={$value}")
=======
        return (new Collection($options))
            ->map(function ($value, $key) {
                if (is_bool($value)) {
                    return $value ? $key : null;
                }

                return is_int($key) ? $value : "{$key}={$value}";
            })
            ->filter()
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            ->map(fn ($value) => Str::finish($value, ';'))
            ->pipe(fn ($options) => rtrim(static::class.':'.$options->implode(''), ';'));
    }

    /**
     * Add cache related HTTP headers.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|array  $options
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \InvalidArgumentException
     */
    public function handle($request, Closure $next, $options = [])
    {
        $response = $next($request);

        if (! $request->isMethodCacheable() || (! $response->getContent() && ! $response instanceof BinaryFileResponse && ! $response instanceof StreamedResponse)) {
            return $response;
        }

        if (is_string($options)) {
            $options = $this->parseOptions($options);
        }

<<<<<<< HEAD
        if (isset($options['etag']) && $options['etag'] === true) {
            $options['etag'] = $response->getEtag() ?? md5($response->getContent());
=======
        if (! $response->isSuccessful()) {
            return $response;
        }

        if (isset($options['etag']) && $options['etag'] === true) {
            $options['etag'] = $response->getEtag() ?? ($response->getContent() ? md5($response->getContent()) : null);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        }

        if (isset($options['last_modified'])) {
            if (is_numeric($options['last_modified'])) {
<<<<<<< HEAD
                $options['last_modified'] = Carbon::createFromTimestamp($options['last_modified']);
=======
                $options['last_modified'] = Carbon::createFromTimestamp($options['last_modified'], date_default_timezone_get());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            } else {
                $options['last_modified'] = Carbon::parse($options['last_modified']);
            }
        }

        $response->setCache($options);
        $response->isNotModified($request);

        return $response;
    }

    /**
     * Parse the given header options.
     *
     * @param  string  $options
     * @return array
     */
    protected function parseOptions($options)
    {
<<<<<<< HEAD
        return collect(explode(';', rtrim($options, ';')))->mapWithKeys(function ($option) {
=======
        return (new Collection(explode(';', rtrim($options, ';'))))->mapWithKeys(function ($option) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $data = explode('=', $option, 2);

            return [$data[0] => $data[1] ?? true];
        })->all();
    }
}
