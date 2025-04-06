<?php

declare(strict_types=1);

namespace Kreait\Firebase\RemoteConfig;

use JsonSerializable;

use function array_key_exists;

/**
 * @phpstan-import-type RemoteConfigPersonalizationValueShape from PersonalizationValue
<<<<<<< HEAD
=======
 * @phpstan-import-type RemoteConfigRolloutValueShape from RolloutValue
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
 *
 * @phpstan-type RemoteConfigParameterValueShape array{
 *     value?: string,
 *     useInAppDefault?: bool,
<<<<<<< HEAD
 *     personalizationValue?: RemoteConfigPersonalizationValueShape
 * }
=======
 *     personalizationValue?: RemoteConfigPersonalizationValueShape,
 *     rolloutValue?: RemoteConfigRolloutValueShape
 * }
 *
 * @see https://firebase.google.com/docs/reference/remote-config/rest/v1/RemoteConfig#remoteconfigparametervalue
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
 */
final class ParameterValue implements JsonSerializable
{
    private function __construct(
        private readonly ?string $value = null,
        private readonly ?bool $useInAppDefault = null,
        private readonly ?PersonalizationValue $personalizationValue = null,
<<<<<<< HEAD
=======
        private readonly ?RolloutValue $rolloutValue = null,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    ) {
    }

    public static function withValue(string $value): self
    {
        return new self(value: $value);
    }

    public static function inAppDefault(): self
    {
        return new self(useInAppDefault: true);
    }

    public static function withPersonalizationValue(PersonalizationValue $value): self
    {
        return new self(personalizationValue: $value);
    }

<<<<<<< HEAD
=======
    public static function withRolloutValue(RolloutValue $value): self
    {
        return new self(rolloutValue: $value);
    }

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    /**
     * @param RemoteConfigParameterValueShape $data
     */
    public static function fromArray(array $data): self
    {
        if (array_key_exists('value', $data)) {
            return self::withValue($data['value']);
        }

        if (array_key_exists('useInAppDefault', $data)) {
            return self::inAppDefault();
        }

        if (array_key_exists('personalizationValue', $data)) {
            return self::withPersonalizationValue(PersonalizationValue::fromArray($data['personalizationValue']));
        }

<<<<<<< HEAD
=======
        if (array_key_exists('rolloutValue', $data)) {
            return self::withRolloutValue(RolloutValue::fromArray($data['rolloutValue']));
        }

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        return new self();
    }

    /**
     * @return RemoteConfigParameterValueShape
     */
    public function toArray(): array
    {
        if ($this->value !== null) {
            return ['value' => $this->value];
        }

        if ($this->useInAppDefault !== null) {
            return ['useInAppDefault' => $this->useInAppDefault];
        }

        if ($this->personalizationValue !== null) {
            return ['personalizationValue' => $this->personalizationValue->toArray()];
        }

<<<<<<< HEAD
=======
        if ($this->rolloutValue !== null) {
            return ['rolloutValue' => $this->rolloutValue->toArray()];
        }

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        return [];
    }

    /**
     * @return RemoteConfigParameterValueShape
     */
    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
