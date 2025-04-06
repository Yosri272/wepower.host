<?php

namespace Illuminate\Session;

use BadMethodCallException;
use Illuminate\Contracts\Session\Session;
use Symfony\Component\HttpFoundation\Session\SessionBagInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Session\Storage\MetadataBag;

class SymfonySessionDecorator implements SessionInterface
{
    /**
     * The underlying Laravel session store.
     *
<<<<<<< HEAD
     * @var \Illuminate\Session\Store
     */
    protected $store;
=======
     * @var \Illuminate\Contracts\Session\Session
     */
    public readonly Session $store;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    /**
     * Create a new session decorator.
     *
     * @param  \Illuminate\Contracts\Session\Session  $store
     * @return void
     */
    public function __construct(Session $store)
    {
        $this->store = $store;
    }

    /**
     * {@inheritdoc}
     */
    public function start(): bool
    {
        return $this->store->start();
    }

    /**
     * {@inheritdoc}
     */
    public function getId(): string
    {
        return $this->store->getId();
    }

    /**
     * {@inheritdoc}
<<<<<<< HEAD
     *
     * @return void
     */
    public function setId(string $id)
=======
     */
    public function setId(string $id): void
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $this->store->setId($id);
    }

    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return $this->store->getName();
    }

    /**
     * {@inheritdoc}
<<<<<<< HEAD
     *
     * @return void
     */
    public function setName(string $name)
=======
     */
    public function setName(string $name): void
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $this->store->setName($name);
    }

    /**
     * {@inheritdoc}
     */
<<<<<<< HEAD
    public function invalidate(int $lifetime = null): bool
=======
    public function invalidate(?int $lifetime = null): bool
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $this->store->invalidate();

        return true;
    }

    /**
     * {@inheritdoc}
     */
<<<<<<< HEAD
    public function migrate(bool $destroy = false, int $lifetime = null): bool
=======
    public function migrate(bool $destroy = false, ?int $lifetime = null): bool
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $this->store->migrate($destroy);

        return true;
    }

    /**
     * {@inheritdoc}
<<<<<<< HEAD
     *
     * @return void
     */
    public function save()
=======
     */
    public function save(): void
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $this->store->save();
    }

    /**
     * {@inheritdoc}
     */
    public function has(string $name): bool
    {
        return $this->store->has($name);
    }

    /**
     * {@inheritdoc}
     */
    public function get(string $name, mixed $default = null): mixed
    {
        return $this->store->get($name, $default);
    }

    /**
     * {@inheritdoc}
<<<<<<< HEAD
     *
     * @return void
     */
    public function set(string $name, mixed $value)
=======
     */
    public function set(string $name, mixed $value): void
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $this->store->put($name, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function all(): array
    {
        return $this->store->all();
    }

    /**
     * {@inheritdoc}
<<<<<<< HEAD
     *
     * @return void
     */
    public function replace(array $attributes)
=======
     */
    public function replace(array $attributes): void
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $this->store->replace($attributes);
    }

    /**
     * {@inheritdoc}
     */
    public function remove(string $name): mixed
    {
        return $this->store->remove($name);
    }

    /**
     * {@inheritdoc}
<<<<<<< HEAD
     *
     * @return void
     */
    public function clear()
=======
     */
    public function clear(): void
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $this->store->flush();
    }

    /**
     * {@inheritdoc}
     */
    public function isStarted(): bool
    {
        return $this->store->isStarted();
    }

    /**
     * {@inheritdoc}
<<<<<<< HEAD
     *
     * @return void
     */
    public function registerBag(SessionBagInterface $bag)
=======
     */
    public function registerBag(SessionBagInterface $bag): void
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        throw new BadMethodCallException('Method not implemented by Laravel.');
    }

    /**
     * {@inheritdoc}
     */
    public function getBag(string $name): SessionBagInterface
    {
        throw new BadMethodCallException('Method not implemented by Laravel.');
    }

    /**
     * {@inheritdoc}
     */
    public function getMetadataBag(): MetadataBag
    {
        throw new BadMethodCallException('Method not implemented by Laravel.');
    }
}
