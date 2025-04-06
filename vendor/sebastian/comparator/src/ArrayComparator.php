<?php declare(strict_types=1);
/*
 * This file is part of sebastian/comparator.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\Comparator;

use function array_key_exists;
use function assert;
use function is_array;
use function sort;
use function sprintf;
use function str_replace;
use function trim;
use SebastianBergmann\Exporter\Exporter;

/**
 * Arrays are equal if they contain the same key-value pairs.
 * The order of the keys does not matter.
 * The types of key-value pairs do not matter.
 */
class ArrayComparator extends Comparator
{
    public function accepts(mixed $expected, mixed $actual): bool
    {
        return is_array($expected) && is_array($actual);
    }

    /**
<<<<<<< HEAD
=======
     * @param array<mixed> $processed
     *
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * @throws ComparisonFailure
     */
    public function assertEquals(mixed $expected, mixed $actual, float $delta = 0.0, bool $canonicalize = false, bool $ignoreCase = false, array &$processed = []): void
    {
        assert(is_array($expected));
        assert(is_array($actual));

        if ($canonicalize) {
            sort($expected);
            sort($actual);
        }

        $remaining        = $actual;
        $actualAsString   = "Array (\n";
        $expectedAsString = "Array (\n";
        $equal            = true;
        $exporter         = new Exporter;

        foreach ($expected as $key => $value) {
            unset($remaining[$key]);

            if (!array_key_exists($key, $actual)) {
                $expectedAsString .= sprintf(
                    "    %s => %s\n",
                    $exporter->export($key),
<<<<<<< HEAD
                    $exporter->shortenedExport($value)
=======
                    $exporter->shortenedExport($value),
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                );

                $equal = false;

                continue;
            }

            try {
                $comparator = $this->factory()->getComparatorFor($value, $actual[$key]);
<<<<<<< HEAD
=======

                /** @phpstan-ignore arguments.count */
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                $comparator->assertEquals($value, $actual[$key], $delta, $canonicalize, $ignoreCase, $processed);

                $expectedAsString .= sprintf(
                    "    %s => %s\n",
                    $exporter->export($key),
<<<<<<< HEAD
                    $exporter->shortenedExport($value)
=======
                    $exporter->shortenedExport($value),
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                );

                $actualAsString .= sprintf(
                    "    %s => %s\n",
                    $exporter->export($key),
<<<<<<< HEAD
                    $exporter->shortenedExport($actual[$key])
=======
                    $exporter->shortenedExport($actual[$key]),
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                );
            } catch (ComparisonFailure $e) {
                $expectedAsString .= sprintf(
                    "    %s => %s\n",
                    $exporter->export($key),
<<<<<<< HEAD
                    $e->getExpectedAsString() ? $this->indent($e->getExpectedAsString()) : $exporter->shortenedExport($e->getExpected())
=======
                    $e->getExpectedAsString() ? $this->indent($e->getExpectedAsString()) : $exporter->shortenedExport($e->getExpected()),
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                );

                $actualAsString .= sprintf(
                    "    %s => %s\n",
                    $exporter->export($key),
<<<<<<< HEAD
                    $e->getActualAsString() ? $this->indent($e->getActualAsString()) : $exporter->shortenedExport($e->getActual())
=======
                    $e->getActualAsString() ? $this->indent($e->getActualAsString()) : $exporter->shortenedExport($e->getActual()),
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                );

                $equal = false;
            }
        }

        foreach ($remaining as $key => $value) {
            $actualAsString .= sprintf(
                "    %s => %s\n",
                $exporter->export($key),
<<<<<<< HEAD
                $exporter->shortenedExport($value)
=======
                $exporter->shortenedExport($value),
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            );

            $equal = false;
        }

        $expectedAsString .= ')';
        $actualAsString .= ')';

        if (!$equal) {
            throw new ComparisonFailure(
                $expected,
                $actual,
                $expectedAsString,
                $actualAsString,
<<<<<<< HEAD
                'Failed asserting that two arrays are equal.'
=======
                'Failed asserting that two arrays are equal.',
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            );
        }
    }

    private function indent(string $lines): string
    {
        return trim(str_replace("\n", "\n    ", $lines));
    }
}
