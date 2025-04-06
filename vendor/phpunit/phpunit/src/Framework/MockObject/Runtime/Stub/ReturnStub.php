<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Framework\MockObject\Stub;

use PHPUnit\Framework\MockObject\Invocation;

/**
<<<<<<< HEAD
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ReturnStub implements Stub
{
    private readonly mixed $value;
=======
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class ReturnStub implements Stub
{
    private mixed $value;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    public function __construct(mixed $value)
    {
        $this->value = $value;
    }

    public function invoke(Invocation $invocation): mixed
    {
        return $this->value;
    }
}
