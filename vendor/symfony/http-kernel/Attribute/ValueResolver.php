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

use Symfony\Component\HttpKernel\Controller\ValueResolverInterface;

<<<<<<< HEAD
=======
/**
 * Defines which value resolver should be used for a given parameter.
 */
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
#[\Attribute(\Attribute::TARGET_PARAMETER | \Attribute::IS_REPEATABLE)]
class ValueResolver
{
    /**
<<<<<<< HEAD
     * @param class-string<ValueResolverInterface>|string $resolver
=======
     * @param class-string<ValueResolverInterface>|string $resolver The class name of the resolver to use
     * @param bool                                        $disabled Whether this value resolver is disabled; this allows to enable a value resolver globally while disabling it in specific cases
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function __construct(
        public string $resolver,
        public bool $disabled = false,
    ) {
    }
}
