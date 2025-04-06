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

use function assert;
<<<<<<< HEAD
=======
use function str_contains;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use DOMDocument;
use DOMElement;
use PHPUnit\Runner\Version;

/**
<<<<<<< HEAD
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class UpdateSchemaLocation implements Migration
{
=======
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class UpdateSchemaLocation implements Migration
{
    private const NAMESPACE_URI              = 'http://www.w3.org/2001/XMLSchema-instance';
    private const LOCAL_NAME_SCHEMA_LOCATION = 'noNamespaceSchemaLocation';

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function migrate(DOMDocument $document): void
    {
        $root = $document->documentElement;

        assert($root instanceof DOMElement);

<<<<<<< HEAD
        $root->setAttributeNS(
            'http://www.w3.org/2001/XMLSchema-instance',
            'xsi:noNamespaceSchemaLocation',
=======
        $existingSchemaLocation = $root->getAttributeNodeNS(self::NAMESPACE_URI, self::LOCAL_NAME_SCHEMA_LOCATION)->value;

        if (str_contains($existingSchemaLocation, '://') === false) { // If the current schema location is a relative path, don't update it
            return;
        }

        $root->setAttributeNS(
            self::NAMESPACE_URI,
            'xsi:' . self::LOCAL_NAME_SCHEMA_LOCATION,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            'https://schema.phpunit.de/' . Version::series() . '/phpunit.xsd',
        );
    }
}
