<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpKernel\Log;

use Symfony\Component\HttpFoundation\Request;

/**
 * DebugLoggerInterface.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface DebugLoggerInterface
{
    /**
     * Returns an array of logs.
     *
     * @return array<array{
     *     channel: ?string,
     *     context: array<string, mixed>,
     *     message: string,
     *     priority: int,
     *     priorityName: string,
     *     timestamp: int,
     *     timestamp_rfc3339: string,
     * }>
     */
<<<<<<< HEAD
    public function getLogs(?Request $request = null);

    /**
     * Returns the number of errors.
     *
     * @return int
     */
    public function countErrors(?Request $request = null);

    /**
     * Removes all log records.
     *
     * @return void
     */
    public function clear();
=======
    public function getLogs(?Request $request = null): array;

    /**
     * Returns the number of errors.
     */
    public function countErrors(?Request $request = null): int;

    /**
     * Removes all log records.
     */
    public function clear(): void;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
}
