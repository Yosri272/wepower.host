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

<<<<<<< HEAD
=======
use function assert;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use DOMDocument;
use DOMElement;
use DOMXPath;

/**
<<<<<<< HEAD
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class RemoveLoggingElements implements Migration
=======
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class RemoveLoggingElements implements Migration
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
{
    public function migrate(DOMDocument $document): void
    {
        $this->removeTestDoxElement($document);
        $this->removeTextElement($document);
    }

    private function removeTestDoxElement(DOMDocument $document): void
    {
<<<<<<< HEAD
        $node = (new DOMXPath($document))->query('logging/testdoxXml')->item(0);
=======
        $nodes = (new DOMXPath($document))->query('logging/testdoxXml');

        assert($nodes !== false);

        $node = $nodes->item(0);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        if (!$node instanceof DOMElement || $node->parentNode === null) {
            return;
        }

        $node->parentNode->removeChild($node);
    }

    private function removeTextElement(DOMDocument $document): void
    {
<<<<<<< HEAD
        $node = (new DOMXPath($document))->query('logging/text')->item(0);
=======
        $nodes = (new DOMXPath($document))->query('logging/text');

        assert($nodes !== false);

        $node = $nodes->item(0);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        if (!$node instanceof DOMElement || $node->parentNode === null) {
            return;
        }

        $node->parentNode->removeChild($node);
    }
}
