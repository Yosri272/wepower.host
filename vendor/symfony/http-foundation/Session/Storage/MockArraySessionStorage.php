<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpFoundation\Session\Storage;

use Symfony\Component\HttpFoundation\Session\SessionBagInterface;

/**
 * MockArraySessionStorage mocks the session for unit tests.
 *
 * No PHP session is actually started since a session can be initialized
 * and shutdown only once per PHP execution cycle.
 *
 * When doing functional testing, you should use MockFileSessionStorage instead.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Bulat Shakirzyanov <mallluhuct@gmail.com>
 * @author Drak <drak@zikula.org>
 */
class MockArraySessionStorage implements SessionStorageInterface
{
<<<<<<< HEAD
    /**
     * @var string
     */
    protected $id = '';

    /**
     * @var string
     */
    protected $name;

    /**
     * @var bool
     */
    protected $started = false;

    /**
     * @var bool
     */
    protected $closed = false;

    /**
     * @var array
     */
    protected $data = [];

    /**
     * @var MetadataBag
     */
    protected $metadataBag;

    /**
     * @var array|SessionBagInterface[]
     */
    protected $bags = [];

    public function __construct(string $name = 'MOCKSESSID', ?MetadataBag $metaBag = null)
    {
        $this->name = $name;
        $this->setMetadataBag($metaBag);
    }

    /**
     * @return void
     */
    public function setSessionData(array $array)
=======
    protected string $id = '';
    protected bool $started = false;
    protected bool $closed = false;
    protected array $data = [];
    protected MetadataBag $metadataBag;

    /**
     * @var SessionBagInterface[]
     */
    protected array $bags = [];

    public function __construct(
        protected string $name = 'MOCKSESSID',
        ?MetadataBag $metaBag = null,
    ) {
        $this->setMetadataBag($metaBag);
    }

    public function setSessionData(array $array): void
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $this->data = $array;
    }

    public function start(): bool
    {
        if ($this->started) {
            return true;
        }

<<<<<<< HEAD
        if (empty($this->id)) {
=======
        if (!$this->id) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $this->id = $this->generateId();
        }

        $this->loadSession();

        return true;
    }

    public function regenerate(bool $destroy = false, ?int $lifetime = null): bool
    {
        if (!$this->started) {
            $this->start();
        }

        $this->metadataBag->stampNew($lifetime);
        $this->id = $this->generateId();

        return true;
    }

    public function getId(): string
    {
        return $this->id;
    }

<<<<<<< HEAD
    /**
     * @return void
     */
    public function setId(string $id)
=======
    public function setId(string $id): void
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        if ($this->started) {
            throw new \LogicException('Cannot set session ID after the session has started.');
        }

        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

<<<<<<< HEAD
    /**
     * @return void
     */
    public function setName(string $name)
=======
    public function setName(string $name): void
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $this->name = $name;
    }

<<<<<<< HEAD
    /**
     * @return void
     */
    public function save()
=======
    public function save(): void
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        if (!$this->started || $this->closed) {
            throw new \RuntimeException('Trying to save a session that was not started yet or was already closed.');
        }
        // nothing to do since we don't persist the session data
        $this->closed = false;
        $this->started = false;
    }

<<<<<<< HEAD
    /**
     * @return void
     */
    public function clear()
=======
    public function clear(): void
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        // clear out the bags
        foreach ($this->bags as $bag) {
            $bag->clear();
        }

        // clear out the session
        $this->data = [];

        // reconnect the bags to the session
        $this->loadSession();
    }

<<<<<<< HEAD
    /**
     * @return void
     */
    public function registerBag(SessionBagInterface $bag)
=======
    public function registerBag(SessionBagInterface $bag): void
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $this->bags[$bag->getName()] = $bag;
    }

    public function getBag(string $name): SessionBagInterface
    {
        if (!isset($this->bags[$name])) {
<<<<<<< HEAD
            throw new \InvalidArgumentException(sprintf('The SessionBagInterface "%s" is not registered.', $name));
=======
            throw new \InvalidArgumentException(\sprintf('The SessionBagInterface "%s" is not registered.', $name));
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        }

        if (!$this->started) {
            $this->start();
        }

        return $this->bags[$name];
    }

    public function isStarted(): bool
    {
        return $this->started;
    }

<<<<<<< HEAD
    /**
     * @return void
     */
    public function setMetadataBag(?MetadataBag $bag = null)
    {
        if (1 > \func_num_args()) {
            trigger_deprecation('symfony/http-foundation', '6.2', 'Calling "%s()" without any arguments is deprecated, pass null explicitly instead.', __METHOD__);
        }
=======
    public function setMetadataBag(?MetadataBag $bag): void
    {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        $this->metadataBag = $bag ?? new MetadataBag();
    }

    /**
     * Gets the MetadataBag.
     */
    public function getMetadataBag(): MetadataBag
    {
        return $this->metadataBag;
    }

    /**
     * Generates a session ID.
     *
     * This doesn't need to be particularly cryptographically secure since this is just
     * a mock.
     */
    protected function generateId(): string
    {
<<<<<<< HEAD
        return hash('sha256', uniqid('ss_mock_', true));
    }

    /**
     * @return void
     */
    protected function loadSession()
=======
        return bin2hex(random_bytes(16));
    }

    protected function loadSession(): void
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $bags = array_merge($this->bags, [$this->metadataBag]);

        foreach ($bags as $bag) {
            $key = $bag->getStorageKey();
            $this->data[$key] ??= [];
            $bag->initialize($this->data[$key]);
        }

        $this->started = true;
        $this->closed = false;
    }
}
