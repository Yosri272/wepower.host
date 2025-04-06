<?php

namespace Rize\UriTemplate\Node;

use Rize\UriTemplate\Parser;

/**
<<<<<<< HEAD
 * Base class for all Nodes
 */
abstract class Abstraction
{
    /**
     * @var string
     */
    private $token;

    public function __construct($token)
    {
        $this->token = $token;
    }
=======
 * Base class for all Nodes.
 */
abstract class Abstraction
{
    public function __construct(private readonly string $token) {}
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    /**
     * Expands URI template
     *
<<<<<<< HEAD
     * @param Parser $parser
     * @param array  $params
     * @return null|string
     */
    public function expand(Parser $parser, array $params = array())
=======
     * @param array<string, mixed> $params
     */
    public function expand(Parser $parser, array $params = []): ?string
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->token;
    }

    /**
<<<<<<< HEAD
     * Matches given URI against current node
     *
     * @param Parser $parser
     * @param string $uri
     * @param array  $params
     * @param bool $strict
     * @return null|array `uri and params` or `null` if not match and $strict is true
     */
    public function match(Parser $parser, $uri, $params = array(), $strict = false)
    {
        // match literal string from start to end
        $length = strlen($this->token);
        if (substr($uri, 0, $length) === $this->token) {
            $uri = substr($uri, $length);
        }

        // when there's no match, just return null if strict mode is given
        else if ($strict) {
            return null;
        }

        return array($uri, $params);
    }

    /**
     * @return string
     */
    public function getToken()
=======
     * Matches given URI against current node.
     *
     * @param array<string, mixed> $params
     *
     * @return null|array{0: string, 1: array<string, mixed>} `uri and params` or `null` if not match and $strict is true
     */
    public function match(Parser $parser, string $uri, array $params = [], bool $strict = false): ?array
    {
        // match literal string from start to end
        if (str_starts_with($uri, $this->token)) {
            $uri = substr($uri, strlen($this->token));
        }

        // when there's no match, just return null if strict mode is given
        elseif ($strict) {
            return null;
        }

        return [$uri, $params];
    }

    public function getToken(): string
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->token;
    }
}
