<?php

namespace Illuminate\Auth\Passwords;

use Illuminate\Auth\Notifications\ResetPassword as ResetPasswordNotification;

trait CanResetPassword
{
    /**
     * Get the e-mail address where password reset links are sent.
     *
     * @return string
     */
    public function getEmailForPasswordReset()
    {
        return $this->email;
    }

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
<<<<<<< HEAD
    public function sendPasswordResetNotification($token)
=======
    public function sendPasswordResetNotification(#[\SensitiveParameter] $token)
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $this->notify(new ResetPasswordNotification($token));
    }
}
