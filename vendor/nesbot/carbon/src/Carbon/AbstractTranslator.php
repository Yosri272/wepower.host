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

use Carbon\MessageFormatter\MessageFormatterMapper;
use Closure;
use ReflectionException;
use ReflectionFunction;
use Symfony\Component\Translation;
use Symfony\Component\Translation\Formatter\MessageFormatterInterface;
use Symfony\Component\Translation\Loader\ArrayLoader;

abstract class AbstractTranslator extends Translation\Translator
{
<<<<<<< HEAD
=======
    public const REGION_CODE_LENGTH = 2;

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    /**
     * Translator singletons for each language.
     *
     * @var array
     */
<<<<<<< HEAD
    protected static $singletons = [];
=======
    protected static array $singletons = [];
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    /**
     * List of custom localized messages.
     *
     * @var array
     */
<<<<<<< HEAD
    protected $messages = [];
=======
    protected array $messages = [];
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    /**
     * List of custom directories that contain translation files.
     *
     * @var string[]
     */
<<<<<<< HEAD
    protected $directories = [];

    /**
     * Set to true while constructing.
     *
     * @var bool
     */
    protected $initializing = false;
=======
    protected array $directories = [];

    /**
     * Set to true while constructing.
     */
    protected bool $initializing = false;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    /**
     * List of locales aliases.
     *
     * @var array<string, string>
     */
<<<<<<< HEAD
    protected $aliases = [
=======
    protected array $aliases = [
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        'me' => 'sr_Latn_ME',
        'scr' => 'sh',
    ];

    /**
     * Return a singleton instance of Translator.
     *
     * @param string|null $locale optional initial locale ("en" - english by default)
     *
     * @return static
     */
<<<<<<< HEAD
    public static function get($locale = null)
    {
        $locale = $locale ?: 'en';
        $key = static::class === Translator::class ? $locale : static::class.'|'.$locale;

        if (!isset(static::$singletons[$key])) {
            static::$singletons[$key] = new static($locale);
        }

        return static::$singletons[$key];
    }

    public function __construct($locale, MessageFormatterInterface $formatter = null, $cacheDir = null, $debug = false)
    {
        parent::setLocale($locale);
        $this->initializing = true;
        $this->directories = [__DIR__.'/Lang'];
        $this->addLoader('array', new ArrayLoader());
        parent::__construct($locale, new MessageFormatterMapper($formatter), $cacheDir, $debug);
        $this->initializing = false;
=======
    public static function get(?string $locale = null): static
    {
        $locale = $locale ?: 'en';
        $key = static::class === Translator::class ? $locale : static::class.'|'.$locale;
        $count = \count(static::$singletons);

        // Remember only the last 10 translators created
        if ($count > 10) {
            foreach (\array_slice(array_keys(static::$singletons), 0, $count - 10) as $index) {
                unset(static::$singletons[$index]);
            }
        }

        static::$singletons[$key] ??= new static($locale);

        return static::$singletons[$key];
    }

    public function __construct($locale, ?MessageFormatterInterface $formatter = null, $cacheDir = null, $debug = false)
    {
        $this->initialize($locale, $formatter, $cacheDir, $debug);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Returns the list of directories translation files are searched in.
<<<<<<< HEAD
     *
     * @return array
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function getDirectories(): array
    {
        return $this->directories;
    }

    /**
     * Set list of directories translation files are searched in.
     *
     * @param array $directories new directories list
     *
     * @return $this
     */
<<<<<<< HEAD
    public function setDirectories(array $directories)
=======
    public function setDirectories(array $directories): static
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $this->directories = $directories;

        return $this;
    }

    /**
     * Add a directory to the list translation files are searched in.
     *
     * @param string $directory new directory
     *
     * @return $this
     */
<<<<<<< HEAD
    public function addDirectory(string $directory)
=======
    public function addDirectory(string $directory): static
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $this->directories[] = $directory;

        return $this;
    }

    /**
     * Remove a directory from the list translation files are searched in.
     *
     * @param string $directory directory path
     *
     * @return $this
     */
<<<<<<< HEAD
    public function removeDirectory(string $directory)
    {
        $search = rtrim(strtr($directory, '\\', '/'), '/');

        return $this->setDirectories(array_filter($this->getDirectories(), function ($item) use ($search) {
            return rtrim(strtr($item, '\\', '/'), '/') !== $search;
        }));
=======
    public function removeDirectory(string $directory): static
    {
        $search = rtrim(strtr($directory, '\\', '/'), '/');

        return $this->setDirectories(array_filter(
            $this->getDirectories(),
            static fn ($item) => rtrim(strtr($item, '\\', '/'), '/') !== $search,
        ));
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Reset messages of a locale (all locale if no locale passed).
     * Remove custom messages and reload initial messages from matching
     * file in Lang directory.
<<<<<<< HEAD
     *
     * @param string|null $locale
     *
     * @return bool
     */
    public function resetMessages($locale = null)
=======
     */
    public function resetMessages(?string $locale = null): bool
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        if ($locale === null) {
            $this->messages = [];

            return true;
        }

<<<<<<< HEAD
        foreach ($this->getDirectories() as $directory) {
            $data = @include sprintf('%s/%s.php', rtrim($directory, '\\/'), $locale);
=======
        $this->assertValidLocale($locale);

        foreach ($this->getDirectories() as $directory) {
            $data = @include \sprintf('%s/%s.php', rtrim($directory, '\\/'), $locale);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

            if ($data !== false) {
                $this->messages[$locale] = $data;
                $this->addResource('array', $this->messages[$locale], $locale);

                return true;
            }
        }

        return false;
    }

    /**
     * Returns the list of files matching a given locale prefix (or all if empty).
     *
     * @param string $prefix prefix required to filter result
     *
     * @return array
     */
<<<<<<< HEAD
    public function getLocalesFiles($prefix = '')
=======
    public function getLocalesFiles(string $prefix = ''): array
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $files = [];

        foreach ($this->getDirectories() as $directory) {
            $directory = rtrim($directory, '\\/');

            foreach (glob("$directory/$prefix*.php") as $file) {
                $files[] = $file;
            }
        }

        return array_unique($files);
    }

    /**
     * Returns the list of internally available locales and already loaded custom locales.
     * (It will ignore custom translator dynamic loading.)
     *
     * @param string $prefix prefix required to filter result
     *
     * @return array
     */
<<<<<<< HEAD
    public function getAvailableLocales($prefix = '')
=======
    public function getAvailableLocales(string $prefix = ''): array
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $locales = [];
        foreach ($this->getLocalesFiles($prefix) as $file) {
            $locales[] = substr($file, strrpos($file, '/') + 1, -4);
        }

        return array_unique(array_merge($locales, array_keys($this->messages)));
    }

    protected function translate(?string $id, array $parameters = [], ?string $domain = null, ?string $locale = null): string
    {
        if ($domain === null) {
            $domain = 'messages';
        }

        $catalogue = $this->getCatalogue($locale);
        $format = $this instanceof TranslatorStrongTypeInterface
            ? $this->getFromCatalogue($catalogue, (string) $id, $domain)
            : $this->getCatalogue($locale)->get((string) $id, $domain); // @codeCoverageIgnore

        if ($format instanceof Closure) {
            // @codeCoverageIgnoreStart
            try {
                $count = (new ReflectionFunction($format))->getNumberOfRequiredParameters();
<<<<<<< HEAD
            } catch (ReflectionException $exception) {
=======
            } catch (ReflectionException) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                $count = 0;
            }
            // @codeCoverageIgnoreEnd

            return $format(
                ...array_values($parameters),
                ...array_fill(0, max(0, $count - \count($parameters)), null)
            );
        }

        return parent::trans($id, $parameters, $domain, $locale);
    }

    /**
     * Init messages language from matching file in Lang directory.
     *
     * @param string $locale
     *
     * @return bool
     */
<<<<<<< HEAD
    protected function loadMessagesFromFile($locale)
=======
    protected function loadMessagesFromFile(string $locale): bool
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return isset($this->messages[$locale]) || $this->resetMessages($locale);
    }

    /**
     * Set messages of a locale and take file first if present.
     *
     * @param string $locale
     * @param array  $messages
     *
     * @return $this
     */
<<<<<<< HEAD
    public function setMessages($locale, $messages)
=======
    public function setMessages(string $locale, array $messages): static
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $this->loadMessagesFromFile($locale);
        $this->addResource('array', $messages, $locale);
        $this->messages[$locale] = array_merge(
            $this->messages[$locale] ?? [],
            $messages
        );

        return $this;
    }

    /**
     * Set messages of the current locale and take file first if present.
     *
     * @param array $messages
     *
     * @return $this
     */
<<<<<<< HEAD
    public function setTranslations($messages)
=======
    public function setTranslations(array $messages): static
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->setMessages($this->getLocale(), $messages);
    }

    /**
     * Get messages of a locale, if none given, return all the
     * languages.
<<<<<<< HEAD
     *
     * @param string|null $locale
     *
     * @return array
     */
    public function getMessages($locale = null)
=======
     */
    public function getMessages(?string $locale = null): array
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $locale === null ? $this->messages : $this->messages[$locale];
    }

    /**
     * Set the current translator locale and indicate if the source locale file exists
     *
     * @param string $locale locale ex. en
<<<<<<< HEAD
     *
     * @return bool
     */
    public function setLocale($locale)
=======
     */
    public function setLocale($locale): void
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $locale = preg_replace_callback('/[-_]([a-z]{2,}|\d{2,})/', function ($matches) {
            // _2-letters or YUE is a region, _3+-letters is a variant
            $upper = strtoupper($matches[1]);

<<<<<<< HEAD
            if ($upper === 'YUE' || $upper === 'ISO' || \strlen($upper) < 3) {
=======
            if ($upper === 'YUE' || $upper === 'ISO' || \strlen($upper) <= static::REGION_CODE_LENGTH) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                return "_$upper";
            }

            return '_'.ucfirst($matches[1]);
        }, strtolower($locale));

        $previousLocale = $this->getLocale();

        if ($previousLocale === $locale && isset($this->messages[$locale])) {
<<<<<<< HEAD
            return true;
=======
            return;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        }

        unset(static::$singletons[$previousLocale]);

        if ($locale === 'auto') {
            $completeLocale = setlocale(LC_TIME, '0');
            $locale = preg_replace('/^([^_.-]+).*$/', '$1', $completeLocale);
            $locales = $this->getAvailableLocales($locale);

            $completeLocaleChunks = preg_split('/[_.-]+/', $completeLocale);

<<<<<<< HEAD
            $getScore = function ($language) use ($completeLocaleChunks) {
                return self::compareChunkLists($completeLocaleChunks, preg_split('/[_.-]+/', $language));
            };

            usort($locales, function ($first, $second) use ($getScore) {
                return $getScore($second) <=> $getScore($first);
            });
=======
            $getScore = static fn ($language) => self::compareChunkLists(
                $completeLocaleChunks,
                preg_split('/[_.-]+/', $language),
            );

            usort($locales, static fn ($first, $second) => $getScore($second) <=> $getScore($first));
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

            $locale = $locales[0];
        }

        if (isset($this->aliases[$locale])) {
            $locale = $this->aliases[$locale];
        }

        // If subtag (ex: en_CA) first load the macro (ex: en) to have a fallback
        if (str_contains($locale, '_') &&
            $this->loadMessagesFromFile($macroLocale = preg_replace('/^([^_]+).*$/', '$1', $locale))
        ) {
            parent::setLocale($macroLocale);
        }

        if (!$this->loadMessagesFromFile($locale) && !$this->initializing) {
<<<<<<< HEAD
            return false;
        }

        parent::setLocale($locale);

        return true;
=======
            return;
        }

        parent::setLocale($locale);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Show locale on var_dump().
     *
     * @return array
     */
    public function __debugInfo()
    {
        return [
            'locale' => $this->getLocale(),
        ];
    }

<<<<<<< HEAD
=======
    public function __serialize(): array
    {
        return [
            'locale' => $this->getLocale(),
        ];
    }

    public function __unserialize(array $data): void
    {
        $this->initialize($data['locale'] ?? 'en');
    }

    private function initialize($locale, ?MessageFormatterInterface $formatter = null, $cacheDir = null, $debug = false): void
    {
        parent::setLocale($locale);
        $this->initializing = true;
        $this->directories = [__DIR__.'/Lang'];
        $this->addLoader('array', new ArrayLoader());
        parent::__construct($locale, new MessageFormatterMapper($formatter), $cacheDir, $debug);
        $this->initializing = false;
    }

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    private static function compareChunkLists($referenceChunks, $chunks)
    {
        $score = 0;

        foreach ($referenceChunks as $index => $chunk) {
            if (!isset($chunks[$index])) {
                $score++;

                continue;
            }

            if (strtolower($chunks[$index]) === strtolower($chunk)) {
                $score += 10;
            }
        }

        return $score;
    }
}
