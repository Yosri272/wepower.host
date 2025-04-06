<?php

namespace Rize;

use Rize\UriTemplate\Parser;

/**
<<<<<<< HEAD
 * URI Template
 */
class UriTemplate
{
             /**
              * @var Parser
              */
    protected $parser,
              $parsed = array(),
              $base_uri,
              $params = array();

    public function __construct($base_uri = '', $params = array(), Parser $parser = null)
    {
        $this->base_uri = $base_uri;
        $this->params   = $params;
        $this->parser   = $parser ?: $this->createNodeParser();
    }

    /**
     * Expands URI Template
     *
     * @param string $uri  URI Template
     * @param array  $params        URI Template's parameters
     * @return string
     */
    public function expand($uri, $params = array())
    {
        $params += $this->params;
        $uri     = $this->base_uri.$uri;
        $result  = array();

        // quick check
        if (($start = strpos($uri, '{')) === false) {
=======
 * URI Template.
 */
class UriTemplate
{
    protected Parser $parser;
    protected array $parsed = [];

    public function __construct(protected string $base_uri = '', protected array $params = [], ?Parser $parser = null)
    {
        $this->parser = $parser ?: $this->createNodeParser();
    }

    /**
     * Expands URI Template.
     *
     * @param mixed $params
     */
    public function expand(string $uri, $params = []): string
    {
        $params += $this->params;
        $uri     = $this->base_uri . $uri;
        $result  = [];

        // quick check
        if (!str_contains($uri, '{')) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            return $uri;
        }

        $parser = $this->parser;
        $nodes  = $parser->parse($uri);

<<<<<<< HEAD
        foreach($nodes as $node) {
=======
        foreach ($nodes as $node) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $result[] = $node->expand($parser, $params);
        }

        return implode('', $result);
    }

    /**
<<<<<<< HEAD
     * Extracts variables from URI
     *
     * @param  string $template
     * @param  string $uri
     * @param  bool   $strict  This will perform a full match
     * @return null|array params or null if not match and $strict is true
     */
    public function extract($template, $uri, $strict = false)
    {
        $params = array();
        $nodes  = $this->parser->parse($template);

        # PHP 8.1.0RC4-dev still throws deprecation warning for `strlen`.
        # $uri    = (string) $uri;

        foreach($nodes as $node) {

            // if strict is given, and there's no remaining uri just return null
            if ($strict && !strlen((string) $uri)) {
                return null;
            }

            // uri'll be truncated from the start when a match is found
            $match = $node->match($this->parser, $uri, $params, $strict);

            list($uri, $params) = $match;
        }

        // if there's remaining $uri, matching is failed
        if ($strict && strlen((string) $uri)) {
=======
     * Extracts variables from URI.
     *
     * @return null|array params or null if not match and $strict is true
     */
    public function extract(string $template, string $uri, bool $strict = false): ?array
    {
        $params = [];
        $nodes  = $this->parser->parse($template);

        // PHP 8.1.0RC4-dev still throws deprecation warning for `strlen`.
        // $uri    = (string) $uri;

        foreach ($nodes as $node) {
            // if strict is given, and there's no remaining uri just return null
            if ($strict && (string) $uri === '') {
                return null;
            }

            // URI will be truncated from the start when a match is found
            $match = $node->match($this->parser, $uri, $params, $strict);

            if ($match === null) {
                return null;
            }

            [$uri, $params] = $match;
        }

        // if there's remaining $uri, matching is failed
        if ($strict && (string) $uri !== '') {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            return null;
        }

        return $params;
    }

<<<<<<< HEAD
    public function getParser()
=======
    public function getParser(): Parser
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->parser;
    }

<<<<<<< HEAD
    protected function createNodeParser()
=======
    protected function createNodeParser(): Parser
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        static $parser;

        if ($parser) {
            return $parser;
        }

<<<<<<< HEAD
        return $parser = new Parser;
=======
        return $parser = new Parser();
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }
}
