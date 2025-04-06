<?php
<<<<<<< HEAD

if (!class_exists('SodiumException', false)) {
    /**
     * Class SodiumException
     */
    class SodiumException extends Exception
    {

    }
=======
declare(strict_types=1);

if (class_exists('SodiumException', false)) {
    return;
}
/**
 * Class SodiumException
 */
class SodiumException extends Exception
{

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
}
