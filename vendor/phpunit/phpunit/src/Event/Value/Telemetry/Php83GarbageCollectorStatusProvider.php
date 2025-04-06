<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Event\Telemetry;

use function gc_status;

/**
<<<<<<< HEAD
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Php83GarbageCollectorStatusProvider implements GarbageCollectorStatusProvider
=======
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class Php83GarbageCollectorStatusProvider implements GarbageCollectorStatusProvider
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
{
    public function status(): GarbageCollectorStatus
    {
        $status = gc_status();

        return new GarbageCollectorStatus(
            $status['runs'],
            $status['collected'],
            $status['threshold'],
            $status['roots'],
<<<<<<< HEAD
            $status['application_time'],
            $status['collector_time'],
            $status['destructor_time'],
            $status['free_time'],
            $status['running'],
            $status['protected'],
            $status['full'],
=======
            /** @phpstan-ignore offsetAccess.notFound */
            $status['application_time'],
            /** @phpstan-ignore offsetAccess.notFound */
            $status['collector_time'],
            /** @phpstan-ignore offsetAccess.notFound */
            $status['destructor_time'],
            /** @phpstan-ignore offsetAccess.notFound */
            $status['free_time'],
            /** @phpstan-ignore offsetAccess.notFound */
            $status['running'],
            /** @phpstan-ignore offsetAccess.notFound */
            $status['protected'],
            /** @phpstan-ignore offsetAccess.notFound */
            $status['full'],
            /** @phpstan-ignore offsetAccess.notFound */
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $status['buffer_size'],
        );
    }
}
