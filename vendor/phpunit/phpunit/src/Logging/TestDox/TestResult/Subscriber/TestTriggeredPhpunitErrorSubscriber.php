<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Logging\TestDox;

use PHPUnit\Event\Test\PhpunitErrorTriggered;
use PHPUnit\Event\Test\PhpunitErrorTriggeredSubscriber;

/**
<<<<<<< HEAD
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class TestTriggeredPhpunitErrorSubscriber extends Subscriber implements PhpunitErrorTriggeredSubscriber
=======
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestTriggeredPhpunitErrorSubscriber extends Subscriber implements PhpunitErrorTriggeredSubscriber
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
{
    public function notify(PhpunitErrorTriggered $event): void
    {
        $this->collector()->testTriggeredPhpunitError($event);
    }
}
