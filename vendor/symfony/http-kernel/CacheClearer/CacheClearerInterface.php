<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpKernel\CacheClearer;

/**
 * CacheClearerInterface.
 *
 * @author Dustin Dobervich <ddobervich@gmail.com>
 */
interface CacheClearerInterface
{
    /**
     * Clears any caches necessary.
<<<<<<< HEAD
     *
     * @return void
     */
    public function clear(string $cacheDir);
=======
     */
    public function clear(string $cacheDir): void;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
}
