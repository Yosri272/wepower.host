<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Mime\Header;

/**
 * A MIME Header.
 *
 * @author Chris Corbyn
 */
interface HeaderInterface
{
    /**
     * Sets the body.
     *
     * The type depends on the Header concrete class.
<<<<<<< HEAD
     *
     * @return void
     */
    public function setBody(mixed $body);
=======
     */
    public function setBody(mixed $body): void;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    /**
     * Gets the body.
     *
     * The return type depends on the Header concrete class.
     */
    public function getBody(): mixed;

<<<<<<< HEAD
    /**
     * @return void
     */
    public function setCharset(string $charset);

    public function getCharset(): ?string;

    /**
     * @return void
     */
    public function setLanguage(string $lang);
=======
    public function setCharset(string $charset): void;

    public function getCharset(): ?string;

    public function setLanguage(string $lang): void;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    public function getLanguage(): ?string;

    public function getName(): string;

<<<<<<< HEAD
    /**
     * @return void
     */
    public function setMaxLineLength(int $lineLength);
=======
    public function setMaxLineLength(int $lineLength): void;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    public function getMaxLineLength(): int;

    /**
     * Gets this Header rendered as a compliant string.
     */
    public function toString(): string;

    /**
     * Gets the header's body, prepared for folding into a final header value.
     *
     * This is not necessarily RFC 2822 compliant since folding white space is
     * not added at this stage (see {@link toString()} for that).
     */
    public function getBodyAsString(): string;
}
