<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpKernel\Controller\ArgumentResolver;

use Symfony\Component\HttpFoundation\Request;
<<<<<<< HEAD
use Symfony\Component\HttpKernel\Controller\ArgumentValueResolverInterface;
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use Symfony\Component\HttpKernel\Controller\ValueResolverInterface;
use Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata;

/**
 * Yields a variadic argument's values from the request attributes.
 *
 * @author Iltar van der Berg <kjarli@gmail.com>
 */
<<<<<<< HEAD
final class VariadicValueResolver implements ArgumentValueResolverInterface, ValueResolverInterface
{
    /**
     * @deprecated since Symfony 6.2, use resolve() instead
     */
    public function supports(Request $request, ArgumentMetadata $argument): bool
    {
        @trigger_deprecation('symfony/http-kernel', '6.2', 'The "%s()" method is deprecated, use "resolve()" instead.', __METHOD__);

        return $argument->isVariadic() && $request->attributes->has($argument->getName());
    }

=======
final class VariadicValueResolver implements ValueResolverInterface
{
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function resolve(Request $request, ArgumentMetadata $argument): array
    {
        if (!$argument->isVariadic() || !$request->attributes->has($argument->getName())) {
            return [];
        }

        $values = $request->attributes->get($argument->getName());

        if (!\is_array($values)) {
<<<<<<< HEAD
            throw new \InvalidArgumentException(sprintf('The action argument "...$%1$s" is required to be an array, the request attribute "%1$s" contains a type of "%2$s" instead.', $argument->getName(), get_debug_type($values)));
=======
            throw new \InvalidArgumentException(\sprintf('The action argument "...$%1$s" is required to be an array, the request attribute "%1$s" contains a type of "%2$s" instead.', $argument->getName(), get_debug_type($values)));
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        }

        return $values;
    }
}
