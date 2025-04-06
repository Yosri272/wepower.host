<?php

declare(strict_types=1);

namespace Kreait\Firebase\Http;

use Beste\Json;
<<<<<<< HEAD
=======
use Closure;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use Exception;
use Fig\Http\Message\StatusCodeInterface as StatusCode;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\MessageFormatter;
use GuzzleHttp\Promise\Create;
<<<<<<< HEAD
=======
use GuzzleHttp\Promise\PromiseInterface;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use GuzzleHttp\Psr7\Query;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Log\LoggerInterface;

use function array_merge;
use function ltrim;
use function str_ends_with;

/**
 * @internal
 */
final class Middleware
{
    /**
     * Ensures that the ".json" suffix is added to URIs and that the content type is set correctly.
     */
    public static function ensureJsonSuffix(): callable
    {
<<<<<<< HEAD
        return static fn(callable $handler) => static function (RequestInterface $request, ?array $options = null) use ($handler) {
=======
        return static fn(callable $handler): Closure => static function (RequestInterface $request, ?array $options = null) use ($handler) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $uri = $request->getUri();
            $path = '/'.ltrim($uri->getPath(), '/');

            if (!str_ends_with($path, '.json')) {
                $uri = $uri->withPath($path.'.json');
                $request = $request->withUri($uri);
            }

            return $handler($request, $options ?: []);
        };
    }

    /**
     * @param array<string, mixed>|null $override
     */
    public static function addDatabaseAuthVariableOverride(?array $override): callable
    {
<<<<<<< HEAD
        return static fn(callable $handler) => static function (RequestInterface $request, ?array $options = null) use ($handler, $override) {
=======
        return static fn(callable $handler): Closure => static function (RequestInterface $request, ?array $options = null) use ($handler, $override) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $uri = $request->getUri();

            $uri = $uri->withQuery(Query::build(
                array_merge(Query::parse($uri->getQuery()), ['auth_variable_override' => Json::encode($override)]),
            ));

            return $handler($request->withUri($uri), $options ?: []);
        };
    }

    public static function log(LoggerInterface $logger, MessageFormatter $formatter, string $logLevel, string $errorLogLevel): callable
    {
<<<<<<< HEAD
        return static fn(callable $handler) => static fn($request, array $options) => $handler($request, $options)->then(
            static function (ResponseInterface $response) use ($logger, $request, $formatter, $logLevel, $errorLogLevel) {
=======
        return static fn(callable $handler): Closure => static fn($request, array $options) => $handler($request, $options)->then(
            static function (ResponseInterface $response) use ($logger, $request, $formatter, $logLevel, $errorLogLevel): ResponseInterface {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                $message = $formatter->format($request, $response);
                $messageLogLevel = $response->getStatusCode() >= StatusCode::STATUS_BAD_REQUEST ? $errorLogLevel : $logLevel;

                $logger->log($messageLogLevel, $message);

                return $response;
            },
<<<<<<< HEAD
            static function (Exception $reason) use ($logger, $request, $formatter, $errorLogLevel) {
=======
            static function (Exception $reason) use ($logger, $request, $formatter, $errorLogLevel): PromiseInterface {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                $response = $reason instanceof RequestException ? $reason->getResponse() : null;
                $message = $formatter->format($request, $response, $reason);

                $logger->log($errorLogLevel, $message, ['request' => $request, 'response' => $response]);

                return Create::rejectionFor($reason);
            },
        );
    }
}
