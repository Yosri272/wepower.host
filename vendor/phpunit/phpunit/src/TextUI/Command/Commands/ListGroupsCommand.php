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
use function sort;
use function sprintf;
use function str_starts_with;
use PHPUnit\Framework\TestSuite;
use PHPUnit\TextUI\Configuration\Registry;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ListGroupsCommand implements Command
{
    private readonly TestSuite $suite;

    public function __construct(TestSuite $suite)
    {
        $this->suite = $suite;
=======
use const PHP_EOL;
use function count;
use function ksort;
use function sprintf;
use function str_starts_with;
use PHPUnit\Framework\TestCase;
use PHPUnit\Runner\PhptTestCase;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final readonly class ListGroupsCommand implements Command
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
        $buffer .= 'Available test group(s):' . PHP_EOL;

        $groups = $this->suite->groups();
        sort($groups);

        foreach ($groups as $group) {
            if (str_starts_with($group, '__phpunit_')) {
=======
        /** @var array<non-empty-string, positive-int> $groups */
        $groups = [];

        foreach ($this->tests as $test) {
            if ($test instanceof PhptTestCase) {
                if (!isset($groups['default'])) {
                    $groups['default'] = 1;
                } else {
                    $groups['default']++;
                }

                continue;
            }

            foreach ($test->groups() as $group) {
                if (!isset($groups[$group])) {
                    $groups[$group] = 1;
                } else {
                    $groups[$group]++;
                }
            }
        }

        ksort($groups);

        $buffer = sprintf(
            'Available test group%s:' . PHP_EOL,
            count($groups) > 1 ? 's' : '',
        );

        foreach ($groups as $group => $numberOfTests) {
            if (str_starts_with((string) $group, '__phpunit_')) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                continue;
            }

            $buffer .= sprintf(
<<<<<<< HEAD
                ' - %s' . PHP_EOL,
                $group,
=======
                ' - %s (%d test%s)' . PHP_EOL,
                (string) $group,
                $numberOfTests,
                $numberOfTests > 1 ? 's' : '',
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
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
            $buffer .= 'The --filter and --list-groups options cannot be combined, --filter is ignored' . PHP_EOL;
        }

        if ($configuration->hasGroups()) {
            $buffer .= 'The --group and --list-groups options cannot be combined, --group is ignored' . PHP_EOL;
        }

        if ($configuration->hasExcludeGroups()) {
            $buffer .= 'The --exclude-group and --list-groups options cannot be combined, --exclude-group is ignored' . PHP_EOL;
        }

        if ($configuration->includeTestSuite() !== '') {
            $buffer .= 'The --testsuite and --list-groups options cannot be combined, --exclude-group is ignored' . PHP_EOL;
        }

        if (!empty($buffer)) {
            $buffer .= PHP_EOL;
        }

        return $buffer;
    }
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
}
