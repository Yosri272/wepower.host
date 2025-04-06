<?php

declare(strict_types=1);

namespace NunoMaduro\Collision;

use Whoops\Run;
use Whoops\RunInterface;

/**
 * @internal
 *
 * @see \Tests\Unit\ProviderTest
 */
final class Provider
{
    /**
     * Holds an instance of the Run.
     */
    private RunInterface $run;

    /**
     * Holds an instance of the handler.
     */
    private Handler $handler;

    /**
     * Creates a new instance of the Provider.
     */
<<<<<<< HEAD
    public function __construct(RunInterface $run = null, Handler $handler = null)
    {
        $this->run = $run ?: new Run();
        $this->handler = $handler ?: new Handler();
=======
    public function __construct(?RunInterface $run = null, ?Handler $handler = null)
    {
        $this->run = $run ?: new Run;
        $this->handler = $handler ?: new Handler;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Registers the current Handler as Error Handler.
     */
    public function register(): self
    {
        $this->run->pushHandler($this->handler)
            ->register();

        return $this;
    }

    /**
     * Returns the handler.
     */
    public function getHandler(): Handler
    {
        return $this->handler;
    }
}
