<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Metadata\Parser;

<<<<<<< HEAD
use PHPUnit\Metadata\MetadataCollection;

/**
=======
use function assert;
use function class_exists;
use function method_exists;
use PHPUnit\Metadata\MetadataCollection;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class CachingParser implements Parser
{
    private readonly Parser $reader;
<<<<<<< HEAD
    private array $classCache          = [];
    private array $methodCache         = [];
=======

    /**
     * @var array<class-string, MetadataCollection>
     */
    private array $classCache = [];

    /**
     * @var array<non-empty-string, MetadataCollection>
     */
    private array $methodCache = [];

    /**
     * @var array<non-empty-string, MetadataCollection>
     */
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    private array $classAndMethodCache = [];

    public function __construct(Parser $reader)
    {
        $this->reader = $reader;
    }

    /**
<<<<<<< HEAD
     * @psalm-param class-string $className
     */
    public function forClass(string $className): MetadataCollection
    {
=======
     * @param class-string $className
     */
    public function forClass(string $className): MetadataCollection
    {
        assert(class_exists($className));

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        if (isset($this->classCache[$className])) {
            return $this->classCache[$className];
        }

        $this->classCache[$className] = $this->reader->forClass($className);

        return $this->classCache[$className];
    }

    /**
<<<<<<< HEAD
     * @psalm-param class-string $className
     * @psalm-param non-empty-string $methodName
     */
    public function forMethod(string $className, string $methodName): MetadataCollection
    {
=======
     * @param class-string     $className
     * @param non-empty-string $methodName
     */
    public function forMethod(string $className, string $methodName): MetadataCollection
    {
        assert(class_exists($className));
        assert(method_exists($className, $methodName));

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        $key = $className . '::' . $methodName;

        if (isset($this->methodCache[$key])) {
            return $this->methodCache[$key];
        }

        $this->methodCache[$key] = $this->reader->forMethod($className, $methodName);

        return $this->methodCache[$key];
    }

    /**
<<<<<<< HEAD
     * @psalm-param class-string $className
     * @psalm-param non-empty-string $methodName
=======
     * @param class-string     $className
     * @param non-empty-string $methodName
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function forClassAndMethod(string $className, string $methodName): MetadataCollection
    {
        $key = $className . '::' . $methodName;

        if (isset($this->classAndMethodCache[$key])) {
            return $this->classAndMethodCache[$key];
        }

        $this->classAndMethodCache[$key] = $this->forClass($className)->mergeWith(
            $this->forMethod($className, $methodName),
        );

        return $this->classAndMethodCache[$key];
    }
}
