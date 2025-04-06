<?php

<<<<<<< HEAD
namespace Carbon\Doctrine;

use Carbon\CarbonImmutable;
=======
declare(strict_types=1);

namespace Carbon\Doctrine;

use Carbon\CarbonImmutable;
use DateTimeImmutable;
use Doctrine\DBAL\Platforms\AbstractPlatform;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use Doctrine\DBAL\Types\VarDateTimeImmutableType;

class DateTimeImmutableType extends VarDateTimeImmutableType implements CarbonDoctrineType
{
    /** @use CarbonTypeConverter<CarbonImmutable> */
    use CarbonTypeConverter;

    /**
<<<<<<< HEAD
=======
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function convertToPHPValue(mixed $value, AbstractPlatform $platform): ?CarbonImmutable
    {
        return $this->doConvertToPHPValue($value);
    }

    /**
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * @return class-string<CarbonImmutable>
     */
    protected function getCarbonClassName(): string
    {
        return CarbonImmutable::class;
    }
}
