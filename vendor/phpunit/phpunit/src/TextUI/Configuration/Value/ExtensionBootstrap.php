<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\TextUI\Configuration;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
<<<<<<< HEAD
 * @psalm-immutable
 */
final class ExtensionBootstrap
{
    /**
     * @psalm-var class-string
     */
    private readonly string $className;

    /**
     * @psalm-var array<string,string>
     */
    private readonly array $parameters;

    /**
     * @psalm-param class-string $className
     * @psalm-param array<string,string> $parameters
=======
 * @immutable
 */
final readonly class ExtensionBootstrap
{
    /**
     * @var non-empty-string
     */
    private string $className;

    /**
     * @var array<string,string>
     */
    private array $parameters;

    /**
     * @param non-empty-string     $className
     * @param array<string,string> $parameters
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function __construct(string $className, array $parameters)
    {
        $this->className  = $className;
        $this->parameters = $parameters;
    }

    /**
<<<<<<< HEAD
     * @psalm-return class-string
=======
     * @return non-empty-string
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function className(): string
    {
        return $this->className;
    }

    /**
<<<<<<< HEAD
     * @psalm-return array<string,string>
=======
     * @return array<string,string>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function parameters(): array
    {
        return $this->parameters;
    }
}
