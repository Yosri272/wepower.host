<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Logging\TeamCity;

use PHPUnit\Event\TestRunner\ExecutionFinished;
use PHPUnit\Event\TestRunner\ExecutionFinishedSubscriber;

/**
<<<<<<< HEAD
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class TestRunnerExecutionFinishedSubscriber extends Subscriber implements ExecutionFinishedSubscriber
=======
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestRunnerExecutionFinishedSubscriber extends Subscriber implements ExecutionFinishedSubscriber
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
{
    public function notify(ExecutionFinished $event): void
    {
        $this->logger()->flush();
    }
}
