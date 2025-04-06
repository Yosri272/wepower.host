<?php

<<<<<<< HEAD
namespace Carbon\Doctrine;

use Carbon\Carbon;
=======
declare(strict_types=1);

namespace Carbon\Doctrine;

use Carbon\Carbon;
use DateTime;
use Doctrine\DBAL\Platforms\AbstractPlatform;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use Doctrine\DBAL\Types\VarDateTimeType;

class DateTimeType extends VarDateTimeType implements CarbonDoctrineType
{
    /** @use CarbonTypeConverter<Carbon> */
    use CarbonTypeConverter;
<<<<<<< HEAD
=======

    /**
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function convertToPHPValue(mixed $value, AbstractPlatform $platform): ?Carbon
    {
        return $this->doConvertToPHPValue($value);
    }
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
}
