<?php

<<<<<<< HEAD
=======
declare(strict_types=1);

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
/**
 * This file is part of the Carbon package.
 *
 * (c) Brian Nesbitt <brian@nesbot.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Carbon;

use Carbon\Exceptions\ImmutableException;
use Symfony\Component\Config\ConfigCacheFactoryInterface;
use Symfony\Component\Translation\Formatter\MessageFormatterInterface;

class TranslatorImmutable extends Translator
{
<<<<<<< HEAD
    /** @var bool */
    private $constructed = false;

    public function __construct($locale, MessageFormatterInterface $formatter = null, $cacheDir = null, $debug = false)
=======
    private bool $constructed = false;

    public function __construct($locale, ?MessageFormatterInterface $formatter = null, $cacheDir = null, $debug = false)
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        parent::__construct($locale, $formatter, $cacheDir, $debug);
        $this->constructed = true;
    }

    /**
     * @codeCoverageIgnore
     */
<<<<<<< HEAD
    public function setDirectories(array $directories)
=======
    public function setDirectories(array $directories): static
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $this->disallowMutation(__METHOD__);

        return parent::setDirectories($directories);
    }

<<<<<<< HEAD
    public function setLocale($locale)
    {
        $this->disallowMutation(__METHOD__);

        return parent::setLocale($locale);
=======
    public function setLocale($locale): void
    {
        $this->disallowMutation(__METHOD__);

        parent::setLocale($locale);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * @codeCoverageIgnore
     */
<<<<<<< HEAD
    public function setMessages($locale, $messages)
=======
    public function setMessages(string $locale, array $messages): static
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $this->disallowMutation(__METHOD__);

        return parent::setMessages($locale, $messages);
    }

    /**
     * @codeCoverageIgnore
     */
<<<<<<< HEAD
    public function setTranslations($messages)
=======
    public function setTranslations(array $messages): static
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $this->disallowMutation(__METHOD__);

        return parent::setTranslations($messages);
    }

    /**
     * @codeCoverageIgnore
     */
    public function setConfigCacheFactory(ConfigCacheFactoryInterface $configCacheFactory): void
    {
        $this->disallowMutation(__METHOD__);

        parent::setConfigCacheFactory($configCacheFactory);
    }

<<<<<<< HEAD
    public function resetMessages($locale = null)
=======
    public function resetMessages(?string $locale = null): bool
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $this->disallowMutation(__METHOD__);

        return parent::resetMessages($locale);
    }

    /**
     * @codeCoverageIgnore
     */
<<<<<<< HEAD
    public function setFallbackLocales(array $locales)
=======
    public function setFallbackLocales(array $locales): void
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $this->disallowMutation(__METHOD__);

        parent::setFallbackLocales($locales);
    }

    private function disallowMutation($method)
    {
        if ($this->constructed) {
            throw new ImmutableException($method.' not allowed on '.static::class);
        }
    }
}
