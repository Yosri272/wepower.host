<?php

declare(strict_types=1);

namespace Vonage\Numbers;

use InvalidArgumentException;
use RuntimeException;
use Vonage\Application\Application;
use Vonage\Entity\EntityInterface;
use Vonage\Entity\Hydrator\ArrayHydrateInterface;
use Vonage\Entity\JsonResponseTrait;
use Vonage\Entity\JsonSerializableInterface;
use Vonage\Entity\JsonSerializableTrait;
use Vonage\Entity\JsonUnserializableInterface;
use Vonage\Entity\NoRequestResponseTrait;

<<<<<<< HEAD
use function get_class;
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use function in_array;
use function is_null;
use function json_decode;
use function json_last_error;
use function preg_match;
use function stripos;
<<<<<<< HEAD
use function strpos;
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use function trigger_error;

class Number implements EntityInterface, JsonSerializableInterface, JsonUnserializableInterface, ArrayHydrateInterface, \Stringable
{
    use JsonSerializableTrait;
    use NoRequestResponseTrait;
    use JsonResponseTrait;

    public const TYPE_MOBILE = 'mobile-lvn';
    public const TYPE_FIXED = 'landline';
    public const TYPE_TOLLFREE = 'landline-toll-free';

    public const FEATURE_VOICE = 'VOICE';
    public const FEATURE_SMS = 'SMS';
    public const FEATURE_MMS = 'MMS';
    public const FEATURE_SMS_VOICE = 'SMS,VOICE';
    public const FEATURE_SMS_MMS = 'SMS,MMS';
    public const FEATURE_VOICE_MMS = 'VOICE,MMS';
    public const FEATURE_ALL = 'SMS,MMS,VOICE';

    public const WEBHOOK_MESSAGE = 'moHttpUrl';
    public const WEBHOOK_VOICE_STATUS = 'voiceStatusCallback';
<<<<<<< HEAD
=======
    public const WEBHOOK_VOICE_STATUS_URL = 'voiceStatusCallbackUrl';
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    public const ENDPOINT_SIP = 'sip';
    public const ENDPOINT_TEL = 'tel';
    public const ENDPOINT_VXML = 'vxml';
    public const ENDPOINT_APP = 'app';

<<<<<<< HEAD
    /**
     * @var array
     */
    protected $data = [];
=======
    protected array $data = [];
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    public function __construct($number = null, $country = null)
    {
        $this->data['msisdn'] = $number;
        $this->data['country'] = $country;
    }

<<<<<<< HEAD
    public function getId()
=======
    public function getId(): mixed
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->fromData('msisdn');
    }

<<<<<<< HEAD
    public function getMsisdn()
=======
    public function getMsisdn(): mixed
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->getId();
    }

<<<<<<< HEAD
    public function getNumber()
=======
    public function getNumber(): mixed
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->getId();
    }

<<<<<<< HEAD
    public function getCountry()
=======
    public function getCountry(): mixed
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->fromData('country');
    }

<<<<<<< HEAD
    public function getType()
=======
    public function getType(): mixed
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->fromData('type');
    }

<<<<<<< HEAD
    public function getCost()
=======
    public function getCost(): mixed
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->fromData('cost');
    }

<<<<<<< HEAD
    /**
     * @param $feature
     */
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function hasFeature($feature): bool
    {
        if (!isset($this->data['features'])) {
            return false;
        }

        return in_array($feature, $this->data['features'], true);
    }

<<<<<<< HEAD
    public function getFeatures()
=======
    public function getFeatures(): mixed
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->fromData('features');
    }

<<<<<<< HEAD
    /**
     * @param $type
     * @param $url
     */
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function setWebhook($type, $url): self
    {
        if (!in_array($type, [self::WEBHOOK_MESSAGE, self::WEBHOOK_VOICE_STATUS], true)) {
            throw new InvalidArgumentException("invalid webhook type `$type`");
        }

        $this->data[$type] = $url;
        return $this;
    }

<<<<<<< HEAD
    /**
     * @param $type
     */
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function getWebhook($type)
    {
        return $this->fromData($type);
    }

<<<<<<< HEAD
    /**
     * @param $type
     */
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function hasWebhook($type): bool
    {
        return isset($this->data[$type]);
    }

<<<<<<< HEAD
    /**
     * @param $endpoint
     * @param $type
     */
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function setVoiceDestination($endpoint, $type = null): self
    {
        if (is_null($type)) {
            $type = $this->autoType($endpoint);
        }

        if (self::ENDPOINT_APP === $type && !($endpoint instanceof Application)) {
            $endpoint = new Application($endpoint);
        }

        $this->data['voiceCallbackValue'] = $endpoint;
        $this->data['voiceCallbackType'] = $type;

        return $this;
    }

<<<<<<< HEAD
    /**
     * @param $endpoint
     */
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    protected function autoType($endpoint): string
    {
        if ($endpoint instanceof Application) {
            return self::ENDPOINT_APP;
        }

        if (str_contains((string) $endpoint, '@')) {
            return self::ENDPOINT_SIP;
        }

        if (0 === stripos((string) $endpoint, 'http')) {
            return self::ENDPOINT_VXML;
        }

        if (preg_match('#[a-z]+#', (string) $endpoint)) {
            return self::ENDPOINT_APP;
        }

        return self::ENDPOINT_TEL;
    }

<<<<<<< HEAD
    public function getVoiceDestination()
=======
    public function getVoiceDestination(): mixed
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->fromData('voiceCallbackValue');
    }

<<<<<<< HEAD
    /**
     * @return mixed|null
     */
    public function getVoiceType()
=======
    public function getVoiceType(): mixed
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->data['voiceCallbackType'] ?? null;
    }

<<<<<<< HEAD
    /**
     * @param $name
     */
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    protected function fromData($name)
    {
        if (!isset($this->data[$name])) {
            throw new RuntimeException("`{$name}` has not been set");
        }

        return $this->data[$name];
    }

    /**
     * @param string|array $json
     */
    public function jsonUnserialize($json): void
    {
        trigger_error(
            static::class . "::jsonUnserialize is deprecated, please fromArray() instead",
            E_USER_DEPRECATED
        );

        $jsonArr = json_decode($json, true);

        if (json_last_error() === JSON_ERROR_NONE) {
            $json = $jsonArr;
        }

        $this->fromArray($json);
    }

    public function fromArray(array $data): void
    {
        $this->data = $data;
    }

<<<<<<< HEAD
    /**
     * @return array|mixed
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
=======
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->toArray();
    }

    public function toArray(): array
    {
        $json = $this->data;

        // Swap to using app_id instead
        if (isset($json['messagesCallbackType'])) {
            $json['app_id'] = $json['messagesCallbackValue'];
            unset($json['messagesCallbackValue'], $json['messagesCallbackType']);
        }

        if (isset($json['voiceCallbackValue']) && ($json['voiceCallbackValue'] instanceof Application)) {
            $json['app_id'] = $json['voiceCallbackValue']->getId();
            unset($json['voiceCallbackValue'], $json['voiceCallbackType']);
        }

        if (isset($json['voiceCallbackValue']) && $json['voiceCallbackType'] === 'app') {
            $json['app_id'] = $json['voiceCallbackValue'];
            unset($json['voiceCallbackValue'], $json['voiceCallbackType']);
        }

        return $json;
    }

<<<<<<< HEAD
    /**
     * @return string
     */
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function __toString(): string
    {
        return (string)$this->getId();
    }

<<<<<<< HEAD
    /**
     * @return $this
     */
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function setAppId(string $appId): self
    {
        $this->data['messagesCallbackType'] = self::ENDPOINT_APP;
        $this->data['messagesCallbackValue'] = $appId;

        $this->data['voiceCallbackType'] = self::ENDPOINT_APP;
        $this->data['voiceCallbackValue'] = $appId;

        return $this;
    }

    public function getAppId(): ?string
    {
        // These should never be different, but might not both be set
        return $this->data['voiceCallbackValue'] ?? $this->data['messagesCallbackValue'] ?? null;
    }
}
