<?php

namespace Illuminate\Validation;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Support\Traits\Macroable;
<<<<<<< HEAD
use Illuminate\Validation\Rules\Can;
use Illuminate\Validation\Rules\Dimensions;
=======
use Illuminate\Validation\Rules\ArrayRule;
use Illuminate\Validation\Rules\Can;
use Illuminate\Validation\Rules\Date;
use Illuminate\Validation\Rules\Dimensions;
use Illuminate\Validation\Rules\Email;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use Illuminate\Validation\Rules\Enum;
use Illuminate\Validation\Rules\ExcludeIf;
use Illuminate\Validation\Rules\Exists;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rules\ImageFile;
use Illuminate\Validation\Rules\In;
use Illuminate\Validation\Rules\NotIn;
<<<<<<< HEAD
=======
use Illuminate\Validation\Rules\Numeric;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use Illuminate\Validation\Rules\ProhibitedIf;
use Illuminate\Validation\Rules\RequiredIf;
use Illuminate\Validation\Rules\Unique;

class Rule
{
    use Macroable;

    /**
     * Get a can constraint builder instance.
     *
     * @param  string  $ability
     * @param  mixed  ...$arguments
     * @return \Illuminate\Validation\Rules\Can
     */
    public static function can($ability, ...$arguments)
    {
        return new Can($ability, $arguments);
    }

    /**
     * Apply the given rules if the given condition is truthy.
     *
     * @param  callable|bool  $condition
     * @param  \Illuminate\Contracts\Validation\ValidationRule|\Illuminate\Contracts\Validation\InvokableRule|\Illuminate\Contracts\Validation\Rule|\Closure|array|string  $rules
     * @param  \Illuminate\Contracts\Validation\ValidationRule|\Illuminate\Contracts\Validation\InvokableRule|\Illuminate\Contracts\Validation\Rule|\Closure|array|string  $defaultRules
     * @return \Illuminate\Validation\ConditionalRules
     */
    public static function when($condition, $rules, $defaultRules = [])
    {
        return new ConditionalRules($condition, $rules, $defaultRules);
    }

    /**
     * Apply the given rules if the given condition is falsy.
     *
     * @param  callable|bool  $condition
     * @param  \Illuminate\Contracts\Validation\ValidationRule|\Illuminate\Contracts\Validation\InvokableRule|\Illuminate\Contracts\Validation\Rule|\Closure|array|string  $rules
     * @param  \Illuminate\Contracts\Validation\ValidationRule|\Illuminate\Contracts\Validation\InvokableRule|\Illuminate\Contracts\Validation\Rule|\Closure|array|string  $defaultRules
     * @return \Illuminate\Validation\ConditionalRules
     */
    public static function unless($condition, $rules, $defaultRules = [])
    {
        return new ConditionalRules($condition, $defaultRules, $rules);
    }

    /**
<<<<<<< HEAD
=======
     * Get an array rule builder instance.
     *
     * @param  array|null  $keys
     * @return \Illuminate\Validation\Rules\ArrayRule
     */
    public static function array($keys = null)
    {
        return new ArrayRule(...func_get_args());
    }

    /**
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * Create a new nested rule set.
     *
     * @param  callable  $callback
     * @return \Illuminate\Validation\NestedRules
     */
    public static function forEach($callback)
    {
        return new NestedRules($callback);
    }

    /**
     * Get a unique constraint builder instance.
     *
     * @param  string  $table
     * @param  string  $column
     * @return \Illuminate\Validation\Rules\Unique
     */
    public static function unique($table, $column = 'NULL')
    {
        return new Unique($table, $column);
    }

    /**
     * Get an exists constraint builder instance.
     *
     * @param  string  $table
     * @param  string  $column
     * @return \Illuminate\Validation\Rules\Exists
     */
    public static function exists($table, $column = 'NULL')
    {
        return new Exists($table, $column);
    }

    /**
<<<<<<< HEAD
     * Get an in constraint builder instance.
     *
     * @param  \Illuminate\Contracts\Support\Arrayable|array|string  $values
=======
     * Get an in rule builder instance.
     *
     * @param  \Illuminate\Contracts\Support\Arrayable|\BackedEnum|\UnitEnum|array|string  $values
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * @return \Illuminate\Validation\Rules\In
     */
    public static function in($values)
    {
        if ($values instanceof Arrayable) {
            $values = $values->toArray();
        }

        return new In(is_array($values) ? $values : func_get_args());
    }

    /**
<<<<<<< HEAD
     * Get a not_in constraint builder instance.
     *
     * @param  \Illuminate\Contracts\Support\Arrayable|array|string  $values
=======
     * Get a not_in rule builder instance.
     *
     * @param  \Illuminate\Contracts\Support\Arrayable|\BackedEnum|\UnitEnum|array|string  $values
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * @return \Illuminate\Validation\Rules\NotIn
     */
    public static function notIn($values)
    {
        if ($values instanceof Arrayable) {
            $values = $values->toArray();
        }

        return new NotIn(is_array($values) ? $values : func_get_args());
    }

    /**
<<<<<<< HEAD
     * Get a required_if constraint builder instance.
=======
     * Get a required_if rule builder instance.
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     *
     * @param  callable|bool  $callback
     * @return \Illuminate\Validation\Rules\RequiredIf
     */
    public static function requiredIf($callback)
    {
        return new RequiredIf($callback);
    }

    /**
<<<<<<< HEAD
     * Get a exclude_if constraint builder instance.
=======
     * Get a exclude_if rule builder instance.
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     *
     * @param  callable|bool  $callback
     * @return \Illuminate\Validation\Rules\ExcludeIf
     */
    public static function excludeIf($callback)
    {
        return new ExcludeIf($callback);
    }

    /**
<<<<<<< HEAD
     * Get a prohibited_if constraint builder instance.
=======
     * Get a prohibited_if rule builder instance.
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     *
     * @param  callable|bool  $callback
     * @return \Illuminate\Validation\Rules\ProhibitedIf
     */
    public static function prohibitedIf($callback)
    {
        return new ProhibitedIf($callback);
    }

    /**
<<<<<<< HEAD
     * Get an enum constraint builder instance.
     *
     * @param  string  $type
=======
     * Get a date rule builder instance.
     *
     * @return \Illuminate\Validation\Rules\Date
     */
    public static function date()
    {
        return new Date;
    }

    /**
     * Get an email rule builder instance.
     *
     * @return \Illuminate\Validation\Rules\Email
     */
    public static function email()
    {
        return new Email;
    }

    /**
     * Get an enum rule builder instance.
     *
     * @param  class-string  $type
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * @return \Illuminate\Validation\Rules\Enum
     */
    public static function enum($type)
    {
        return new Enum($type);
    }

    /**
<<<<<<< HEAD
     * Get a file constraint builder instance.
=======
     * Get a file rule builder instance.
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     *
     * @return \Illuminate\Validation\Rules\File
     */
    public static function file()
    {
        return new File;
    }

    /**
<<<<<<< HEAD
     * Get an image file constraint builder instance.
=======
     * Get an image file rule builder instance.
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     *
     * @return \Illuminate\Validation\Rules\ImageFile
     */
    public static function imageFile()
    {
        return new ImageFile;
    }

    /**
<<<<<<< HEAD
     * Get a dimensions constraint builder instance.
=======
     * Get a dimensions rule builder instance.
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     *
     * @param  array  $constraints
     * @return \Illuminate\Validation\Rules\Dimensions
     */
    public static function dimensions(array $constraints = [])
    {
        return new Dimensions($constraints);
    }
<<<<<<< HEAD
=======

    /**
     * Get a numeric rule builder instance.
     *
     * @return \Illuminate\Validation\Rules\Numeric
     */
    public static function numeric()
    {
        return new Numeric;
    }
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
}
