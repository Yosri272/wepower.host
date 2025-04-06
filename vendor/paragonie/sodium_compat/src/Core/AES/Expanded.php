<?php
<<<<<<< HEAD
=======
declare(strict_types=1);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

if (class_exists('ParagonIE_Sodium_Core_AES_Expanded', false)) {
    return;
}

/**
 * @internal This should only be used by sodium_compat
 */
class ParagonIE_Sodium_Core_AES_Expanded extends ParagonIE_Sodium_Core_AES_KeySchedule
<<<<<<< HEAD
{
    /** @var bool $expanded */
    protected $expanded = true;
}
=======
{}
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
