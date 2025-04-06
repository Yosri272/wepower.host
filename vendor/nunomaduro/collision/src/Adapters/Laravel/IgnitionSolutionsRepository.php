<?php

declare(strict_types=1);

namespace NunoMaduro\Collision\Adapters\Laravel;

use NunoMaduro\Collision\Contracts\SolutionsRepository;
<<<<<<< HEAD
use Spatie\Ignition\Contracts\SolutionProviderRepository;
=======
use Spatie\ErrorSolutions\Contracts\SolutionProviderRepository;
use Spatie\Ignition\Contracts\SolutionProviderRepository as IgnitionSolutionProviderRepository;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use Throwable;

/**
 * @internal
 */
final class IgnitionSolutionsRepository implements SolutionsRepository
{
    /**
     * Holds an instance of ignition solutions provider repository.
     *
<<<<<<< HEAD
     * @var \Spatie\Ignition\Contracts\SolutionProviderRepository
     */
    protected $solutionProviderRepository;
=======
     * @var IgnitionSolutionProviderRepository|SolutionProviderRepository
     */
    protected $solutionProviderRepository; // @phpstan-ignore-line
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    /**
     * IgnitionSolutionsRepository constructor.
     */
<<<<<<< HEAD
    public function __construct(SolutionProviderRepository $solutionProviderRepository)
=======
    public function __construct(IgnitionSolutionProviderRepository|SolutionProviderRepository $solutionProviderRepository) // @phpstan-ignore-line
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $this->solutionProviderRepository = $solutionProviderRepository;
    }

    /**
     * {@inheritdoc}
     */
<<<<<<< HEAD
    public function getFromThrowable(Throwable $throwable): array
    {
        return $this->solutionProviderRepository->getSolutionsForThrowable($throwable);
=======
    public function getFromThrowable(Throwable $throwable): array // @phpstan-ignore-line
    {
        return $this->solutionProviderRepository->getSolutionsForThrowable($throwable); // @phpstan-ignore-line
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }
}
