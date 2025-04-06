<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpFoundation\Session;

use Symfony\Component\HttpFoundation\Session\Storage\MetadataBag;

/**
 * Interface for the session.
 *
 * @author Drak <drak@zikula.org>
 */
interface SessionInterface
{
    /**
     * Starts the session storage.
     *
     * @throws \RuntimeException if session fails to start
     */
    public function start(): bool;

    /**
     * Returns the session ID.
     */
    public function getId(): string;

    /**
     * Sets the session ID.
<<<<<<< HEAD
     *
     * @return void
     */
    public function setId(string $id);
=======
     */
    public function setId(string $id): void;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    /**
     * Returns the session name.
     */
    public function getName(): string;

    /**
     * Sets the session name.
<<<<<<< HEAD
     *
     * @return void
     */
    public function setName(string $name);
=======
     */
    public function setName(string $name): void;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    /**
     * Invalidates the current session.
     *
     * Clears all session attributes and flashes and regenerates the
     * session and deletes the old session from persistence.
     *
     * @param int|null $lifetime Sets the cookie lifetime for the session cookie. A null value
     *                           will leave the system settings unchanged, 0 sets the cookie
     *                           to expire with browser session. Time is in seconds, and is
     *                           not a Unix timestamp.
     */
    public function invalidate(?int $lifetime = null): bool;

    /**
     * Migrates the current session to a new session id while maintaining all
     * session attributes.
     *
     * @param bool     $destroy  Whether to delete the old session or leave it to garbage collection
     * @param int|null $lifetime Sets the cookie lifetime for the session cookie. A null value
     *                           will leave the system settings unchanged, 0 sets the cookie
     *                           to expire with browser session. Time is in seconds, and is
     *                           not a Unix timestamp.
     */
    public function migrate(bool $destroy = false, ?int $lifetime = null): bool;

    /**
     * Force the session to be saved and closed.
     *
     * This method is generally not required for real sessions as
     * the session will be automatically saved at the end of
     * code execution.
<<<<<<< HEAD
     *
     * @return void
     */
    public function save();
=======
     */
    public function save(): void;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    /**
     * Checks if an attribute is defined.
     */
    public function has(string $name): bool;

    /**
     * Returns an attribute.
     */
    public function get(string $name, mixed $default = null): mixed;

    /**
     * Sets an attribute.
<<<<<<< HEAD
     *
     * @return void
     */
    public function set(string $name, mixed $value);
=======
     */
    public function set(string $name, mixed $value): void;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    /**
     * Returns attributes.
     */
    public function all(): array;

    /**
     * Sets attributes.
<<<<<<< HEAD
     *
     * @return void
     */
    public function replace(array $attributes);
=======
     */
    public function replace(array $attributes): void;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    /**
     * Removes an attribute.
     *
     * @return mixed The removed value or null when it does not exist
     */
    public function remove(string $name): mixed;

    /**
     * Clears all attributes.
<<<<<<< HEAD
     *
     * @return void
     */
    public function clear();
=======
     */
    public function clear(): void;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    /**
     * Checks if the session was started.
     */
    public function isStarted(): bool;

    /**
     * Registers a SessionBagInterface with the session.
<<<<<<< HEAD
     *
     * @return void
     */
    public function registerBag(SessionBagInterface $bag);
=======
     */
    public function registerBag(SessionBagInterface $bag): void;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    /**
     * Gets a bag instance by name.
     */
    public function getBag(string $name): SessionBagInterface;

    /**
     * Gets session meta.
     */
    public function getMetadataBag(): MetadataBag;
}
