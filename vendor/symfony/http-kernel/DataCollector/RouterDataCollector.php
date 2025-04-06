<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpKernel\DataCollector;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\ControllerEvent;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class RouterDataCollector extends DataCollector
{
    /**
     * @var \SplObjectStorage<Request, callable>
     */
<<<<<<< HEAD
    protected $controllers;
=======
    protected \SplObjectStorage $controllers;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    public function __construct()
    {
        $this->reset();
    }

    /**
     * @final
     */
    public function collect(Request $request, Response $response, ?\Throwable $exception = null): void
    {
        if ($response instanceof RedirectResponse) {
            $this->data['redirect'] = true;
            $this->data['url'] = $response->getTargetUrl();

            if ($this->controllers->contains($request)) {
                $this->data['route'] = $this->guessRoute($request, $this->controllers[$request]);
            }
        }

        unset($this->controllers[$request]);
    }

<<<<<<< HEAD
    /**
     * @return void
     */
    public function reset()
=======
    public function reset(): void
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $this->controllers = new \SplObjectStorage();

        $this->data = [
            'redirect' => false,
            'url' => null,
            'route' => null,
        ];
    }

<<<<<<< HEAD
    /**
     * @return string
     */
    protected function guessRoute(Request $request, string|object|array $controller)
=======
    protected function guessRoute(Request $request, string|object|array $controller): string
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return 'n/a';
    }

    /**
     * Remembers the controller associated to each request.
<<<<<<< HEAD
     *
     * @return void
     */
    public function onKernelController(ControllerEvent $event)
=======
     */
    public function onKernelController(ControllerEvent $event): void
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $this->controllers[$event->getRequest()] = $event->getController();
    }

    /**
     * @return bool Whether this request will result in a redirect
     */
    public function getRedirect(): bool
    {
        return $this->data['redirect'];
    }

    public function getTargetUrl(): ?string
    {
        return $this->data['url'];
    }

    public function getTargetRoute(): ?string
    {
        return $this->data['route'];
    }

    public function getName(): string
    {
        return 'router';
    }
}
