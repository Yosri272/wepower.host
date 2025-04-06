<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\TestRunner\TestResult\Issues;

<<<<<<< HEAD
use PHPUnit\Event\Code\Test;

/**
=======
use function array_keys;
use function count;
use PHPUnit\Event\Code\Test;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Issue
{
    /**
<<<<<<< HEAD
     * @psalm-var non-empty-string
=======
     * @var non-empty-string
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    private readonly string $file;

    /**
<<<<<<< HEAD
     * @psalm-var positive-int
=======
     * @var positive-int
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    private readonly int $line;

    /**
<<<<<<< HEAD
     * @psalm-var non-empty-string
=======
     * @var non-empty-string
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    private readonly string $description;

    /**
<<<<<<< HEAD
     * @psalm-var non-empty-array<non-empty-string, array{test: Test, count: int}>
=======
     * @var non-empty-array<non-empty-string, array{test: Test, count: int}>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    private array $triggeringTests;

    /**
<<<<<<< HEAD
     * @psalm-param non-empty-string $file
     * @psalm-param positive-int $line
     * @psalm-param non-empty-string $description
     */
    public static function from(string $file, int $line, string $description, Test $triggeringTest): self
    {
        return new self($file, $line, $description, $triggeringTest);
    }

    /**
     * @psalm-param non-empty-string $file
     * @psalm-param positive-int $line
     * @psalm-param non-empty-string $description
     */
    private function __construct(string $file, int $line, string $description, Test $triggeringTest)
=======
     * @var ?non-empty-string
     */
    private ?string $stackTrace;

    /**
     * @param non-empty-string $file
     * @param positive-int     $line
     * @param non-empty-string $description
     */
    public static function from(string $file, int $line, string $description, Test $triggeringTest, ?string $stackTrace = null): self
    {
        return new self($file, $line, $description, $triggeringTest, $stackTrace);
    }

    /**
     * @param non-empty-string $file
     * @param positive-int     $line
     * @param non-empty-string $description
     */
    private function __construct(string $file, int $line, string $description, Test $triggeringTest, ?string $stackTrace)
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $this->file        = $file;
        $this->line        = $line;
        $this->description = $description;
<<<<<<< HEAD
=======
        $this->stackTrace  = $stackTrace;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        $this->triggeringTests = [
            $triggeringTest->id() => [
                'test'  => $triggeringTest,
                'count' => 1,
            ],
        ];
    }

    public function triggeredBy(Test $test): void
    {
        if (isset($this->triggeringTests[$test->id()])) {
            $this->triggeringTests[$test->id()]['count']++;

            return;
        }

        $this->triggeringTests[$test->id()] = [
            'test'  => $test,
            'count' => 1,
        ];
    }

    /**
<<<<<<< HEAD
     * @psalm-return non-empty-string
=======
     * @return non-empty-string
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function file(): string
    {
        return $this->file;
    }

    /**
<<<<<<< HEAD
     * @psalm-return positive-int
=======
     * @return positive-int
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function line(): int
    {
        return $this->line;
    }

    /**
<<<<<<< HEAD
     * @psalm-return non-empty-string
=======
     * @return non-empty-string
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function description(): string
    {
        return $this->description;
    }

    /**
<<<<<<< HEAD
     * @psalm-return non-empty-array<non-empty-string, array{test: Test, count: int}>
=======
     * @return non-empty-array<non-empty-string, array{test: Test, count: int}>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function triggeringTests(): array
    {
        return $this->triggeringTests;
    }
<<<<<<< HEAD
=======

    /**
     * @phpstan-assert-if-true !null $this->stackTrace
     */
    public function hasStackTrace(): bool
    {
        return $this->stackTrace !== null;
    }

    /**
     * @return ?non-empty-string
     */
    public function stackTrace(): ?string
    {
        return $this->stackTrace;
    }

    public function triggeredInTest(): bool
    {
        return count($this->triggeringTests) === 1 &&
               $this->file === $this->triggeringTests[array_keys($this->triggeringTests)[0]]['test']->file();
    }
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
}
