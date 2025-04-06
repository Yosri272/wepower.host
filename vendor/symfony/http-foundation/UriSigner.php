<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpFoundation;

<<<<<<< HEAD
=======
use Symfony\Component\HttpFoundation\Exception\LogicException;

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class UriSigner
{
<<<<<<< HEAD
    private string $secret;
    private string $parameter;

    /**
     * @param string $parameter Query string parameter to use
     */
    public function __construct(#[\SensitiveParameter] string $secret, string $parameter = '_hash')
    {
        if (!$secret) {
            throw new \InvalidArgumentException('A non-empty secret is required.');
        }

        $this->secret = $secret;
        $this->parameter = $parameter;
=======
    /**
     * @param string $hashParameter       Query string parameter to use
     * @param string $expirationParameter Query string parameter to use for expiration
     */
    public function __construct(
        #[\SensitiveParameter] private string $secret,
        private string $hashParameter = '_hash',
        private string $expirationParameter = '_expiration',
    ) {
        if (!$secret) {
            throw new \InvalidArgumentException('A non-empty secret is required.');
        }
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Signs a URI.
     *
     * The given URI is signed by adding the query string parameter
     * which value depends on the URI and the secret.
<<<<<<< HEAD
     */
    public function sign(string $uri): string
    {
=======
     *
     * @param \DateTimeInterface|\DateInterval|int|null $expiration The expiration for the given URI.
     *                                                              If $expiration is a \DateTimeInterface, it's expected to be the exact date + time.
     *                                                              If $expiration is a \DateInterval, the interval is added to "now" to get the date + time.
     *                                                              If $expiration is an int, it's expected to be a timestamp in seconds of the exact date + time.
     *                                                              If $expiration is null, no expiration.
     *
     * The expiration is added as a query string parameter.
     */
    public function sign(string $uri/*, \DateTimeInterface|\DateInterval|int|null $expiration = null*/): string
    {
        $expiration = null;

        if (1 < \func_num_args()) {
            $expiration = func_get_arg(1);
        }

        if (null !== $expiration && !$expiration instanceof \DateTimeInterface && !$expiration instanceof \DateInterval && !\is_int($expiration)) {
            throw new \TypeError(\sprintf('The second argument of %s() must be an instance of %s or %s, an integer or null (%s given).', __METHOD__, \DateTimeInterface::class, \DateInterval::class, get_debug_type($expiration)));
        }

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        $url = parse_url($uri);
        $params = [];

        if (isset($url['query'])) {
            parse_str($url['query'], $params);
        }

<<<<<<< HEAD
        $uri = $this->buildUrl($url, $params);
        $params[$this->parameter] = $this->computeHash($uri);
=======
        if (isset($params[$this->hashParameter])) {
            throw new LogicException(\sprintf('URI query parameter conflict: parameter name "%s" is reserved.', $this->hashParameter));
        }

        if (isset($params[$this->expirationParameter])) {
            throw new LogicException(\sprintf('URI query parameter conflict: parameter name "%s" is reserved.', $this->expirationParameter));
        }

        if (null !== $expiration) {
            $params[$this->expirationParameter] = $this->getExpirationTime($expiration);
        }

        $uri = $this->buildUrl($url, $params);
        $params[$this->hashParameter] = $this->computeHash($uri);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        return $this->buildUrl($url, $params);
    }

    /**
     * Checks that a URI contains the correct hash.
<<<<<<< HEAD
=======
     * Also checks if the URI has not expired (If you used expiration during signing).
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function check(string $uri): bool
    {
        $url = parse_url($uri);
        $params = [];

        if (isset($url['query'])) {
            parse_str($url['query'], $params);
        }

<<<<<<< HEAD
        if (empty($params[$this->parameter])) {
            return false;
        }

        $hash = $params[$this->parameter];
        unset($params[$this->parameter]);

        return hash_equals($this->computeHash($this->buildUrl($url, $params)), $hash);
=======
        if (empty($params[$this->hashParameter])) {
            return false;
        }

        $hash = $params[$this->hashParameter];
        unset($params[$this->hashParameter]);

        if (!hash_equals($this->computeHash($this->buildUrl($url, $params)), $hash)) {
            return false;
        }

        if ($expiration = $params[$this->expirationParameter] ?? false) {
            return time() < $expiration;
        }

        return true;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function checkRequest(Request $request): bool
    {
        $qs = ($qs = $request->server->get('QUERY_STRING')) ? '?'.$qs : '';

        // we cannot use $request->getUri() here as we want to work with the original URI (no query string reordering)
        return $this->check($request->getSchemeAndHttpHost().$request->getBaseUrl().$request->getPathInfo().$qs);
    }

    private function computeHash(string $uri): string
    {
        return base64_encode(hash_hmac('sha256', $uri, $this->secret, true));
    }

    private function buildUrl(array $url, array $params = []): string
    {
        ksort($params, \SORT_STRING);
        $url['query'] = http_build_query($params, '', '&');

        $scheme = isset($url['scheme']) ? $url['scheme'].'://' : '';
        $host = $url['host'] ?? '';
        $port = isset($url['port']) ? ':'.$url['port'] : '';
        $user = $url['user'] ?? '';
        $pass = isset($url['pass']) ? ':'.$url['pass'] : '';
        $pass = ($user || $pass) ? "$pass@" : '';
        $path = $url['path'] ?? '';
        $query = $url['query'] ? '?'.$url['query'] : '';
        $fragment = isset($url['fragment']) ? '#'.$url['fragment'] : '';

        return $scheme.$user.$pass.$host.$port.$path.$query.$fragment;
    }
<<<<<<< HEAD
}

if (!class_exists(\Symfony\Component\HttpKernel\UriSigner::class, false)) {
    class_alias(UriSigner::class, \Symfony\Component\HttpKernel\UriSigner::class);
=======

    private function getExpirationTime(\DateTimeInterface|\DateInterval|int $expiration): string
    {
        if ($expiration instanceof \DateTimeInterface) {
            return $expiration->format('U');
        }

        if ($expiration instanceof \DateInterval) {
            return \DateTimeImmutable::createFromFormat('U', time())->add($expiration)->format('U');
        }

        return (string) $expiration;
    }
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
}
