<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpKernel\Attribute;

<<<<<<< HEAD
use Symfony\Component\HttpKernel\Controller\ArgumentResolver\QueryParameterValueResolver;
=======
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Controller\ArgumentResolver\QueryParameterValueResolver;
use Symfony\Component\HttpKernel\Controller\ValueResolverInterface;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

/**
 * Can be used to pass a query parameter to a controller argument.
 *
 * @author Ruud Kamphuis <ruud@ticketswap.com>
<<<<<<< HEAD
=======
 * @author Ionut Enache <i.ovidiuenache@yahoo.com>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
 */
#[\Attribute(\Attribute::TARGET_PARAMETER)]
final class MapQueryParameter extends ValueResolver
{
    /**
<<<<<<< HEAD
     * @see https://php.net/filter.filters.validate for filter, flags and options
     *
     * @param string|null $name The name of the query parameter. If null, the name of the argument in the controller will be used.
=======
     * @see https://php.net/manual/filter.constants for filter, flags and options
     *
     * @param string|null                                         $name     The name of the query parameter; if null, the name of the argument in the controller will be used
     * @param (FILTER_VALIDATE_*)|(FILTER_SANITIZE_*)|null        $filter   The filter to pass to "filter_var()"
     * @param int-mask-of<(FILTER_FLAG_*)|FILTER_NULL_ON_FAILURE> $flags    The flags to pass to "filter_var()"
     * @param array                                               $options  The options to pass to "filter_var()"
     * @param class-string<ValueResolverInterface>|string         $resolver The name of the resolver to use
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function __construct(
        public ?string $name = null,
        public ?int $filter = null,
        public int $flags = 0,
        public array $options = [],
        string $resolver = QueryParameterValueResolver::class,
<<<<<<< HEAD
=======
        public int $validationFailedStatusCode = Response::HTTP_NOT_FOUND,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    ) {
        parent::__construct($resolver);
    }
}
