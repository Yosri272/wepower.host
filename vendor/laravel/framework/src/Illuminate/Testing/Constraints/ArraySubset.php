<?php

namespace Illuminate\Testing\Constraints;

use ArrayObject;
use PHPUnit\Framework\Constraint\Constraint;
use SebastianBergmann\Comparator\ComparisonFailure;
<<<<<<< HEAD
use Traversable;

/**
 * @internal This class is not meant to be used or overwritten outside the framework itself.
 */
final class ArraySubset extends Constraint
=======
use SebastianBergmann\Exporter\Exporter;
use Traversable;

class ArraySubset extends Constraint
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
{
    /**
     * @var iterable
     */
<<<<<<< HEAD
    private $subset;
=======
    protected $subset;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    /**
     * @var bool
     */
<<<<<<< HEAD
    private $strict;
=======
    protected $strict;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    /**
     * Create a new array subset constraint instance.
     *
     * @param  iterable  $subset
     * @param  bool  $strict
     * @return void
     */
    public function __construct(iterable $subset, bool $strict = false)
    {
        $this->strict = $strict;
        $this->subset = $subset;
    }

    /**
     * Evaluates the constraint for parameter $other.
     *
     * If $returnResult is set to false (the default), an exception is thrown
     * in case of a failure. null is returned otherwise.
     *
     * If $returnResult is true, the result of the evaluation is returned as
     * a boolean value instead: true in case of success, false in case of a
     * failure.
     *
     * @param  mixed  $other
     * @param  string  $description
     * @param  bool  $returnResult
     * @return bool|null
     *
     * @throws \PHPUnit\Framework\ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function evaluate($other, string $description = '', bool $returnResult = false): ?bool
    {
        // type cast $other & $this->subset as an array to allow
        // support in standard array functions.
        $other = $this->toArray($other);
        $this->subset = $this->toArray($this->subset);

        $patched = array_replace_recursive($other, $this->subset);

        if ($this->strict) {
            $result = $other === $patched;
        } else {
            $result = $other == $patched;
        }

        if ($returnResult) {
            return $result;
        }

        if (! $result) {
            $f = new ComparisonFailure(
                $patched,
                $other,
                var_export($patched, true),
                var_export($other, true)
            );

            $this->fail($other, $description, $f);
        }

        return null;
    }

    /**
     * Returns a string representation of the constraint.
     *
     * @return string
     *
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function toString(): string
    {
<<<<<<< HEAD
        return 'has the subset '.$this->exporter()->export($this->subset);
=======
        return 'has the subset '.(new Exporter)->export($this->subset);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Returns the description of the failure.
     *
     * The beginning of failure messages is "Failed asserting that" in most
     * cases. This method should return the second part of that sentence.
     *
     * @param  mixed  $other
     * @return string
     *
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    protected function failureDescription($other): string
    {
        return 'an array '.$this->toString();
    }

    /**
     * Returns the description of the failure.
     *
     * The beginning of failure messages is "Failed asserting that" in most
     * cases. This method should return the second part of that sentence.
     *
     * @param  iterable  $other
     * @return array
     */
<<<<<<< HEAD
    private function toArray(iterable $other): array
=======
    protected function toArray(iterable $other): array
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        if (is_array($other)) {
            return $other;
        }

        if ($other instanceof ArrayObject) {
            return $other->getArrayCopy();
        }

        if ($other instanceof Traversable) {
            return iterator_to_array($other);
        }

<<<<<<< HEAD
        // Keep BC even if we know that array would not be the expected one
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        return (array) $other;
    }
}
