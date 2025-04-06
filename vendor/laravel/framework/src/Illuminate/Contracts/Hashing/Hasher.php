<?php

namespace Illuminate\Contracts\Hashing;

interface Hasher
{
    /**
     * Get information about the given hashed value.
     *
     * @param  string  $hashedValue
     * @return array
     */
    public function info($hashedValue);

    /**
     * Hash the given value.
     *
     * @param  string  $value
     * @param  array  $options
     * @return string
     */
<<<<<<< HEAD
    public function make($value, array $options = []);
=======
    public function make(#[\SensitiveParameter] $value, array $options = []);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    /**
     * Check the given plain value against a hash.
     *
     * @param  string  $value
     * @param  string  $hashedValue
     * @param  array  $options
     * @return bool
     */
<<<<<<< HEAD
    public function check($value, $hashedValue, array $options = []);
=======
    public function check(#[\SensitiveParameter] $value, $hashedValue, array $options = []);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    /**
     * Check if the given hash has been hashed using the given options.
     *
     * @param  string  $hashedValue
     * @param  array  $options
     * @return bool
     */
    public function needsRehash($hashedValue, array $options = []);
}
