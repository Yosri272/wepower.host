<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Runner\Filter;

<<<<<<< HEAD
use function array_map;
use function array_push;
use function in_array;
use function spl_object_id;
use PHPUnit\Framework\Test;
use PHPUnit\Framework\TestSuite;
=======
use function array_merge;
use function array_push;
use function in_array;
use PHPUnit\Framework\Test;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\TestSuite;
use PHPUnit\Runner\PhptTestCase;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use RecursiveFilterIterator;
use RecursiveIterator;

/**
<<<<<<< HEAD
=======
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 *
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
abstract class GroupFilterIterator extends RecursiveFilterIterator
{
    /**
<<<<<<< HEAD
     * @psalm-var list<int>
     */
    protected array $groupTests = [];

    /**
     * @psalm-param RecursiveIterator<int, Test> $iterator
     * @psalm-param list<non-empty-string> $groups
=======
     * @var list<non-empty-string>
     */
    private readonly array $groupTests;

    /**
     * @param RecursiveIterator<int, Test> $iterator
     * @param list<non-empty-string>       $groups
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function __construct(RecursiveIterator $iterator, array $groups, TestSuite $suite)
    {
        parent::__construct($iterator);

<<<<<<< HEAD
        foreach ($suite->groupDetails() as $group => $tests) {
            if (in_array((string) $group, $groups, true)) {
                $testHashes = array_map(
                    'spl_object_id',
                    $tests,
                );

                array_push($this->groupTests, ...$testHashes);
            }
        }
=======
        $groupTests = [];

        foreach ($suite->groups() as $group => $tests) {
            if (in_array($group, $groups, true)) {
                $groupTests = array_merge($groupTests, $tests);

                array_push($groupTests, ...$groupTests);
            }
        }

        $this->groupTests = $groupTests;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    public function accept(): bool
    {
        $test = $this->getInnerIterator()->current();

        if ($test instanceof TestSuite) {
            return true;
        }

<<<<<<< HEAD
        return $this->doAccept(spl_object_id($test));
    }

    abstract protected function doAccept(int $id): bool;
=======
        if ($test instanceof TestCase || $test instanceof PhptTestCase) {
            return $this->doAccept($test->valueObjectForEvents()->id(), $this->groupTests);
        }

        return true;
    }

    /**
     * @param non-empty-string       $id
     * @param list<non-empty-string> $groupTests
     */
    abstract protected function doAccept(string $id, array $groupTests): bool;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
}
