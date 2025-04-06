<?php

namespace Illuminate\Contracts\Auth;

interface UserProvider
{
    /**
     * Retrieve a user by their unique identifier.
     *
     * @param  mixed  $identifier
     * @return \Illuminate\Contracts\Auth\Authenticatable|null
     */
    public function retrieveById($identifier);

    /**
     * Retrieve a user by their unique identifier and "remember me" token.
     *
     * @param  mixed  $identifier
     * @param  string  $token
     * @return \Illuminate\Contracts\Auth\Authenticatable|null
     */
<<<<<<< HEAD
    public function retrieveByToken($identifier, $token);
=======
    public function retrieveByToken($identifier, #[\SensitiveParameter] $token);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    /**
     * Update the "remember me" token for the given user in storage.
     *
     * @param  \Illuminate\Contracts\Auth\Authenticatable  $user
     * @param  string  $token
     * @return void
     */
<<<<<<< HEAD
    public function updateRememberToken(Authenticatable $user, $token);
=======
    public function updateRememberToken(Authenticatable $user, #[\SensitiveParameter] $token);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    /**
     * Retrieve a user by the given credentials.
     *
     * @param  array  $credentials
     * @return \Illuminate\Contracts\Auth\Authenticatable|null
     */
<<<<<<< HEAD
    public function retrieveByCredentials(array $credentials);
=======
    public function retrieveByCredentials(#[\SensitiveParameter] array $credentials);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    /**
     * Validate a user against the given credentials.
     *
     * @param  \Illuminate\Contracts\Auth\Authenticatable  $user
     * @param  array  $credentials
     * @return bool
     */
<<<<<<< HEAD
    public function validateCredentials(Authenticatable $user, array $credentials);
=======
    public function validateCredentials(Authenticatable $user, #[\SensitiveParameter] array $credentials);

    /**
     * Rehash the user's password if required and supported.
     *
     * @param  \Illuminate\Contracts\Auth\Authenticatable  $user
     * @param  array  $credentials
     * @param  bool  $force
     * @return void
     */
    public function rehashPasswordIfRequired(Authenticatable $user, #[\SensitiveParameter] array $credentials, bool $force = false);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
}
