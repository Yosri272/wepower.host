<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Framework\MockObject\Generator;

use function sprintf;

/**
<<<<<<< HEAD
=======
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class NameAlreadyInUseException extends \PHPUnit\Framework\Exception implements Exception
{
    /**
<<<<<<< HEAD
     * @psalm-param class-string|trait-string $name
=======
     * @param class-string|trait-string $name
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function __construct(string $name)
    {
        parent::__construct(
            sprintf(
                'The name "%s" is already in use',
                $name,
            ),
        );
    }
}
