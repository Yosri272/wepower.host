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

use JsonSerializable;
<<<<<<< HEAD
use ReturnTypeWillChange;

class Language implements JsonSerializable
{
    /**
     * @var array
     */
    protected static $languagesNames;

    /**
     * @var array
     */
    protected static $regionsNames;

    /**
     * @var string
     */
    protected $id;

    /**
     * @var string
     */
    protected $code;

    /**
     * @var string|null
     */
    protected $variant;

    /**
     * @var string|null
     */
    protected $region;

    /**
     * @var array
     */
    protected $names;

    /**
     * @var string
     */
    protected $isoName;

    /**
     * @var string
     */
    protected $nativeName;
=======

class Language implements JsonSerializable
{
    protected static ?array $languagesNames = null;

    protected static ?array $regionsNames = null;

    protected string $id;

    protected string $code;

    protected ?string $variant = null;

    protected ?string $region = null;

    protected ?array $names = null;

    protected ?string $isoName = null;

    protected ?string $nativeName = null;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    public function __construct(string $id)
    {
        $this->id = str_replace('-', '_', $id);
        $parts = explode('_', $this->id);
        $this->code = $parts[0];

        if (isset($parts[1])) {
            if (!preg_match('/^[A-Z]+$/', $parts[1])) {
                $this->variant = $parts[1];
                $parts[1] = $parts[2] ?? null;
            }
            if ($parts[1]) {
                $this->region = $parts[1];
            }
        }
    }

    /**
     * Get the list of the known languages.
     *
     * @return array
     */
<<<<<<< HEAD
    public static function all()
    {
        if (!static::$languagesNames) {
            static::$languagesNames = require __DIR__.'/List/languages.php';
        }
=======
    public static function all(): array
    {
        static::$languagesNames ??= require __DIR__.'/List/languages.php';
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        return static::$languagesNames;
    }

    /**
     * Get the list of the known regions.
     *
<<<<<<< HEAD
     * @return array
     */
    public static function regions()
    {
        if (!static::$regionsNames) {
            static::$regionsNames = require __DIR__.'/List/regions.php';
        }
=======
     * ⚠ ISO 3166-2 short name provided with no warranty, should not
     * be used for any purpose to show official state names.
     */
    public static function regions(): array
    {
        static::$regionsNames ??= require __DIR__.'/List/regions.php';
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        return static::$regionsNames;
    }

    /**
     * Get both isoName and nativeName as an array.
<<<<<<< HEAD
     *
     * @return array
     */
    public function getNames(): array
    {
        if (!$this->names) {
            $this->names = static::all()[$this->code] ?? [
                'isoName' => $this->code,
                'nativeName' => $this->code,
            ];
        }
=======
     */
    public function getNames(): array
    {
        $this->names ??= static::all()[$this->code] ?? [
            'isoName' => $this->code,
            'nativeName' => $this->code,
        ];
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        return $this->names;
    }

    /**
     * Returns the original locale ID.
<<<<<<< HEAD
     *
     * @return string
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Returns the code of the locale "en"/"fr".
<<<<<<< HEAD
     *
     * @return string
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * Returns the variant code such as cyrl/latn.
<<<<<<< HEAD
     *
     * @return string|null
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function getVariant(): ?string
    {
        return $this->variant;
    }

    /**
     * Returns the variant such as Cyrillic/Latin.
<<<<<<< HEAD
     *
     * @return string|null
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function getVariantName(): ?string
    {
        if ($this->variant === 'Latn') {
            return 'Latin';
        }

        if ($this->variant === 'Cyrl') {
            return 'Cyrillic';
        }

        return $this->variant;
    }

    /**
     * Returns the region part of the locale.
<<<<<<< HEAD
     *
     * @return string|null
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function getRegion(): ?string
    {
        return $this->region;
    }

    /**
     * Returns the region name for the current language.
     *
<<<<<<< HEAD
     * @return string|null
=======
     * ⚠ ISO 3166-2 short name provided with no warranty, should not
     * be used for any purpose to show official state names.
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function getRegionName(): ?string
    {
        return $this->region ? (static::regions()[$this->region] ?? $this->region) : null;
    }

    /**
     * Returns the long ISO language name.
<<<<<<< HEAD
     *
     * @return string
     */
    public function getFullIsoName(): string
    {
        if (!$this->isoName) {
            $this->isoName = $this->getNames()['isoName'];
        }
=======
     */
    public function getFullIsoName(): string
    {
        $this->isoName ??= $this->getNames()['isoName'];
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        return $this->isoName;
    }

    /**
     * Set the ISO language name.
<<<<<<< HEAD
     *
     * @param string $isoName
     */
    public function setIsoName(string $isoName): self
=======
     */
    public function setIsoName(string $isoName): static
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $this->isoName = $isoName;

        return $this;
    }

    /**
     * Return the full name of the language in this language.
<<<<<<< HEAD
     *
     * @return string
     */
    public function getFullNativeName(): string
    {
        if (!$this->nativeName) {
            $this->nativeName = $this->getNames()['nativeName'];
        }
=======
     */
    public function getFullNativeName(): string
    {
        $this->nativeName ??= $this->getNames()['nativeName'];
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        return $this->nativeName;
    }

    /**
     * Set the name of the language in this language.
<<<<<<< HEAD
     *
     * @param string $nativeName
     */
    public function setNativeName(string $nativeName): self
=======
     */
    public function setNativeName(string $nativeName): static
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $this->nativeName = $nativeName;

        return $this;
    }

    /**
     * Returns the short ISO language name.
<<<<<<< HEAD
     *
     * @return string
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function getIsoName(): string
    {
        $name = $this->getFullIsoName();

        return trim(strstr($name, ',', true) ?: $name);
    }

    /**
     * Get the short name of the language in this language.
<<<<<<< HEAD
     *
     * @return string
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function getNativeName(): string
    {
        $name = $this->getFullNativeName();

        return trim(strstr($name, ',', true) ?: $name);
    }

    /**
     * Get a string with short ISO name, region in parentheses if applicable, variant in parentheses if applicable.
<<<<<<< HEAD
     *
     * @return string
     */
    public function getIsoDescription()
=======
     */
    public function getIsoDescription(): string
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $region = $this->getRegionName();
        $variant = $this->getVariantName();

        return $this->getIsoName().($region ? ' ('.$region.')' : '').($variant ? ' ('.$variant.')' : '');
    }

    /**
     * Get a string with short native name, region in parentheses if applicable, variant in parentheses if applicable.
<<<<<<< HEAD
     *
     * @return string
     */
    public function getNativeDescription()
=======
     */
    public function getNativeDescription(): string
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $region = $this->getRegionName();
        $variant = $this->getVariantName();

        return $this->getNativeName().($region ? ' ('.$region.')' : '').($variant ? ' ('.$variant.')' : '');
    }

    /**
     * Get a string with long ISO name, region in parentheses if applicable, variant in parentheses if applicable.
<<<<<<< HEAD
     *
     * @return string
     */
    public function getFullIsoDescription()
=======
     */
    public function getFullIsoDescription(): string
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $region = $this->getRegionName();
        $variant = $this->getVariantName();

        return $this->getFullIsoName().($region ? ' ('.$region.')' : '').($variant ? ' ('.$variant.')' : '');
    }

    /**
     * Get a string with long native name, region in parentheses if applicable, variant in parentheses if applicable.
<<<<<<< HEAD
     *
     * @return string
     */
    public function getFullNativeDescription()
=======
     */
    public function getFullNativeDescription(): string
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $region = $this->getRegionName();
        $variant = $this->getVariantName();

        return $this->getFullNativeName().($region ? ' ('.$region.')' : '').($variant ? ' ('.$variant.')' : '');
    }

    /**
     * Returns the original locale ID.
<<<<<<< HEAD
     *
     * @return string
     */
    public function __toString()
=======
     */
    public function __toString(): string
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->getId();
    }

    /**
     * Get a string with short ISO name, region in parentheses if applicable, variant in parentheses if applicable.
<<<<<<< HEAD
     *
     * @return string
     */
    #[ReturnTypeWillChange]
    public function jsonSerialize()
=======
     */
    public function jsonSerialize(): string
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->getIsoDescription();
    }
}
