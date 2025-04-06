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
use PHPUnit\Runner\Version;
use PHPUnit\Util\Xml\Loader as XmlLoader;
use PHPUnit\Util\Xml\XmlException;

/**
<<<<<<< HEAD
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Migrator
{
    /**
     * @throws Exception
     * @throws MigrationBuilderException
=======
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class Migrator
{
    /**
     * @throws Exception
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * @throws MigrationException
     * @throws XmlException
     */
    public function migrate(string $filename): string
    {
        $origin = (new SchemaDetector)->detect($filename);

        if (!$origin->detected()) {
<<<<<<< HEAD
            throw new Exception('The file does not validate against any know schema');
=======
            throw new Exception('The file does not validate against any known schema');
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        }

        if ($origin->version() === Version::series()) {
            throw new Exception('The file does not need to be migrated');
        }

        $configurationDocument = (new XmlLoader)->loadFile($filename);

        foreach ((new MigrationBuilder)->build($origin->version()) as $migration) {
            $migration->migrate($configurationDocument);
        }

        $configurationDocument->formatOutput       = true;
        $configurationDocument->preserveWhiteSpace = false;

<<<<<<< HEAD
        return $configurationDocument->saveXML();
=======
        $xml = $configurationDocument->saveXML();

        assert($xml !== false);

        return $xml;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }
}
