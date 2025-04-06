<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\TextUI\XmlConfiguration\Logging\TestDox;

use PHPUnit\TextUI\Configuration\File;

/**
<<<<<<< HEAD
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @psalm-immutable
 */
final class Text
{
    private readonly File $target;
=======
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @immutable
 */
final readonly class Text
{
    private File $target;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    public function __construct(File $target)
    {
        $this->target = $target;
    }

    public function target(): File
    {
        return $this->target;
    }
}
