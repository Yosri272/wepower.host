<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Routing\Loader\Configurator;

use Symfony\Component\Routing\RouteCollection;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class RouteConfigurator
{
    use Traits\AddTrait;
    use Traits\HostTrait;
    use Traits\RouteTrait;

<<<<<<< HEAD
    protected $parentConfigurator;

    public function __construct(RouteCollection $collection, RouteCollection $route, string $name = '', ?CollectionConfigurator $parentConfigurator = null, ?array $prefixes = null)
    {
        $this->collection = $collection;
        $this->route = $route;
        $this->name = $name;
        $this->parentConfigurator = $parentConfigurator; // for GC control
=======
    public function __construct(
        RouteCollection $collection,
        RouteCollection $route,
        string $name = '',
        protected ?CollectionConfigurator $parentConfigurator = null, // for GC control
        ?array $prefixes = null,
    ) {
        $this->collection = $collection;
        $this->route = $route;
        $this->name = $name;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        $this->prefixes = $prefixes;
    }

    /**
     * Sets the host to use for all child routes.
     *
     * @param string|array $host the host, or the localized hosts
     *
     * @return $this
     */
    final public function host(string|array $host): static
    {
<<<<<<< HEAD
        $this->addHost($this->route, $host);
=======
        $previousRoutes = clone $this->route;
        $this->addHost($this->route, $host);
        foreach ($previousRoutes as $name => $route) {
            if (!$this->route->get($name)) {
                $this->collection->remove($name);
            }
        }
        $this->collection->addCollection($this->route);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        return $this;
    }
}
