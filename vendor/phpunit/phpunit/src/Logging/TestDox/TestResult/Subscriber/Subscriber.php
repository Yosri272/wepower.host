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

/**
<<<<<<< HEAD
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
abstract class Subscriber
{
    private readonly TestResultCollector $collector;
=======
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
abstract readonly class Subscriber
{
    private TestResultCollector $collector;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    public function __construct(TestResultCollector $collector)
    {
        $this->collector = $collector;
    }

    protected function collector(): TestResultCollector
    {
        return $this->collector;
    }
}
