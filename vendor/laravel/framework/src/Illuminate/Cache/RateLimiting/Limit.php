<?php

namespace Illuminate\Cache\RateLimiting;

class Limit
{
    /**
     * The rate limit signature key.
     *
     * @var mixed
     */
    public $key;

    /**
<<<<<<< HEAD
     * The maximum number of attempts allowed within the given number of minutes.
=======
     * The maximum number of attempts allowed within the given number of seconds.
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     *
     * @var int
     */
    public $maxAttempts;

    /**
<<<<<<< HEAD
     * The number of minutes until the rate limit is reset.
     *
     * @var int
     */
    public $decayMinutes;
=======
     * The number of seconds until the rate limit is reset.
     *
     * @var int
     */
    public $decaySeconds;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    /**
     * The response generator callback.
     *
     * @var callable
     */
    public $responseCallback;

    /**
     * Create a new limit instance.
     *
     * @param  mixed  $key
     * @param  int  $maxAttempts
<<<<<<< HEAD
     * @param  int  $decayMinutes
     * @return void
     */
    public function __construct($key = '', int $maxAttempts = 60, int $decayMinutes = 1)
    {
        $this->key = $key;
        $this->maxAttempts = $maxAttempts;
        $this->decayMinutes = $decayMinutes;
=======
     * @param  int  $decaySeconds
     * @return void
     */
    public function __construct($key = '', int $maxAttempts = 60, int $decaySeconds = 60)
    {
        $this->key = $key;
        $this->maxAttempts = $maxAttempts;
        $this->decaySeconds = $decaySeconds;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Create a new rate limit.
     *
     * @param  int  $maxAttempts
<<<<<<< HEAD
     * @return static
     */
    public static function perMinute($maxAttempts)
    {
        return new static('', $maxAttempts);
=======
     * @param  int  $decaySeconds
     * @return static
     */
    public static function perSecond($maxAttempts, $decaySeconds = 1)
    {
        return new static('', $maxAttempts, $decaySeconds);
    }

    /**
     * Create a new rate limit.
     *
     * @param  int  $maxAttempts
     * @param  int  $decayMinutes
     * @return static
     */
    public static function perMinute($maxAttempts, $decayMinutes = 1)
    {
        return new static('', $maxAttempts, 60 * $decayMinutes);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Create a new rate limit using minutes as decay time.
     *
     * @param  int  $decayMinutes
     * @param  int  $maxAttempts
     * @return static
     */
    public static function perMinutes($decayMinutes, $maxAttempts)
    {
<<<<<<< HEAD
        return new static('', $maxAttempts, $decayMinutes);
=======
        return new static('', $maxAttempts, 60 * $decayMinutes);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Create a new rate limit using hours as decay time.
     *
     * @param  int  $maxAttempts
     * @param  int  $decayHours
     * @return static
     */
    public static function perHour($maxAttempts, $decayHours = 1)
    {
<<<<<<< HEAD
        return new static('', $maxAttempts, 60 * $decayHours);
=======
        return new static('', $maxAttempts, 60 * 60 * $decayHours);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Create a new rate limit using days as decay time.
     *
     * @param  int  $maxAttempts
     * @param  int  $decayDays
     * @return static
     */
    public static function perDay($maxAttempts, $decayDays = 1)
    {
<<<<<<< HEAD
        return new static('', $maxAttempts, 60 * 24 * $decayDays);
=======
        return new static('', $maxAttempts, 60 * 60 * 24 * $decayDays);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Create a new unlimited rate limit.
     *
     * @return static
     */
    public static function none()
    {
        return new Unlimited;
    }

    /**
     * Set the key of the rate limit.
     *
     * @param  mixed  $key
     * @return $this
     */
    public function by($key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * Set the callback that should generate the response when the limit is exceeded.
     *
     * @param  callable  $callback
     * @return $this
     */
    public function response(callable $callback)
    {
        $this->responseCallback = $callback;

        return $this;
    }
<<<<<<< HEAD
=======

    /**
     * Get a potential fallback key for the limit.
     *
     * @return string
     */
    public function fallbackKey()
    {
        $prefix = $this->key ? "{$this->key}:" : '';

        return "{$prefix}attempts:{$this->maxAttempts}:decay:{$this->decaySeconds}";
    }
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
}
