<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpKernel\Profiler;

use Symfony\Component\HttpKernel\DataCollector\DataCollectorInterface;

/**
 * Profile.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Profile
{
<<<<<<< HEAD
    private string $token;

=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    /**
     * @var DataCollectorInterface[]
     */
    private array $collectors = [];

    private ?string $ip = null;
    private ?string $method = null;
    private ?string $url = null;
    private ?int $time = null;
    private ?int $statusCode = null;
    private ?self $parent = null;
    private ?string $virtualType = null;

    /**
     * @var Profile[]
     */
    private array $children = [];

<<<<<<< HEAD
    public function __construct(string $token)
    {
        $this->token = $token;
    }

    /**
     * @return void
     */
    public function setToken(string $token)
=======
    public function __construct(
        private string $token,
    ) {
    }

    public function setToken(string $token): void
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $this->token = $token;
    }

    /**
     * Gets the token.
     */
    public function getToken(): string
    {
        return $this->token;
    }

    /**
     * Sets the parent token.
<<<<<<< HEAD
     *
     * @return void
     */
    public function setParent(self $parent)
=======
     */
    public function setParent(self $parent): void
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $this->parent = $parent;
    }

    /**
     * Returns the parent profile.
     */
    public function getParent(): ?self
    {
        return $this->parent;
    }

    /**
     * Returns the parent token.
     */
    public function getParentToken(): ?string
    {
        return $this->parent?->getToken();
    }

    /**
     * Returns the IP.
     */
    public function getIp(): ?string
    {
        return $this->ip;
    }

<<<<<<< HEAD
    /**
     * @return void
     */
    public function setIp(?string $ip)
=======
    public function setIp(?string $ip): void
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $this->ip = $ip;
    }

    /**
     * Returns the request method.
     */
    public function getMethod(): ?string
    {
        return $this->method;
    }

<<<<<<< HEAD
    /**
     * @return void
     */
    public function setMethod(string $method)
=======
    public function setMethod(string $method): void
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $this->method = $method;
    }

    /**
     * Returns the URL.
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

<<<<<<< HEAD
    /**
     * @return void
     */
    public function setUrl(?string $url)
=======
    public function setUrl(?string $url): void
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $this->url = $url;
    }

    public function getTime(): int
    {
        return $this->time ?? 0;
    }

<<<<<<< HEAD
    /**
     * @return void
     */
    public function setTime(int $time)
=======
    public function setTime(int $time): void
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $this->time = $time;
    }

<<<<<<< HEAD
    /**
     * @return void
     */
    public function setStatusCode(int $statusCode)
=======
    public function setStatusCode(int $statusCode): void
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $this->statusCode = $statusCode;
    }

    public function getStatusCode(): ?int
    {
        return $this->statusCode;
    }

    /**
     * @internal
     */
    public function setVirtualType(?string $virtualType): void
    {
        $this->virtualType = $virtualType;
    }

    /**
     * @internal
     */
    public function getVirtualType(): ?string
    {
        return $this->virtualType;
    }

    /**
     * Finds children profilers.
     *
     * @return self[]
     */
    public function getChildren(): array
    {
        return $this->children;
    }

    /**
     * Sets children profiler.
     *
     * @param Profile[] $children
<<<<<<< HEAD
     *
     * @return void
     */
    public function setChildren(array $children)
=======
     */
    public function setChildren(array $children): void
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $this->children = [];
        foreach ($children as $child) {
            $this->addChild($child);
        }
    }

    /**
     * Adds the child token.
<<<<<<< HEAD
     *
     * @return void
     */
    public function addChild(self $child)
=======
     */
    public function addChild(self $child): void
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $this->children[] = $child;
        $child->setParent($this);
    }

    public function getChildByToken(string $token): ?self
    {
        foreach ($this->children as $child) {
            if ($token === $child->getToken()) {
                return $child;
            }
        }

        return null;
    }

    /**
     * Gets a Collector by name.
     *
     * @throws \InvalidArgumentException if the collector does not exist
     */
    public function getCollector(string $name): DataCollectorInterface
    {
        if (!isset($this->collectors[$name])) {
<<<<<<< HEAD
            throw new \InvalidArgumentException(sprintf('Collector "%s" does not exist.', $name));
=======
            throw new \InvalidArgumentException(\sprintf('Collector "%s" does not exist.', $name));
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        }

        return $this->collectors[$name];
    }

    /**
     * Gets the Collectors associated with this profile.
     *
     * @return DataCollectorInterface[]
     */
    public function getCollectors(): array
    {
        return $this->collectors;
    }

    /**
     * Sets the Collectors associated with this profile.
     *
     * @param DataCollectorInterface[] $collectors
<<<<<<< HEAD
     *
     * @return void
     */
    public function setCollectors(array $collectors)
=======
     */
    public function setCollectors(array $collectors): void
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $this->collectors = [];
        foreach ($collectors as $collector) {
            $this->addCollector($collector);
        }
    }

    /**
     * Adds a Collector.
<<<<<<< HEAD
     *
     * @return void
     */
    public function addCollector(DataCollectorInterface $collector)
=======
     */
    public function addCollector(DataCollectorInterface $collector): void
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $this->collectors[$collector->getName()] = $collector;
    }

    public function hasCollector(string $name): bool
    {
        return isset($this->collectors[$name]);
    }

    public function __sleep(): array
    {
        return ['token', 'parent', 'children', 'collectors', 'ip', 'method', 'url', 'time', 'statusCode', 'virtualType'];
    }
}
