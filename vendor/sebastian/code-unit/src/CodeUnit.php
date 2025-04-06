<?php declare(strict_types=1);
/*
 * This file is part of sebastian/code-unit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\CodeUnit;

<<<<<<< HEAD
=======
use function assert;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use function count;
use function file;
use function file_exists;
use function is_readable;
use function range;
use function sprintf;
use ReflectionClass;
use ReflectionFunction;
use ReflectionMethod;

/**
<<<<<<< HEAD
 * @psalm-immutable
 */
abstract class CodeUnit
{
    private readonly string $name;
    private readonly string $sourceFileName;

    /**
     * @psalm-var list<int>
     */
    private readonly array $sourceLines;

    /**
     * @psalm-param class-string $className
=======
 * @immutable
 */
abstract readonly class CodeUnit
{
    /**
     * @var non-empty-string
     */
    private string $name;

    /**
     * @var non-empty-string
     */
    private string $sourceFileName;

    /**
     * @var list<int>
     */
    private array $sourceLines;

    /**
     * @param class-string $className
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     *
     * @throws InvalidCodeUnitException
     * @throws ReflectionException
     */
    public static function forClass(string $className): ClassUnit
    {
        self::ensureUserDefinedClass($className);

<<<<<<< HEAD
        $reflector = self::reflectorForClass($className);

        return new ClassUnit(
            $className,
            $reflector->getFileName(),
            range(
                $reflector->getStartLine(),
                $reflector->getEndLine()
            )
=======
        $reflector = new ReflectionClass($className);

        return new ClassUnit(
            $className,
            // @phpstan-ignore argument.type
            $reflector->getFileName(),
            range(
                // @phpstan-ignore argument.type
                $reflector->getStartLine(),
                // @phpstan-ignore argument.type
                $reflector->getEndLine(),
            ),
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        );
    }

    /**
<<<<<<< HEAD
     * @psalm-param class-string $className
=======
     * @param class-string $className
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     *
     * @throws InvalidCodeUnitException
     * @throws ReflectionException
     */
    public static function forClassMethod(string $className, string $methodName): ClassMethodUnit
    {
        self::ensureUserDefinedClass($className);

        $reflector = self::reflectorForClassMethod($className, $methodName);

        return new ClassMethodUnit(
            $className . '::' . $methodName,
<<<<<<< HEAD
            $reflector->getFileName(),
            range(
                $reflector->getStartLine(),
                $reflector->getEndLine()
            )
=======
            // @phpstan-ignore argument.type
            $reflector->getFileName(),
            range(
                // @phpstan-ignore argument.type
                $reflector->getStartLine(),
                // @phpstan-ignore argument.type
                $reflector->getEndLine(),
            ),
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        );
    }

    /**
<<<<<<< HEAD
=======
     * @param non-empty-string $path
     *
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * @throws InvalidCodeUnitException
     */
    public static function forFileWithAbsolutePath(string $path): FileUnit
    {
        self::ensureFileExistsAndIsReadable($path);

<<<<<<< HEAD
=======
        $lines = file($path);

        assert($lines !== false);

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        return new FileUnit(
            $path,
            $path,
            range(
                1,
<<<<<<< HEAD
                count(file($path))
            )
=======
                count($lines),
            ),
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        );
    }

    /**
<<<<<<< HEAD
     * @psalm-param class-string $interfaceName
=======
     * @param class-string $interfaceName
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     *
     * @throws InvalidCodeUnitException
     * @throws ReflectionException
     */
    public static function forInterface(string $interfaceName): InterfaceUnit
    {
        self::ensureUserDefinedInterface($interfaceName);

<<<<<<< HEAD
        $reflector = self::reflectorForClass($interfaceName);

        return new InterfaceUnit(
            $interfaceName,
            $reflector->getFileName(),
            range(
                $reflector->getStartLine(),
                $reflector->getEndLine()
            )
=======
        $reflector = new ReflectionClass($interfaceName);

        return new InterfaceUnit(
            $interfaceName,
            // @phpstan-ignore argument.type
            $reflector->getFileName(),
            range(
                // @phpstan-ignore argument.type
                $reflector->getStartLine(),
                // @phpstan-ignore argument.type
                $reflector->getEndLine(),
            ),
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        );
    }

    /**
<<<<<<< HEAD
     * @psalm-param class-string $interfaceName
=======
     * @param class-string $interfaceName
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     *
     * @throws InvalidCodeUnitException
     * @throws ReflectionException
     */
    public static function forInterfaceMethod(string $interfaceName, string $methodName): InterfaceMethodUnit
    {
        self::ensureUserDefinedInterface($interfaceName);

        $reflector = self::reflectorForClassMethod($interfaceName, $methodName);

        return new InterfaceMethodUnit(
            $interfaceName . '::' . $methodName,
<<<<<<< HEAD
            $reflector->getFileName(),
            range(
                $reflector->getStartLine(),
                $reflector->getEndLine()
            )
=======
            // @phpstan-ignore argument.type
            $reflector->getFileName(),
            range(
                // @phpstan-ignore argument.type
                $reflector->getStartLine(),
                // @phpstan-ignore argument.type
                $reflector->getEndLine(),
            ),
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        );
    }

    /**
<<<<<<< HEAD
     * @psalm-param class-string $traitName
=======
     * @param class-string $traitName
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     *
     * @throws InvalidCodeUnitException
     * @throws ReflectionException
     */
    public static function forTrait(string $traitName): TraitUnit
    {
        self::ensureUserDefinedTrait($traitName);

<<<<<<< HEAD
        $reflector = self::reflectorForClass($traitName);

        return new TraitUnit(
            $traitName,
            $reflector->getFileName(),
            range(
                $reflector->getStartLine(),
                $reflector->getEndLine()
            )
=======
        $reflector = new ReflectionClass($traitName);

        return new TraitUnit(
            $traitName,
            // @phpstan-ignore argument.type
            $reflector->getFileName(),
            range(
                // @phpstan-ignore argument.type
                $reflector->getStartLine(),
                // @phpstan-ignore argument.type
                $reflector->getEndLine(),
            ),
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        );
    }

    /**
<<<<<<< HEAD
     * @psalm-param class-string $traitName
=======
     * @param class-string $traitName
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     *
     * @throws InvalidCodeUnitException
     * @throws ReflectionException
     */
    public static function forTraitMethod(string $traitName, string $methodName): TraitMethodUnit
    {
        self::ensureUserDefinedTrait($traitName);

        $reflector = self::reflectorForClassMethod($traitName, $methodName);

        return new TraitMethodUnit(
            $traitName . '::' . $methodName,
<<<<<<< HEAD
            $reflector->getFileName(),
            range(
                $reflector->getStartLine(),
                $reflector->getEndLine()
            )
=======
            // @phpstan-ignore argument.type
            $reflector->getFileName(),
            range(
                // @phpstan-ignore argument.type
                $reflector->getStartLine(),
                // @phpstan-ignore argument.type
                $reflector->getEndLine(),
            ),
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        );
    }

    /**
<<<<<<< HEAD
     * @psalm-param callable-string $functionName
=======
     * @param callable-string $functionName
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     *
     * @throws InvalidCodeUnitException
     * @throws ReflectionException
     */
    public static function forFunction(string $functionName): FunctionUnit
    {
        $reflector = self::reflectorForFunction($functionName);

        if (!$reflector->isUserDefined()) {
            throw new InvalidCodeUnitException(
                sprintf(
                    '"%s" is not a user-defined function',
<<<<<<< HEAD
                    $functionName
                )
=======
                    $functionName,
                ),
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            );
        }

        return new FunctionUnit(
<<<<<<< HEAD
            $functionName,
            $reflector->getFileName(),
            range(
                $reflector->getStartLine(),
                $reflector->getEndLine()
            )
=======
            // @phpstan-ignore argument.type
            $functionName,
            // @phpstan-ignore argument.type
            $reflector->getFileName(),
            range(
                // @phpstan-ignore argument.type
                $reflector->getStartLine(),
                // @phpstan-ignore argument.type
                $reflector->getEndLine(),
            ),
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        );
    }

    /**
<<<<<<< HEAD
     * @psalm-param list<int> $sourceLines
=======
     * @param non-empty-string $name
     * @param non-empty-string $sourceFileName
     * @param list<int>        $sourceLines
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    private function __construct(string $name, string $sourceFileName, array $sourceLines)
    {
        $this->name           = $name;
        $this->sourceFileName = $sourceFileName;
        $this->sourceLines    = $sourceLines;
    }

<<<<<<< HEAD
=======
    /**
     * @return non-empty-string
     */
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function name(): string
    {
        return $this->name;
    }

<<<<<<< HEAD
=======
    /**
     * @return non-empty-string
     */
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function sourceFileName(): string
    {
        return $this->sourceFileName;
    }

    /**
<<<<<<< HEAD
     * @psalm-return list<int>
=======
     * @return list<int>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function sourceLines(): array
    {
        return $this->sourceLines;
    }

<<<<<<< HEAD
=======
    /**
     * @phpstan-assert-if-true ClassUnit $this
     */
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function isClass(): bool
    {
        return false;
    }

<<<<<<< HEAD
=======
    /**
     * @phpstan-assert-if-true ClassMethodUnit $this
     */
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function isClassMethod(): bool
    {
        return false;
    }

<<<<<<< HEAD
=======
    /**
     * @phpstan-assert-if-true InterfaceUnit $this
     */
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function isInterface(): bool
    {
        return false;
    }

<<<<<<< HEAD
=======
    /**
     * @phpstan-assert-if-true InterfaceMethodUnit $this
     */
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function isInterfaceMethod(): bool
    {
        return false;
    }

<<<<<<< HEAD
=======
    /**
     * @phpstan-assert-if-true TraitUnit $this
     */
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function isTrait(): bool
    {
        return false;
    }

<<<<<<< HEAD
=======
    /**
     * @phpstan-assert-if-true TraitMethodUnit $this
     */
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function isTraitMethod(): bool
    {
        return false;
    }

<<<<<<< HEAD
=======
    /**
     * @phpstan-assert-if-true FunctionUnit $this
     */
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function isFunction(): bool
    {
        return false;
    }

<<<<<<< HEAD
=======
    /**
     * @phpstan-assert-if-true FileUnit $this
     */
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function isFile(): bool
    {
        return false;
    }

    /**
<<<<<<< HEAD
=======
     * @param non-empty-string $path
     *
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * @throws InvalidCodeUnitException
     */
    private static function ensureFileExistsAndIsReadable(string $path): void
    {
        if (!(file_exists($path) && is_readable($path))) {
            throw new InvalidCodeUnitException(
                sprintf(
                    'File "%s" does not exist or is not readable',
<<<<<<< HEAD
                    $path
                )
=======
                    $path,
                ),
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            );
        }
    }

    /**
<<<<<<< HEAD
     * @psalm-param class-string $className
=======
     * @param class-string $className
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     *
     * @throws InvalidCodeUnitException
     */
    private static function ensureUserDefinedClass(string $className): void
    {
        try {
            $reflector = new ReflectionClass($className);

            if ($reflector->isInterface()) {
                throw new InvalidCodeUnitException(
                    sprintf(
                        '"%s" is an interface and not a class',
<<<<<<< HEAD
                        $className
                    )
=======
                        $className,
                    ),
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                );
            }

            if ($reflector->isTrait()) {
                throw new InvalidCodeUnitException(
                    sprintf(
                        '"%s" is a trait and not a class',
<<<<<<< HEAD
                        $className
                    )
=======
                        $className,
                    ),
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                );
            }

            if (!$reflector->isUserDefined()) {
                throw new InvalidCodeUnitException(
                    sprintf(
                        '"%s" is not a user-defined class',
<<<<<<< HEAD
                        $className
                    )
=======
                        $className,
                    ),
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                );
            }
            // @codeCoverageIgnoreStart
        } catch (\ReflectionException $e) {
            throw new ReflectionException(
                $e->getMessage(),
                $e->getCode(),
<<<<<<< HEAD
                $e
=======
                $e,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            );
        }
        // @codeCoverageIgnoreEnd
    }

    /**
<<<<<<< HEAD
     * @psalm-param class-string $interfaceName
=======
     * @param class-string $interfaceName
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     *
     * @throws InvalidCodeUnitException
     */
    private static function ensureUserDefinedInterface(string $interfaceName): void
    {
        try {
            $reflector = new ReflectionClass($interfaceName);

            if (!$reflector->isInterface()) {
                throw new InvalidCodeUnitException(
                    sprintf(
                        '"%s" is not an interface',
<<<<<<< HEAD
                        $interfaceName
                    )
=======
                        $interfaceName,
                    ),
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                );
            }

            if (!$reflector->isUserDefined()) {
                throw new InvalidCodeUnitException(
                    sprintf(
                        '"%s" is not a user-defined interface',
<<<<<<< HEAD
                        $interfaceName
                    )
=======
                        $interfaceName,
                    ),
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                );
            }
            // @codeCoverageIgnoreStart
        } catch (\ReflectionException $e) {
            throw new ReflectionException(
                $e->getMessage(),
                $e->getCode(),
<<<<<<< HEAD
                $e
=======
                $e,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            );
        }
        // @codeCoverageIgnoreEnd
    }

    /**
<<<<<<< HEAD
     * @psalm-param class-string $traitName
=======
     * @param class-string $traitName
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     *
     * @throws InvalidCodeUnitException
     */
    private static function ensureUserDefinedTrait(string $traitName): void
    {
        try {
            $reflector = new ReflectionClass($traitName);

            if (!$reflector->isTrait()) {
                throw new InvalidCodeUnitException(
                    sprintf(
                        '"%s" is not a trait',
<<<<<<< HEAD
                        $traitName
                    )
=======
                        $traitName,
                    ),
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                );
            }

            // @codeCoverageIgnoreStart
            if (!$reflector->isUserDefined()) {
                throw new InvalidCodeUnitException(
                    sprintf(
                        '"%s" is not a user-defined trait',
<<<<<<< HEAD
                        $traitName
                    )
=======
                        $traitName,
                    ),
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                );
            }
        } catch (\ReflectionException $e) {
            throw new ReflectionException(
                $e->getMessage(),
                $e->getCode(),
<<<<<<< HEAD
                $e
=======
                $e,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            );
        }
        // @codeCoverageIgnoreEnd
    }

    /**
<<<<<<< HEAD
     * @psalm-param class-string $className
     *
     * @throws ReflectionException
     */
    private static function reflectorForClass(string $className): ReflectionClass
    {
        try {
            return new ReflectionClass($className);
            // @codeCoverageIgnoreStart
        } catch (\ReflectionException $e) {
            throw new ReflectionException(
                $e->getMessage(),
                $e->getCode(),
                $e
            );
        }
        // @codeCoverageIgnoreEnd
    }

    /**
     * @psalm-param class-string $className
=======
     * @param class-string $className
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     *
     * @throws ReflectionException
     */
    private static function reflectorForClassMethod(string $className, string $methodName): ReflectionMethod
    {
        try {
            return new ReflectionMethod($className, $methodName);
            // @codeCoverageIgnoreStart
        } catch (\ReflectionException $e) {
            throw new ReflectionException(
                $e->getMessage(),
                $e->getCode(),
<<<<<<< HEAD
                $e
=======
                $e,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            );
        }
        // @codeCoverageIgnoreEnd
    }

    /**
<<<<<<< HEAD
     * @psalm-param callable-string $functionName
=======
     * @param callable-string $functionName
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     *
     * @throws ReflectionException
     */
    private static function reflectorForFunction(string $functionName): ReflectionFunction
    {
        try {
            return new ReflectionFunction($functionName);
            // @codeCoverageIgnoreStart
        } catch (\ReflectionException $e) {
            throw new ReflectionException(
                $e->getMessage(),
                $e->getCode(),
<<<<<<< HEAD
                $e
=======
                $e,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            );
        }
        // @codeCoverageIgnoreEnd
    }
}
