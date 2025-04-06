<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Console\Input;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Completion\CompletionInput;
use Symfony\Component\Console\Completion\CompletionSuggestions;
use Symfony\Component\Console\Completion\Suggestion;
use Symfony\Component\Console\Exception\InvalidArgumentException;
use Symfony\Component\Console\Exception\LogicException;

/**
 * Represents a command line option.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class InputOption
{
    /**
     * Do not accept input for the option (e.g. --yell). This is the default behavior of options.
     */
    public const VALUE_NONE = 1;

    /**
     * A value must be passed when the option is used (e.g. --iterations=5 or -i5).
     */
    public const VALUE_REQUIRED = 2;

    /**
     * The option may or may not have a value (e.g. --yell or --yell=loud).
     */
    public const VALUE_OPTIONAL = 4;

    /**
     * The option accepts multiple values (e.g. --dir=/foo --dir=/bar).
     */
    public const VALUE_IS_ARRAY = 8;

    /**
<<<<<<< HEAD
     * The option may have either positive or negative value (e.g. --ansi or --no-ansi).
=======
     * The option allows passing a negated variant (e.g. --ansi or --no-ansi).
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public const VALUE_NEGATABLE = 16;

    private string $name;
<<<<<<< HEAD
    private string|array|null $shortcut;
    private int $mode;
    private string|int|bool|array|null|float $default;
    private array|\Closure $suggestedValues;
    private string $description;

    /**
     * @param string|array|null                                                             $shortcut        The shortcuts, can be null, a string of shortcuts delimited by | or an array of shortcuts
     * @param int|null                                                                      $mode            The option mode: One of the VALUE_* constants
=======
    private ?string $shortcut;
    private int $mode;
    private string|int|bool|array|float|null $default;

    /**
     * @param string|array|null                                                             $shortcut        The shortcuts, can be null, a string of shortcuts delimited by | or an array of shortcuts
     * @param int-mask-of<InputOption::*>|null                                              $mode            The option mode: One of the VALUE_* constants
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * @param string|bool|int|float|array|null                                              $default         The default value (must be null for self::VALUE_NONE)
     * @param array|\Closure(CompletionInput,CompletionSuggestions):list<string|Suggestion> $suggestedValues The values used for input completion
     *
     * @throws InvalidArgumentException If option mode is invalid or incompatible
     */
<<<<<<< HEAD
    public function __construct(string $name, string|array|null $shortcut = null, ?int $mode = null, string $description = '', string|bool|int|float|array|null $default = null, array|\Closure $suggestedValues = [])
    {
=======
    public function __construct(
        string $name,
        string|array|null $shortcut = null,
        ?int $mode = null,
        private string $description = '',
        string|bool|int|float|array|null $default = null,
        private array|\Closure $suggestedValues = [],
    ) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        if (str_starts_with($name, '--')) {
            $name = substr($name, 2);
        }

<<<<<<< HEAD
        if (empty($name)) {
=======
        if (!$name) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            throw new InvalidArgumentException('An option name cannot be empty.');
        }

        if ('' === $shortcut || [] === $shortcut || false === $shortcut) {
            $shortcut = null;
        }

        if (null !== $shortcut) {
            if (\is_array($shortcut)) {
                $shortcut = implode('|', $shortcut);
            }
            $shortcuts = preg_split('{(\|)-?}', ltrim($shortcut, '-'));
            $shortcuts = array_filter($shortcuts, 'strlen');
            $shortcut = implode('|', $shortcuts);

            if ('' === $shortcut) {
                throw new InvalidArgumentException('An option shortcut cannot be empty.');
            }
        }

        if (null === $mode) {
            $mode = self::VALUE_NONE;
        } elseif ($mode >= (self::VALUE_NEGATABLE << 1) || $mode < 1) {
<<<<<<< HEAD
            throw new InvalidArgumentException(sprintf('Option mode "%s" is not valid.', $mode));
=======
            throw new InvalidArgumentException(\sprintf('Option mode "%s" is not valid.', $mode));
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        }

        $this->name = $name;
        $this->shortcut = $shortcut;
        $this->mode = $mode;
<<<<<<< HEAD
        $this->description = $description;
        $this->suggestedValues = $suggestedValues;
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        if ($suggestedValues && !$this->acceptValue()) {
            throw new LogicException('Cannot set suggested values if the option does not accept a value.');
        }
        if ($this->isArray() && !$this->acceptValue()) {
            throw new InvalidArgumentException('Impossible to have an option mode VALUE_IS_ARRAY if the option does not accept a value.');
        }
        if ($this->isNegatable() && $this->acceptValue()) {
            throw new InvalidArgumentException('Impossible to have an option mode VALUE_NEGATABLE if the option also accepts a value.');
        }

        $this->setDefault($default);
    }

    /**
     * Returns the option shortcut.
     */
    public function getShortcut(): ?string
    {
        return $this->shortcut;
    }

    /**
     * Returns the option name.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Returns true if the option accepts a value.
     *
     * @return bool true if value mode is not self::VALUE_NONE, false otherwise
     */
    public function acceptValue(): bool
    {
        return $this->isValueRequired() || $this->isValueOptional();
    }

    /**
     * Returns true if the option requires a value.
     *
     * @return bool true if value mode is self::VALUE_REQUIRED, false otherwise
     */
    public function isValueRequired(): bool
    {
        return self::VALUE_REQUIRED === (self::VALUE_REQUIRED & $this->mode);
    }

    /**
     * Returns true if the option takes an optional value.
     *
     * @return bool true if value mode is self::VALUE_OPTIONAL, false otherwise
     */
    public function isValueOptional(): bool
    {
        return self::VALUE_OPTIONAL === (self::VALUE_OPTIONAL & $this->mode);
    }

    /**
     * Returns true if the option can take multiple values.
     *
     * @return bool true if mode is self::VALUE_IS_ARRAY, false otherwise
     */
    public function isArray(): bool
    {
        return self::VALUE_IS_ARRAY === (self::VALUE_IS_ARRAY & $this->mode);
    }

<<<<<<< HEAD
=======
    /**
     * Returns true if the option allows passing a negated variant.
     *
     * @return bool true if mode is self::VALUE_NEGATABLE, false otherwise
     */
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function isNegatable(): bool
    {
        return self::VALUE_NEGATABLE === (self::VALUE_NEGATABLE & $this->mode);
    }

    /**
<<<<<<< HEAD
     * @return void
     */
    public function setDefault(string|bool|int|float|array|null $default = null)
    {
        if (1 > \func_num_args()) {
            trigger_deprecation('symfony/console', '6.2', 'Calling "%s()" without any arguments is deprecated, pass null explicitly instead.', __METHOD__);
        }
=======
     * Sets the default value.
     */
    public function setDefault(string|bool|int|float|array|null $default): void
    {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        if (self::VALUE_NONE === (self::VALUE_NONE & $this->mode) && null !== $default) {
            throw new LogicException('Cannot set a default value when using InputOption::VALUE_NONE mode.');
        }

        if ($this->isArray()) {
            if (null === $default) {
                $default = [];
            } elseif (!\is_array($default)) {
                throw new LogicException('A default value for an array option must be an array.');
            }
        }

        $this->default = $this->acceptValue() || $this->isNegatable() ? $default : false;
    }

    /**
     * Returns the default value.
     */
    public function getDefault(): string|bool|int|float|array|null
    {
        return $this->default;
    }

    /**
     * Returns the description text.
     */
    public function getDescription(): string
    {
        return $this->description;
    }

<<<<<<< HEAD
=======
    /**
     * Returns true if the option has values for input completion.
     */
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function hasCompletion(): bool
    {
        return [] !== $this->suggestedValues;
    }

    /**
<<<<<<< HEAD
     * Adds suggestions to $suggestions for the current completion input.
=======
     * Supplies suggestions when command resolves possible completion options for input.
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     *
     * @see Command::complete()
     */
    public function complete(CompletionInput $input, CompletionSuggestions $suggestions): void
    {
        $values = $this->suggestedValues;
        if ($values instanceof \Closure && !\is_array($values = $values($input))) {
<<<<<<< HEAD
            throw new LogicException(sprintf('Closure for option "%s" must return an array. Got "%s".', $this->name, get_debug_type($values)));
=======
            throw new LogicException(\sprintf('Closure for option "%s" must return an array. Got "%s".', $this->name, get_debug_type($values)));
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        }
        if ($values) {
            $suggestions->suggestValues($values);
        }
    }

    /**
     * Checks whether the given option equals this one.
     */
    public function equals(self $option): bool
    {
        return $option->getName() === $this->getName()
            && $option->getShortcut() === $this->getShortcut()
            && $option->getDefault() === $this->getDefault()
            && $option->isNegatable() === $this->isNegatable()
            && $option->isArray() === $this->isArray()
            && $option->isValueRequired() === $this->isValueRequired()
            && $option->isValueOptional() === $this->isValueOptional()
        ;
    }
}
