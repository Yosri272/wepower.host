<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\TextUI\XmlConfiguration;

use DOMDocument;

/**
<<<<<<< HEAD
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class IntroduceCoverageElement implements Migration
=======
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class IntroduceCoverageElement implements Migration
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
{
    public function migrate(DOMDocument $document): void
    {
        $coverage = $document->createElement('coverage');

        $document->documentElement->insertBefore(
            $coverage,
            $document->documentElement->firstChild,
        );
    }
}
