<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpKernel\EventListener;

use Psr\Log\LoggerInterface;
use Psr\Log\LogLevel;
use Symfony\Component\ErrorHandler\ErrorHandler;
use Symfony\Component\ErrorHandler\Exception\FlattenException;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Attribute\WithHttpStatus;
use Symfony\Component\HttpKernel\Attribute\WithLogLevel;
use Symfony\Component\HttpKernel\Event\ControllerArgumentsEvent;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Symfony\Component\HttpKernel\Event\ResponseEvent;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\HttpKernel\Log\DebugLoggerConfigurator;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ErrorListener implements EventSubscriberInterface
{
<<<<<<< HEAD
    protected $controller;
    protected $logger;
    protected $debug;
    /**
     * @var array<class-string, array{log_level: string|null, status_code: int<100,599>|null}>
     */
    protected $exceptionsMapping;

    /**
     * @param array<class-string, array{log_level: string|null, status_code: int<100,599>|null}> $exceptionsMapping
     */
    public function __construct(string|object|array|null $controller, ?LoggerInterface $logger = null, bool $debug = false, array $exceptionsMapping = [])
    {
        $this->controller = $controller;
        $this->logger = $logger;
        $this->debug = $debug;
        $this->exceptionsMapping = $exceptionsMapping;
    }

    /**
     * @return void
     */
    public function logKernelException(ExceptionEvent $event)
=======
    /**
     * @param array<class-string, array{log_level: string|null, status_code: int<100,599>|null}> $exceptionsMapping
     */
    public function __construct(
        protected string|object|array|null $controller,
        protected ?LoggerInterface $logger = null,
        protected bool $debug = false,
        protected array $exceptionsMapping = [],
    ) {
    }

    public function logKernelException(ExceptionEvent $event): void
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $throwable = $event->getThrowable();
        $logLevel = $this->resolveLogLevel($throwable);

        foreach ($this->exceptionsMapping as $class => $config) {
            if (!$throwable instanceof $class || !$config['status_code']) {
                continue;
            }
            if (!$throwable instanceof HttpExceptionInterface || $throwable->getStatusCode() !== $config['status_code']) {
                $headers = $throwable instanceof HttpExceptionInterface ? $throwable->getHeaders() : [];
<<<<<<< HEAD
                $throwable = new HttpException($config['status_code'], $throwable->getMessage(), $throwable, $headers);
=======
                $throwable = HttpException::fromStatusCode($config['status_code'], $throwable->getMessage(), $throwable, $headers);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                $event->setThrowable($throwable);
            }
            break;
        }

        // There's no specific status code defined in the configuration for this exception
<<<<<<< HEAD
        if (!$throwable instanceof HttpExceptionInterface) {
            $class = new \ReflectionClass($throwable);

            do {
                if ($attributes = $class->getAttributes(WithHttpStatus::class, \ReflectionAttribute::IS_INSTANCEOF)) {
                    /** @var WithHttpStatus $instance */
                    $instance = $attributes[0]->newInstance();

                    $throwable = new HttpException($instance->statusCode, $throwable->getMessage(), $throwable, $instance->headers);
                    $event->setThrowable($throwable);
                    break;
                }
            } while ($class = $class->getParentClass());
=======
        if (!$throwable instanceof HttpExceptionInterface && $withHttpStatus = $this->getInheritedAttribute($throwable::class, WithHttpStatus::class)) {
            $throwable = HttpException::fromStatusCode($withHttpStatus->statusCode, $throwable->getMessage(), $throwable, $withHttpStatus->headers);
            $event->setThrowable($throwable);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        }

        $e = FlattenException::createFromThrowable($throwable);

<<<<<<< HEAD
        $this->logException($throwable, sprintf('Uncaught PHP Exception %s: "%s" at %s line %s', $e->getClass(), $e->getMessage(), basename($e->getFile()), $e->getLine()), $logLevel);
    }

    /**
     * @return void
     */
    public function onKernelException(ExceptionEvent $event)
=======
        $this->logException($throwable, \sprintf('Uncaught PHP Exception %s: "%s" at %s line %s', $e->getClass(), $e->getMessage(), basename($e->getFile()), $e->getLine()), $logLevel);
    }

    public function onKernelException(ExceptionEvent $event): void
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        if (null === $this->controller) {
            return;
        }

<<<<<<< HEAD
        $throwable = $event->getThrowable();

        if ($exceptionHandler = set_exception_handler(var_dump(...))) {
            restore_exception_handler();
            if (\is_array($exceptionHandler) && $exceptionHandler[0] instanceof ErrorHandler) {
                $throwable = $exceptionHandler[0]->enhanceError($event->getThrowable());
            }
=======
        if (!$this->debug && $event->isKernelTerminating()) {
            return;
        }

        $throwable = $event->getThrowable();

        $exceptionHandler = set_exception_handler('var_dump');
        restore_exception_handler();

        if (\is_array($exceptionHandler) && $exceptionHandler[0] instanceof ErrorHandler) {
            $throwable = $exceptionHandler[0]->enhanceError($event->getThrowable());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        }

        $request = $this->duplicateRequest($throwable, $event->getRequest());

        try {
            $response = $event->getKernel()->handle($request, HttpKernelInterface::SUB_REQUEST, false);
        } catch (\Exception $e) {
            $f = FlattenException::createFromThrowable($e);

<<<<<<< HEAD
            $this->logException($e, sprintf('Exception thrown when handling an exception (%s: %s at %s line %s)', $f->getClass(), $f->getMessage(), basename($e->getFile()), $e->getLine()));
=======
            $this->logException($e, \sprintf('Exception thrown when handling an exception (%s: %s at %s line %s)', $f->getClass(), $f->getMessage(), basename($e->getFile()), $e->getLine()));
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

            $prev = $e;
            do {
                if ($throwable === $wrapper = $prev) {
                    throw $e;
                }
            } while ($prev = $wrapper->getPrevious());

            $prev = new \ReflectionProperty($wrapper instanceof \Exception ? \Exception::class : \Error::class, 'previous');
            $prev->setValue($wrapper, $throwable);

            throw $e;
        }

        $event->setResponse($response);

        if ($this->debug) {
            $event->getRequest()->attributes->set('_remove_csp_headers', true);
        }
    }

    public function removeCspHeader(ResponseEvent $event): void
    {
        if ($this->debug && $event->getRequest()->attributes->get('_remove_csp_headers', false)) {
            $event->getResponse()->headers->remove('Content-Security-Policy');
        }
    }

<<<<<<< HEAD
    /**
     * @return void
     */
    public function onControllerArguments(ControllerArgumentsEvent $event)
=======
    public function onControllerArguments(ControllerArgumentsEvent $event): void
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $e = $event->getRequest()->attributes->get('exception');

        if (!$e instanceof \Throwable || false === $k = array_search($e, $event->getArguments(), true)) {
            return;
        }

        $r = new \ReflectionFunction($event->getController()(...));
        $r = $r->getParameters()[$k] ?? null;

        if ($r && (!($r = $r->getType()) instanceof \ReflectionNamedType || FlattenException::class === $r->getName())) {
            $arguments = $event->getArguments();
            $arguments[$k] = FlattenException::createFromThrowable($e);
            $event->setArguments($arguments);
        }
    }

    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::CONTROLLER_ARGUMENTS => 'onControllerArguments',
            KernelEvents::EXCEPTION => [
                ['logKernelException', 0],
                ['onKernelException', -128],
            ],
            KernelEvents::RESPONSE => ['removeCspHeader', -128],
        ];
    }

    /**
     * Logs an exception.
     */
    protected function logException(\Throwable $exception, string $message, ?string $logLevel = null): void
    {
        if (null === $this->logger) {
            return;
        }

        $logLevel ??= $this->resolveLogLevel($exception);

        $this->logger->log($logLevel, $message, ['exception' => $exception]);
    }

    /**
     * Resolves the level to be used when logging the exception.
     */
    private function resolveLogLevel(\Throwable $throwable): string
    {
        foreach ($this->exceptionsMapping as $class => $config) {
            if ($throwable instanceof $class && $config['log_level']) {
                return $config['log_level'];
            }
        }

<<<<<<< HEAD
        $class = new \ReflectionClass($throwable);

        do {
            if ($attributes = $class->getAttributes(WithLogLevel::class)) {
                /** @var WithLogLevel $instance */
                $instance = $attributes[0]->newInstance();

                return $instance->level;
            }
        } while ($class = $class->getParentClass());
=======
        if ($withLogLevel = $this->getInheritedAttribute($throwable::class, WithLogLevel::class)) {
            return $withLogLevel->level;
        }
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        if (!$throwable instanceof HttpExceptionInterface || $throwable->getStatusCode() >= 500) {
            return LogLevel::CRITICAL;
        }

        return LogLevel::ERROR;
    }

    /**
     * Clones the request for the exception.
     */
    protected function duplicateRequest(\Throwable $exception, Request $request): Request
    {
        $attributes = [
            '_controller' => $this->controller,
            'exception' => $exception,
            'logger' => DebugLoggerConfigurator::getDebugLogger($this->logger),
        ];
        $request = $request->duplicate(null, null, $attributes);
        $request->setMethod('GET');

        return $request;
    }
<<<<<<< HEAD
=======

    /**
     * @template T
     *
     * @param class-string<T> $attribute
     *
     * @return T|null
     */
    private function getInheritedAttribute(string $class, string $attribute): ?object
    {
        $class = new \ReflectionClass($class);
        $interfaces = [];
        $attributeReflector = null;
        $parentInterfaces = [];
        $ownInterfaces = [];

        do {
            if ($attributes = $class->getAttributes($attribute, \ReflectionAttribute::IS_INSTANCEOF)) {
                $attributeReflector = $attributes[0];
                $parentInterfaces = class_implements($class->name);
                break;
            }

            $interfaces[] = class_implements($class->name);
        } while ($class = $class->getParentClass());

        while ($interfaces) {
            $ownInterfaces = array_diff_key(array_pop($interfaces), $parentInterfaces);
            $parentInterfaces += $ownInterfaces;

            foreach ($ownInterfaces as $interface) {
                $class = new \ReflectionClass($interface);

                if ($attributes = $class->getAttributes($attribute, \ReflectionAttribute::IS_INSTANCEOF)) {
                    $attributeReflector = $attributes[0];
                }
            }
        }

        return $attributeReflector?->newInstance();
    }
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
}
