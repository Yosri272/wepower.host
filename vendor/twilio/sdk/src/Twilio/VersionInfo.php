<?php


namespace Twilio;


class VersionInfo {
    const MAJOR = "8";
<<<<<<< HEAD
    const MINOR = "2";
    const PATCH = "2";
=======
    const MINOR = "3";
    const PATCH = "15";
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    public static function string() {
        return implode('.', array(self::MAJOR, self::MINOR, self::PATCH));
    }
}
