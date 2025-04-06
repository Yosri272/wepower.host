<?php

declare(strict_types=1);

namespace Kreait\Firebase\JWT;

use Beste\Clock\SystemClock;
use DateInterval;
use Kreait\Firebase\JWT\Action\CreateCustomToken;
use Kreait\Firebase\JWT\Action\CreateCustomToken\Handler;
use Kreait\Firebase\JWT\Action\CreateCustomToken\WithLcobucciJWT;
use Kreait\Firebase\JWT\Contract\Token;
use Kreait\Firebase\JWT\Error\CustomTokenCreationFailed;
use Kreait\Firebase\JWT\Value\Duration;

final class CustomTokenGenerator
{
    private ?string $tenantId = null;

<<<<<<< HEAD
    public function __construct(private readonly Handler $handler) {}
=======
    public function __construct(private readonly Handler $handler)
    {
    }
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    /**
     * @param non-empty-string $clientEmail
     * @param non-empty-string $privateKey
     */
    public static function withClientEmailAndPrivateKey(string $clientEmail, string $privateKey): self
    {
        $handler = new WithLcobucciJWT($clientEmail, $privateKey, SystemClock::create());

        return new self($handler);
    }

    /**
     * @param non-empty-string $tenantId
     */
    public function withTenantId(string $tenantId): self
    {
        $generator = clone $this;
        $generator->tenantId = $tenantId;

        return $generator;
    }

    public function execute(CreateCustomToken $action): Token
    {
        if ($this->tenantId) {
            $action = $action->withTenantId($this->tenantId);
        }

        return $this->handler->handle($action);
    }

    /**
     * @param non-empty-string $uid
<<<<<<< HEAD
     * @param array<non-empty-string, mixed> $claims
     *
     * @throws CustomTokenCreationFailed
     */
    public function createCustomToken(string $uid, ?array $claims = null, Duration|DateInterval|string|int $timeToLive = null): Token
=======
     * @param array<non-empty-string, mixed>|null $claims
     *
     * @throws CustomTokenCreationFailed
     */
    public function createCustomToken(string $uid, array|null $claims = null, Duration|DateInterval|string|int|null $timeToLive = null): Token
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $action = CreateCustomToken::forUid($uid);

        if ($claims !== null) {
            $action = $action->withCustomClaims($claims);
        }

        if ($timeToLive !== null) {
            $action = $action->withTimeToLive($timeToLive);
        }

        return $this->execute($action);
    }
}
