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

namespace Carbon\Exceptions;

use Throwable;

class BadComparisonUnitException extends UnitException
{
    /**
     * The unit.
     *
     * @var string
     */
    protected $unit;

    /**
     * Constructor.
     *
     * @param string         $unit
     * @param int            $code
     * @param Throwable|null $previous
     */
<<<<<<< HEAD
    public function __construct($unit, $code = 0, Throwable $previous = null)
=======
    public function __construct($unit, $code = 0, ?Throwable $previous = null)
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $this->unit = $unit;

        parent::__construct("Bad comparison unit: '$unit'", $code, $previous);
    }

    /**
     * Get the unit.
     *
     * @return string
     */
    public function getUnit(): string
    {
        return $this->unit;
    }
}
