<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Mailer\Exception;

use Symfony\Component\Mailer\Bridge;
use Symfony\Component\Mailer\Transport\Dsn;

/**
 * @author Konstantin Myakshin <molodchick@gmail.com>
 */
class UnsupportedSchemeException extends LogicException
{
    private const SCHEME_TO_PACKAGE_MAP = [
<<<<<<< HEAD
=======
        'azure' => [
            'class' => Bridge\Azure\Transport\AzureTransportFactory::class,
            'package' => 'symfony/azure-mailer',
        ],
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        'brevo' => [
            'class' => Bridge\Brevo\Transport\BrevoTransportFactory::class,
            'package' => 'symfony/brevo-mailer',
        ],
        'gmail' => [
            'class' => Bridge\Google\Transport\GmailTransportFactory::class,
            'package' => 'symfony/google-mailer',
        ],
        'infobip' => [
            'class' => Bridge\Infobip\Transport\InfobipTransportFactory::class,
            'package' => 'symfony/infobip-mailer',
        ],
        'mailersend' => [
            'class' => Bridge\MailerSend\Transport\MailerSendTransportFactory::class,
            'package' => 'symfony/mailersend-mailer',
        ],
        'mailgun' => [
            'class' => Bridge\Mailgun\Transport\MailgunTransportFactory::class,
            'package' => 'symfony/mailgun-mailer',
        ],
        'mailjet' => [
            'class' => Bridge\Mailjet\Transport\MailjetTransportFactory::class,
            'package' => 'symfony/mailjet-mailer',
        ],
<<<<<<< HEAD
=======
        'mailomat' => [
            'class' => Bridge\Mailomat\Transport\MailomatTransportFactory::class,
            'package' => 'symfony/mailomat-mailer',
        ],
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        'mailpace' => [
            'class' => Bridge\MailPace\Transport\MailPaceTransportFactory::class,
            'package' => 'symfony/mail-pace-mailer',
        ],
        'mandrill' => [
            'class' => Bridge\Mailchimp\Transport\MandrillTransportFactory::class,
            'package' => 'symfony/mailchimp-mailer',
        ],
<<<<<<< HEAD
        'ohmysmtp' => [
            'class' => Bridge\OhMySmtp\Transport\OhMySmtpTransportFactory::class,
            'package' => 'symfony/oh-my-smtp-mailer',
=======
        'postal' => [
            'class' => Bridge\Postal\Transport\PostalTransportFactory::class,
            'package' => 'symfony/postal-mailer',
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        ],
        'postmark' => [
            'class' => Bridge\Postmark\Transport\PostmarkTransportFactory::class,
            'package' => 'symfony/postmark-mailer',
        ],
<<<<<<< HEAD
=======
        'mailtrap' => [
            'class' => Bridge\Mailtrap\Transport\MailtrapTransportFactory::class,
            'package' => 'symfony/mailtrap-mailer',
        ],
        'resend' => [
            'class' => Bridge\Resend\Transport\ResendTransportFactory::class,
            'package' => 'symfony/resend-mailer',
        ],
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        'scaleway' => [
            'class' => Bridge\Scaleway\Transport\ScalewayTransportFactory::class,
            'package' => 'symfony/scaleway-mailer',
        ],
        'sendgrid' => [
            'class' => Bridge\Sendgrid\Transport\SendgridTransportFactory::class,
            'package' => 'symfony/sendgrid-mailer',
        ],
<<<<<<< HEAD
        'sendinblue' => [
            'class' => Bridge\Sendinblue\Transport\SendinblueTransportFactory::class,
            'package' => 'symfony/sendinblue-mailer',
        ],
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        'ses' => [
            'class' => Bridge\Amazon\Transport\SesTransportFactory::class,
            'package' => 'symfony/amazon-mailer',
        ],
<<<<<<< HEAD
=======
        'sweego' => [
            'class' => Bridge\Sweego\Transport\SweegoTransportFactory::class,
            'package' => 'symfony/sweego-mailer',
        ],
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    ];

    public function __construct(Dsn $dsn, ?string $name = null, array $supported = [])
    {
        $provider = $dsn->getScheme();
        if (false !== $pos = strpos($provider, '+')) {
            $provider = substr($provider, 0, $pos);
        }
        $package = self::SCHEME_TO_PACKAGE_MAP[$provider] ?? null;
        if ($package && !class_exists($package['class'])) {
<<<<<<< HEAD
            parent::__construct(sprintf('Unable to send emails via "%s" as the bridge is not installed. Try running "composer require %s".', $provider, $package['package']));
=======
            parent::__construct(\sprintf('Unable to send emails via "%s" as the bridge is not installed. Try running "composer require %s".', $provider, $package['package']));
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

            return;
        }

<<<<<<< HEAD
        $message = sprintf('The "%s" scheme is not supported', $dsn->getScheme());
        if ($name && $supported) {
            $message .= sprintf('; supported schemes for mailer "%s" are: "%s"', $name, implode('", "', $supported));
=======
        $message = \sprintf('The "%s" scheme is not supported', $dsn->getScheme());
        if ($name && $supported) {
            $message .= \sprintf('; supported schemes for mailer "%s" are: "%s"', $name, implode('", "', $supported));
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        }

        parent::__construct($message.'.');
    }
}
