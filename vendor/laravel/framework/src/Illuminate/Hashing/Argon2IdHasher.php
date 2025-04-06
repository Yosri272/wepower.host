<?php

namespace Illuminate\Hashing;

use RuntimeException;

class Argon2IdHasher extends ArgonHasher
{
    /**
     * Check the given plain value against a hash.
     *
     * @param  string  $value
<<<<<<< HEAD
     * @param  string|null  $hashedValue
=======
     * @param  string  $hashedValue
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * @param  array  $options
     * @return bool
     *
     * @throws \RuntimeException
     */
<<<<<<< HEAD
    public function check($value, $hashedValue, array $options = [])
    {
        if ($this->verifyAlgorithm && ! $this->isUsingCorrectAlgorithm($hashedValue)) {
            throw new RuntimeException('This password does not use the Argon2id algorithm.');
        }

=======
    public function check(#[\SensitiveParameter] $value, $hashedValue, array $options = [])
    {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        if (is_null($hashedValue) || strlen($hashedValue) === 0) {
            return false;
        }

<<<<<<< HEAD
=======
        if ($this->verifyAlgorithm && ! $this->isUsingCorrectAlgorithm($hashedValue)) {
            throw new RuntimeException('This password does not use the Argon2id algorithm.');
        }

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        return password_verify($value, $hashedValue);
    }

    /**
     * Verify the hashed value's algorithm.
     *
     * @param  string  $hashedValue
     * @return bool
     */
    protected function isUsingCorrectAlgorithm($hashedValue)
    {
        return $this->info($hashedValue)['algoName'] === 'argon2id';
    }

    /**
     * Get the algorithm that should be used for hashing.
     *
     * @return int
     */
    protected function algorithm()
    {
        return PASSWORD_ARGON2ID;
    }
}
