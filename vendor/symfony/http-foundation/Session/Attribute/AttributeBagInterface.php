<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpFoundation\Session\Attribute;

use Symfony\Component\HttpFoundation\Session\SessionBagInterface;

/**
 * Attributes store.
 *
 * @author Drak <drak@zikula.org>
 */
interface AttributeBagInterface extends SessionBagInterface
{
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
     *
     * @return array<string, mixed>
     */
    public function all(): array;

<<<<<<< HEAD
    /**
     * @return void
     */
    public function replace(array $attributes);
=======
    public function replace(array $attributes): void;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    /**
     * Removes an attribute.
     *
     * @return mixed The removed value or null when it does not exist
     */
    public function remove(string $name): mixed;
}
