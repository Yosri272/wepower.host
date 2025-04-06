<?php

<<<<<<< HEAD
=======
declare(strict_types=1);

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
namespace Carbon\Doctrine;

use Doctrine\DBAL\Platforms\AbstractPlatform;

interface CarbonDoctrineType
{
    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform);

<<<<<<< HEAD
    public function convertToPHPValue($value, AbstractPlatform $platform);
=======
    public function convertToPHPValue(mixed $value, AbstractPlatform $platform);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    public function convertToDatabaseValue($value, AbstractPlatform $platform);
}
