<?php

namespace Illuminate\Cache;

<<<<<<< HEAD
=======
use Illuminate\Support\Collection;

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
trait RetrievesMultipleKeys
{
    /**
     * Retrieve multiple items from the cache by key.
     *
     * Items not found in the cache will have a null value.
     *
     * @param  array  $keys
     * @return array
     */
    public function many(array $keys)
    {
        $return = [];

<<<<<<< HEAD
        $keys = collect($keys)->mapWithKeys(function ($value, $key) {
            return [is_string($key) ? $key : $value => is_string($key) ? $value : null];
        })->all();

        foreach ($keys as $key => $default) {
=======
        $keys = (new Collection($keys))
            ->mapWithKeys(fn ($value, $key) => [is_string($key) ? $key : $value => is_string($key) ? $value : null])
            ->all();

        foreach ($keys as $key => $default) {
            /** @phpstan-ignore arguments.count (some clients don't accept a default) */
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $return[$key] = $this->get($key, $default);
        }

        return $return;
    }

    /**
     * Store multiple items in the cache for a given number of seconds.
     *
     * @param  array  $values
     * @param  int  $seconds
     * @return bool
     */
    public function putMany(array $values, $seconds)
    {
        $manyResult = null;

        foreach ($values as $key => $value) {
            $result = $this->put($key, $value, $seconds);

            $manyResult = is_null($manyResult) ? $result : $result && $manyResult;
        }

        return $manyResult ?: false;
    }
}
