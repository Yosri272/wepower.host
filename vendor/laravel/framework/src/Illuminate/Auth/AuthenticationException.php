<?php

namespace Illuminate\Auth;

use Exception;
<<<<<<< HEAD
=======
use Illuminate\Http\Request;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

class AuthenticationException extends Exception
{
    /**
     * All of the guards that were checked.
     *
     * @var array
     */
    protected $guards;

    /**
     * The path the user should be redirected to.
     *
     * @var string|null
     */
    protected $redirectTo;

    /**
<<<<<<< HEAD
=======
     * The callback that should be used to generate the authentication redirect path.
     *
     * @var callable
     */
    protected static $redirectToCallback;

    /**
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * Create a new authentication exception.
     *
     * @param  string  $message
     * @param  array  $guards
     * @param  string|null  $redirectTo
     * @return void
     */
    public function __construct($message = 'Unauthenticated.', array $guards = [], $redirectTo = null)
    {
        parent::__construct($message);

        $this->guards = $guards;
        $this->redirectTo = $redirectTo;
    }

    /**
     * Get the guards that were checked.
     *
     * @return array
     */
    public function guards()
    {
        return $this->guards;
    }

    /**
     * Get the path the user should be redirected to.
     *
<<<<<<< HEAD
     * @return string|null
     */
    public function redirectTo()
    {
        return $this->redirectTo;
=======
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    public function redirectTo(Request $request)
    {
        if ($this->redirectTo) {
            return $this->redirectTo;
        }

        if (static::$redirectToCallback) {
            return call_user_func(static::$redirectToCallback, $request);
        }
    }

    /**
     * Specify the callback that should be used to generate the redirect path.
     *
     * @param  callable  $redirectToCallback
     * @return void
     */
    public static function redirectUsing(callable $redirectToCallback)
    {
        static::$redirectToCallback = $redirectToCallback;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }
}
