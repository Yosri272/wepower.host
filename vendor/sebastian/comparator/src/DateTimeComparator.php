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

use function abs;
use function assert;
use function floor;
use function sprintf;
use DateInterval;
<<<<<<< HEAD
use DateTimeInterface;
=======
use DateTime;
use DateTimeImmutable;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use DateTimeZone;

final class DateTimeComparator extends ObjectComparator
{
    public function accepts(mixed $expected, mixed $actual): bool
    {
<<<<<<< HEAD
        return ($expected instanceof DateTimeInterface) &&
               ($actual instanceof DateTimeInterface);
    }

    /**
=======
        return ($expected instanceof DateTime || $expected instanceof DateTimeImmutable) &&
               ($actual instanceof DateTime || $actual instanceof DateTimeImmutable);
    }

    /**
     * @param array<mixed> $processed
     *
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * @throws ComparisonFailure
     */
    public function assertEquals(mixed $expected, mixed $actual, float $delta = 0.0, bool $canonicalize = false, bool $ignoreCase = false, array &$processed = []): void
    {
<<<<<<< HEAD
        assert($expected instanceof DateTimeInterface);
        assert($actual instanceof DateTimeInterface);
=======
        assert($expected instanceof DateTime || $expected instanceof DateTimeImmutable);
        assert($actual instanceof DateTime || $actual instanceof DateTimeImmutable);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        $absDelta = abs($delta);
        $delta    = new DateInterval(sprintf('PT%dS', $absDelta));
        $delta->f = $absDelta - floor($absDelta);

        $actualClone = (clone $actual)
            ->setTimezone(new DateTimeZone('UTC'));

        $expectedLower = (clone $expected)
            ->setTimezone(new DateTimeZone('UTC'))
            ->sub($delta);

        $expectedUpper = (clone $expected)
            ->setTimezone(new DateTimeZone('UTC'))
            ->add($delta);

        if ($actualClone < $expectedLower || $actualClone > $expectedUpper) {
            throw new ComparisonFailure(
                $expected,
                $actual,
<<<<<<< HEAD
                $this->dateTimeToString($expected),
                $this->dateTimeToString($actual),
                'Failed asserting that two DateTime objects are equal.'
            );
        }
    }

    /**
     * Returns an ISO 8601 formatted string representation of a datetime or
     * 'Invalid DateTimeInterface object' if the provided DateTimeInterface was not properly
     * initialized.
     */
    private function dateTimeToString(DateTimeInterface $datetime): string
    {
        $string = $datetime->format('Y-m-d\TH:i:s.uO');

        return $string ?: 'Invalid DateTimeInterface object';
    }
=======
                $expected->format('Y-m-d\TH:i:s.uO'),
                $actual->format('Y-m-d\TH:i:s.uO'),
                'Failed asserting that two DateTime objects are equal.',
            );
        }
    }
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
}
