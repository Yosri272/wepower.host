<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\TextUI\Command;

<<<<<<< HEAD
use function sprintf;
use function str_replace;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\TestSuite;
use PHPUnit\Runner\PhptTestCase;
use PHPUnit\TextUI\Configuration\Registry;
use RecursiveIteratorIterator;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ListTestsAsTextCommand implements Command
{
    private readonly TestSuite $suite;

    public function __construct(TestSuite $suite)
    {
        $this->suite = $suite;
=======
use const PHP_EOL;
use function count;
use function sprintf;
use function str_replace;
use PHPUnit\Framework\TestCase;
use PHPUnit\Runner\PhptTestCase;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class ListTestsAsTextCommand implements Command
{
    /**
     * @var list<PhptTestCase|TestCase>
     */
    private array $tests;

    /**
     * @param list<PhptTestCase|TestCase> $tests
     */
    public function __construct(array $tests)
    {
        $this->tests = $tests;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function execute(): Result
    {
<<<<<<< HEAD
        $buffer = $this->warnAboutConflictingOptions();

        $buffer .= 'Available test(s):' . PHP_EOL;

        foreach (new RecursiveIteratorIterator($this->suite) as $test) {
=======
        $buffer = sprintf(
            'Available test%s:' . PHP_EOL,
            count($this->tests) > 1 ? 's' : '',
        );

        foreach ($this->tests as $test) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            if ($test instanceof TestCase) {
                $name = sprintf(
                    '%s::%s',
                    $test::class,
                    str_replace(' with data set ', '', $test->nameWithDataSet()),
                );
<<<<<<< HEAD
            } elseif ($test instanceof PhptTestCase) {
                $name = $test->getName();
            } else {
                continue;
=======
            } else {
                $name = $test->getName();
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            }

            $buffer .= sprintf(
                ' - %s' . PHP_EOL,
                $name,
            );
        }

        return Result::from($buffer);
    }
<<<<<<< HEAD

    private function warnAboutConflictingOptions(): string
    {
        $buffer = '';

        $configuration = Registry::get();

        if ($configuration->hasFilter()) {
            $buffer .= 'The --filter and --list-tests options cannot be combined, --filter is ignored' . PHP_EOL;
        }

        if ($configuration->hasGroups()) {
            $buffer .= 'The --group and --list-tests options cannot be combined, --group is ignored' . PHP_EOL;
        }

        if ($configuration->hasExcludeGroups()) {
            $buffer .= 'The --exclude-group and --list-tests options cannot be combined, --exclude-group is ignored' . PHP_EOL;
        }

        if (!empty($buffer)) {
            $buffer .= PHP_EOL;
        }

        return $buffer;
    }
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
}
