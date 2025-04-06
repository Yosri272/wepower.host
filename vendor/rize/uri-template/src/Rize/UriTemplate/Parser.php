<?php

namespace Rize\UriTemplate;

<<<<<<< HEAD
use Rize\UriTemplate\Node;
use Rize\UriTemplate\Node\Expression;
use Rize\UriTemplate\Operator;
=======
use Rize\UriTemplate\Node\Abstraction;
use Rize\UriTemplate\Node\Expression;
use Rize\UriTemplate\Node\Variable;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use Rize\UriTemplate\Operator\UnNamed;

class Parser
{
<<<<<<< HEAD
    const REGEX_VARNAME = '(?:[A-z0-9_\.]|%[0-9a-fA-F]{2})';

    /**
     * Parses URI Template and returns nodes
     *
     * @param string $template
     * @return Node\Abstraction[]
     */
    public function parse($template)
    {
        $parts   = preg_split('#(\{[^\}]+\})#', $template, -1, PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY);
        $nodes   = array();

        foreach($parts as $part) {
=======
    private const REGEX_VARNAME = '[A-z0-9.]|%[0-9a-fA-F]{2}';

    /**
     * Parses URI Template and returns nodes.
     *
     * @return Node\Abstraction[]
     */
    public function parse(string $template): array
    {
        $parts = preg_split('#(\{[^}]+})#', $template, -1, PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY);
        $nodes = [];

        foreach ($parts as $part) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $node = $this->createNode($part);

            // if current node has dot separator that requires a forward lookup
            // for the previous node iff previous node's operator is UnNamed
            if ($node instanceof Expression && $node->getOperator()->id === '.') {
<<<<<<< HEAD
                if (sizeof($nodes) > 0) {
                    $previousNode = $nodes[sizeof($nodes) - 1];
=======
                if (count($nodes) > 0) {
                    $previousNode = $nodes[count($nodes) - 1];
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                    if ($previousNode instanceof Expression && $previousNode->getOperator() instanceof UnNamed) {
                        $previousNode->setForwardLookupSeparator($node->getOperator()->id);
                    }
                }
            }

            $nodes[] = $node;
        }

        return $nodes;
    }

<<<<<<< HEAD
    /**
     * @param string $token
     * @return Node\Abstraction
     */
    protected function createNode($token)
=======
    protected function createNode(string $token): Abstraction
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        // literal string
        if ($token[0] !== '{') {
            $node = $this->createLiteralNode($token);
        } else {
            // remove `{}` from expression and parse it
            $node = $this->parseExpression(substr($token, 1, -1));
        }

        return $node;
    }

<<<<<<< HEAD
    protected function parseExpression($expression)
=======
    protected function parseExpression(string $expression): Expression
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $token  = $expression;
        $prefix = $token[0];

        // not a valid operator?
        if (!Operator\Abstraction::isValid($prefix)) {
<<<<<<< HEAD

            // not valid chars?
            if (!preg_match('#'.self::REGEX_VARNAME.'#', $token)) {
                throw new \Exception("Invalid operator [$prefix] found at {$token}");
=======
            // not valid chars?
            if (!preg_match('#' . self::REGEX_VARNAME . '#', $token)) {
                throw new \InvalidArgumentException("Invalid operator [{$prefix}] found at {$token}");
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            }

            // default operator
            $prefix = null;
        }

        // remove operator prefix if exists e.g. '?'
        if ($prefix) {
            $token = substr($token, 1);
        }

        // parse variables
<<<<<<< HEAD
        $vars = array();
        foreach(explode(',', $token) as $var) {
=======
        $vars = [];
        foreach (explode(',', $token) as $var) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $vars[] = $this->parseVariable($var);
        }

        return $this->createExpressionNode(
            $token,
            $this->createOperatorNode($prefix),
<<<<<<< HEAD
            $vars
        );
    }

    protected function parseVariable($var)
=======
            $vars,
        );
    }

    protected function parseVariable(string $var): Variable
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $var      = trim($var);
        $val      = null;
        $modifier = null;

        // check for prefix (:) / explode (*) / array (%) modifier
<<<<<<< HEAD
        if (strpos($var, ':') !== false) {
            $modifier = ':';
            list($varname, $val) = explode(':', $var);

            // error checking
            if (!is_numeric($val)) {
                throw new \Exception("Value for `:` modifier must be numeric value [$varname:$val]");
            }
        }

        switch($last = substr($var, -1)) {
            case '*':
            case '%':

                // there can be only 1 modifier per var
                if ($modifier) {
                    throw new \Exception("Multiple modifiers per variable are not allowed [$var]");
                }

                $modifier = $last;
                $var      = substr($var, 0, -1);
=======
        if (str_contains($var, ':')) {
            $modifier = ':';
            [$varname, $val] = explode(':', $var);

            // error checking
            if (!is_numeric($val)) {
                throw new \InvalidArgumentException("Value for `:` modifier must be numeric value [{$varname}:{$val}]");
            }
        }

        switch ($last = substr($var, -1)) {
            case '*':
            case '%':
                // there can be only 1 modifier per var
                if ($modifier) {
                    throw new \InvalidArgumentException("Multiple modifiers per variable are not allowed [{$var}]");
                }

                $modifier = $last;
                $var = substr($var, 0, -1);

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                break;
        }

        return $this->createVariableNode(
            $var,
<<<<<<< HEAD
            array(
                'modifier' => $modifier,
                'value'    => $val,
            )
        );
    }

    protected function createVariableNode($token, $options = array())
    {
        return new Node\Variable($token, $options);
    }

    protected function createExpressionNode($token, Operator\Abstraction $operator = null, array $vars = array())
    {
        return new Node\Expression($token, $operator, $vars);
    }

    protected function createLiteralNode($token)
=======
            ['modifier' => $modifier, 'value' => $val],
        );
    }

    protected function createVariableNode($token, $options = []): Variable
    {
        return new Variable($token, $options);
    }

    protected function createExpressionNode($token, ?Operator\Abstraction $operator = null, array $vars = []): Expression
    {
        return new Expression($token, $operator, $vars);
    }

    protected function createLiteralNode(string $token): Node\Literal
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return new Node\Literal($token);
    }

<<<<<<< HEAD
    protected function createOperatorNode($token)
=======
    protected function createOperatorNode($token): Operator\Abstraction
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return Operator\Abstraction::createById($token);
    }
}
