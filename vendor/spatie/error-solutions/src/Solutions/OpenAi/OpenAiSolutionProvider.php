<?php

namespace Spatie\ErrorSolutions\Solutions\OpenAi;

use Psr\SimpleCache\CacheInterface;
use Spatie\ErrorSolutions\Contracts\HasSolutionsForThrowable;
use Throwable;

class OpenAiSolutionProvider implements HasSolutionsForThrowable
{
    public function __construct(
<<<<<<< HEAD
        protected string $openAiKey,
        protected ?CacheInterface $cache = null,
        protected int $cacheTtlInSeconds = 60 * 60,
        protected string|null $applicationType = null,
        protected string|null $applicationPath = null,
=======
        protected string            $openAiKey,
        protected ?CacheInterface   $cache = null,
        protected int               $cacheTtlInSeconds = 60 * 60,
        protected string|null       $applicationType = null,
        protected string|null       $applicationPath = null,
        protected string            $openAiModel = 'gpt-3.5-turbo',
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    ) {
        $this->cache ??= new DummyCache();
    }

    public function canSolve(Throwable $throwable): bool
    {
        return true;
    }

    public function getSolutions(Throwable $throwable): array
    {
        return [
            new OpenAiSolution(
                $throwable,
                $this->openAiKey,
                $this->cache,
                $this->cacheTtlInSeconds,
                $this->applicationType,
                $this->applicationPath,
<<<<<<< HEAD
=======
                $this->openAiModel
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            ),
        ];
    }

    public function applicationType(string $applicationType): self
    {
        $this->applicationType = $applicationType;

        return $this;
    }

    public function applicationPath(string $applicationPath): self
    {
        $this->applicationPath = $applicationPath;

        return $this;
    }

    public function useCache(CacheInterface $cache, int $cacheTtlInSeconds = 60 * 60): self
    {
        $this->cache = $cache;

        $this->cacheTtlInSeconds = $cacheTtlInSeconds;

        return $this;
    }
}
