<?php

declare(strict_types=1);

namespace NunoMaduro\Collision\SolutionsRepositories;

use NunoMaduro\Collision\Contracts\SolutionsRepository;
use Throwable;

/**
 * @internal
 */
final class NullSolutionsRepository implements SolutionsRepository
{
    /**
     * {@inheritdoc}
     */
<<<<<<< HEAD
    public function getFromThrowable(Throwable $throwable): array
=======
    public function getFromThrowable(Throwable $throwable): array  // @phpstan-ignore-line
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return [];
    }
}
