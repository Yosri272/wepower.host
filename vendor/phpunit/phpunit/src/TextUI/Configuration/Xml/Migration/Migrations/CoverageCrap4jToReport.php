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

use DOMElement;

/**
<<<<<<< HEAD
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class CoverageCrap4jToReport extends LogToReportMigration
=======
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class CoverageCrap4jToReport extends LogToReportMigration
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
{
    protected function forType(): string
    {
        return 'coverage-crap4j';
    }

    protected function toReportFormat(DOMElement $logNode): DOMElement
    {
        $crap4j = $logNode->ownerDocument->createElement('crap4j');
        $crap4j->setAttribute('outputFile', $logNode->getAttribute('target'));

        $this->migrateAttributes($logNode, $crap4j, ['threshold']);

        return $crap4j;
    }
}
