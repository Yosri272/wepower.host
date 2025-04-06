<?php

namespace Illuminate\Http\Client\Events;

<<<<<<< HEAD
=======
use Illuminate\Http\Client\ConnectionException;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use Illuminate\Http\Client\Request;

class ConnectionFailed
{
    /**
     * The request instance.
     *
     * @var \Illuminate\Http\Client\Request
     */
    public $request;

    /**
<<<<<<< HEAD
     * Create a new event instance.
     *
     * @param  \Illuminate\Http\Client\Request  $request
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
=======
     * The exception instance.
     *
     * @var \Illuminate\Http\Client\ConnectionException
     */
    public $exception;

    /**
     * Create a new event instance.
     *
     * @param  \Illuminate\Http\Client\Request  $request
     * @param  \Illuminate\Http\Client\ConnectionException  $exception
     * @return void
     */
    public function __construct(Request $request, ConnectionException $exception)
    {
        $this->request = $request;
        $this->exception = $exception;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }
}
