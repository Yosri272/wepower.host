<?php
declare(strict_types=1);

namespace Lcobucci\JWT;

use Closure;
use Lcobucci\JWT\Encoding\ChainedFormatter;
use Lcobucci\JWT\Encoding\JoseEncoder;
use Lcobucci\JWT\Signer\Key;
use Lcobucci\JWT\Validation\Constraint;

/**
 * Configuration container for the JWT Builder and Parser
 *
 * Serves like a small DI container to simplify the creation and usage
 * of the objects.
 */
final class Configuration
{
    private Parser $parser;
    private Validator $validator;

    /** @var Closure(ClaimsFormatter $claimFormatter): Builder */
    private Closure $builderFactory;

    /** @var Constraint[] */
<<<<<<< HEAD
    private array $validationConstraints = [];

=======
    private array $validationConstraints;

    /** @param Closure(ClaimsFormatter $claimFormatter): Builder|null $builderFactory */
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    private function __construct(
        private readonly Signer $signer,
        private readonly Key $signingKey,
        private readonly Key $verificationKey,
<<<<<<< HEAD
        Encoder $encoder,
        Decoder $decoder,
    ) {
        $this->parser    = new Token\Parser($decoder);
        $this->validator = new Validation\Validator();

        $this->builderFactory = static function (ClaimsFormatter $claimFormatter) use ($encoder): Builder {
            return new Token\Builder($encoder, $claimFormatter);
        };
=======
        private readonly Encoder $encoder,
        private readonly Decoder $decoder,
        ?Parser $parser,
        ?Validator $validator,
        ?Closure $builderFactory,
        Constraint ...$validationConstraints,
    ) {
        $this->parser    = $parser ?? new Token\Parser($decoder);
        $this->validator = $validator ?? new Validation\Validator();

        $this->builderFactory = $builderFactory
            ?? static function (ClaimsFormatter $claimFormatter) use ($encoder): Builder {
                return Token\Builder::new($encoder, $claimFormatter);
            };

        $this->validationConstraints = $validationConstraints;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public static function forAsymmetricSigner(
        Signer $signer,
        Key $signingKey,
        Key $verificationKey,
        Encoder $encoder = new JoseEncoder(),
        Decoder $decoder = new JoseEncoder(),
    ): self {
        return new self(
            $signer,
            $signingKey,
            $verificationKey,
            $encoder,
            $decoder,
<<<<<<< HEAD
=======
            null,
            null,
            null,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        );
    }

    public static function forSymmetricSigner(
        Signer $signer,
        Key $key,
        Encoder $encoder = new JoseEncoder(),
        Decoder $decoder = new JoseEncoder(),
    ): self {
        return new self(
            $signer,
            $key,
            $key,
            $encoder,
            $decoder,
<<<<<<< HEAD
        );
    }

    /** @param callable(ClaimsFormatter): Builder $builderFactory */
=======
            null,
            null,
            null,
        );
    }

    /**
     * @deprecated Deprecated since v5.5, please use {@see self::withBuilderFactory()} instead
     *
     * @param callable(ClaimsFormatter): Builder $builderFactory
     */
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function setBuilderFactory(callable $builderFactory): void
    {
        $this->builderFactory = $builderFactory(...);
    }

<<<<<<< HEAD
=======
    /** @param callable(ClaimsFormatter): Builder $builderFactory */
    public function withBuilderFactory(callable $builderFactory): self
    {
        return new self(
            $this->signer,
            $this->signingKey,
            $this->verificationKey,
            $this->encoder,
            $this->decoder,
            $this->parser,
            $this->validator,
            $builderFactory(...),
            ...$this->validationConstraints,
        );
    }

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function builder(?ClaimsFormatter $claimFormatter = null): Builder
    {
        return ($this->builderFactory)($claimFormatter ?? ChainedFormatter::default());
    }

    public function parser(): Parser
    {
        return $this->parser;
    }

<<<<<<< HEAD
=======
    /** @deprecated Deprecated since v5.5, please use {@see self::withParser()} instead */
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function setParser(Parser $parser): void
    {
        $this->parser = $parser;
    }

<<<<<<< HEAD
=======
    public function withParser(Parser $parser): self
    {
        return new self(
            $this->signer,
            $this->signingKey,
            $this->verificationKey,
            $this->encoder,
            $this->decoder,
            $parser,
            $this->validator,
            $this->builderFactory,
            ...$this->validationConstraints,
        );
    }

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function signer(): Signer
    {
        return $this->signer;
    }

    public function signingKey(): Key
    {
        return $this->signingKey;
    }

    public function verificationKey(): Key
    {
        return $this->verificationKey;
    }

    public function validator(): Validator
    {
        return $this->validator;
    }

<<<<<<< HEAD
=======
    /** @deprecated Deprecated since v5.5, please use {@see self::withValidator()} instead */
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function setValidator(Validator $validator): void
    {
        $this->validator = $validator;
    }

<<<<<<< HEAD
=======
    public function withValidator(Validator $validator): self
    {
        return new self(
            $this->signer,
            $this->signingKey,
            $this->verificationKey,
            $this->encoder,
            $this->decoder,
            $this->parser,
            $validator,
            $this->builderFactory,
            ...$this->validationConstraints,
        );
    }

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    /** @return Constraint[] */
    public function validationConstraints(): array
    {
        return $this->validationConstraints;
    }

<<<<<<< HEAD
=======
    /** @deprecated Deprecated since v5.5, please use {@see self::withValidationConstraints()} instead */
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function setValidationConstraints(Constraint ...$validationConstraints): void
    {
        $this->validationConstraints = $validationConstraints;
    }
<<<<<<< HEAD
=======

    public function withValidationConstraints(Constraint ...$validationConstraints): self
    {
        return new self(
            $this->signer,
            $this->signingKey,
            $this->verificationKey,
            $this->encoder,
            $this->decoder,
            $this->parser,
            $this->validator,
            $this->builderFactory,
            ...$validationConstraints,
        );
    }
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
}
