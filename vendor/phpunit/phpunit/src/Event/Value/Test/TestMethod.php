<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Event\Code;

<<<<<<< HEAD
use function assert;
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use function is_int;
use function sprintf;
use PHPUnit\Event\TestData\TestDataCollection;
use PHPUnit\Metadata\MetadataCollection;

/**
<<<<<<< HEAD
 * @psalm-immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class TestMethod extends Test
{
    /**
     * @psalm-var class-string
     */
    private readonly string $className;

    /**
     * @psalm-var non-empty-string
     */
    private readonly string $methodName;

    /**
     * @psalm-var non-negative-int
     */
    private readonly int $line;
    private readonly TestDox $testDox;
    private readonly MetadataCollection $metadata;
    private readonly TestDataCollection $testData;

    /**
     * @psalm-param class-string $className
     * @psalm-param non-empty-string $methodName
     * @psalm-param non-empty-string $file
     * @psalm-param non-negative-int $line
=======
 * @immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final readonly class TestMethod extends Test
{
    /**
     * @var class-string
     */
    private string $className;

    /**
     * @var non-empty-string
     */
    private string $methodName;

    /**
     * @var non-negative-int
     */
    private int $line;
    private TestDox $testDox;
    private MetadataCollection $metadata;
    private TestDataCollection $testData;

    /**
     * @param class-string     $className
     * @param non-empty-string $methodName
     * @param non-empty-string $file
     * @param non-negative-int $line
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function __construct(string $className, string $methodName, string $file, int $line, TestDox $testDox, MetadataCollection $metadata, TestDataCollection $testData)
    {
        parent::__construct($file);

        $this->className  = $className;
        $this->methodName = $methodName;
        $this->line       = $line;
        $this->testDox    = $testDox;
        $this->metadata   = $metadata;
        $this->testData   = $testData;
    }

    /**
<<<<<<< HEAD
     * @psalm-return class-string
=======
     * @return class-string
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function className(): string
    {
        return $this->className;
    }

    /**
<<<<<<< HEAD
     * @psalm-return non-empty-string
=======
     * @return non-empty-string
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function methodName(): string
    {
        return $this->methodName;
    }

    /**
<<<<<<< HEAD
     * @psalm-return non-negative-int
=======
     * @return non-negative-int
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function line(): int
    {
        return $this->line;
    }

    public function testDox(): TestDox
    {
        return $this->testDox;
    }

    public function metadata(): MetadataCollection
    {
        return $this->metadata;
    }

    public function testData(): TestDataCollection
    {
        return $this->testData;
    }

<<<<<<< HEAD
    /**
     * @psalm-assert-if-true TestMethod $this
     */
    public function isTestMethod(): bool
=======
    public function isTestMethod(): true
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return true;
    }

    /**
<<<<<<< HEAD
     * @psalm-return non-empty-string
=======
     * @return non-empty-string
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function id(): string
    {
        $buffer = $this->className . '::' . $this->methodName;

        if ($this->testData()->hasDataFromDataProvider()) {
            $buffer .= '#' . $this->testData->dataFromDataProvider()->dataSetName();
        }

        return $buffer;
    }

    /**
<<<<<<< HEAD
     * @psalm-return non-empty-string
=======
     * @return non-empty-string
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function nameWithClass(): string
    {
        return $this->className . '::' . $this->name();
    }

    /**
<<<<<<< HEAD
     * @psalm-return non-empty-string
=======
     * @return non-empty-string
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function name(): string
    {
        if (!$this->testData->hasDataFromDataProvider()) {
            return $this->methodName;
        }

        $dataSetName = $this->testData->dataFromDataProvider()->dataSetName();

        if (is_int($dataSetName)) {
            $dataSetName = sprintf(
                ' with data set #%d',
                $dataSetName,
            );
        } else {
            $dataSetName = sprintf(
                ' with data set "%s"',
                $dataSetName,
            );
        }

        return $this->methodName . $dataSetName;
    }
}
