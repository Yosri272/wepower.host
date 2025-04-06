<?php

namespace Laravel\Sanctum;

use DateTimeInterface;
use Illuminate\Support\Str;

<<<<<<< HEAD
=======
/**
 * @template TToken of \Laravel\Sanctum\Contracts\HasAbilities = \Laravel\Sanctum\PersonalAccessToken
 */
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
trait HasApiTokens
{
    /**
     * The access token the user is using for the current request.
     *
<<<<<<< HEAD
     * @var \Laravel\Sanctum\Contracts\HasAbilities
=======
     * @var TToken
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    protected $accessToken;

    /**
     * Get the access tokens that belong to model.
     *
<<<<<<< HEAD
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
=======
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany<TToken, $this>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function tokens()
    {
        return $this->morphMany(Sanctum::$personalAccessTokenModel, 'tokenable');
    }

    /**
     * Determine if the current API token has a given scope.
     *
     * @param  string  $ability
     * @return bool
     */
    public function tokenCan(string $ability)
    {
        return $this->accessToken && $this->accessToken->can($ability);
    }

    /**
<<<<<<< HEAD
=======
     * Determine if the current API token does not have a given scope.
     *
     * @param  string  $ability
     * @return bool
     */
    public function tokenCant(string $ability)
    {
        return ! $this->tokenCan($ability);
    }

    /**
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * Create a new personal access token for the user.
     *
     * @param  string  $name
     * @param  array  $abilities
     * @param  \DateTimeInterface|null  $expiresAt
     * @return \Laravel\Sanctum\NewAccessToken
     */
<<<<<<< HEAD
    public function createToken(string $name, array $abilities = ['*'], DateTimeInterface $expiresAt = null)
=======
    public function createToken(string $name, array $abilities = ['*'], ?DateTimeInterface $expiresAt = null)
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $plainTextToken = $this->generateTokenString();

        $token = $this->tokens()->create([
            'name' => $name,
            'token' => hash('sha256', $plainTextToken),
            'abilities' => $abilities,
            'expires_at' => $expiresAt,
        ]);

        return new NewAccessToken($token, $token->getKey().'|'.$plainTextToken);
    }

    /**
     * Generate the token string.
     *
     * @return string
     */
    public function generateTokenString()
    {
        return sprintf(
            '%s%s%s',
            config('sanctum.token_prefix', ''),
            $tokenEntropy = Str::random(40),
            hash('crc32b', $tokenEntropy)
        );
    }

    /**
     * Get the access token currently associated with the user.
     *
<<<<<<< HEAD
     * @return \Laravel\Sanctum\Contracts\HasAbilities
=======
     * @return TToken
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function currentAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * Set the current access token for the user.
     *
<<<<<<< HEAD
     * @param  \Laravel\Sanctum\Contracts\HasAbilities  $accessToken
=======
     * @param  TToken  $accessToken
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * @return $this
     */
    public function withAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;

        return $this;
    }
}
