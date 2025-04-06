<?php declare(strict_types=1);
/*
 * This file is part of sebastian/lines-of-code.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\LinesOfCode;

/**
<<<<<<< HEAD
 * @psalm-immutable
 */
final class LinesOfCode
{
    /**
     * @psalm-var non-negative-int
     */
    private readonly int $linesOfCode;

    /**
     * @psalm-var non-negative-int
     */
    private readonly int $commentLinesOfCode;

    /**
     * @psalm-var non-negative-int
     */
    private readonly int $nonCommentLinesOfCode;

    /**
     * @psalm-var non-negative-int
     */
    private readonly int $logicalLinesOfCode;

    /**
     * @psalm-param non-negative-int $linesOfCode
     * @psalm-param non-negative-int $commentLinesOfCode
     * @psalm-param non-negative-int $nonCommentLinesOfCode
     * @psalm-param non-negative-int $logicalLinesOfCode
=======
 * @immutable
 */
final readonly class LinesOfCode
{
    /**
     * @var non-negative-int
     */
    private int $linesOfCode;

    /**
     * @var non-negative-int
     */
    private int $commentLinesOfCode;

    /**
     * @var non-negative-int
     */
    private int $nonCommentLinesOfCode;

    /**
     * @var non-negative-int
     */
    private int $logicalLinesOfCode;

    /**
     * @param non-negative-int $linesOfCode
     * @param non-negative-int $commentLinesOfCode
     * @param non-negative-int $nonCommentLinesOfCode
     * @param non-negative-int $logicalLinesOfCode
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     *
     * @throws IllogicalValuesException
     * @throws NegativeValueException
     */
    public function __construct(int $linesOfCode, int $commentLinesOfCode, int $nonCommentLinesOfCode, int $logicalLinesOfCode)
    {
<<<<<<< HEAD
        /** @psalm-suppress DocblockTypeContradiction */
=======
        /** @phpstan-ignore smaller.alwaysFalse */
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        if ($linesOfCode < 0) {
            throw new NegativeValueException('$linesOfCode must not be negative');
        }

<<<<<<< HEAD
        /** @psalm-suppress DocblockTypeContradiction */
=======
        /** @phpstan-ignore smaller.alwaysFalse */
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        if ($commentLinesOfCode < 0) {
            throw new NegativeValueException('$commentLinesOfCode must not be negative');
        }

<<<<<<< HEAD
        /** @psalm-suppress DocblockTypeContradiction */
=======
        /** @phpstan-ignore smaller.alwaysFalse */
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        if ($nonCommentLinesOfCode < 0) {
            throw new NegativeValueException('$nonCommentLinesOfCode must not be negative');
        }

<<<<<<< HEAD
        /** @psalm-suppress DocblockTypeContradiction */
=======
        /** @phpstan-ignore smaller.alwaysFalse */
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        if ($logicalLinesOfCode < 0) {
            throw new NegativeValueException('$logicalLinesOfCode must not be negative');
        }

        if ($linesOfCode - $commentLinesOfCode !== $nonCommentLinesOfCode) {
            throw new IllogicalValuesException('$linesOfCode !== $commentLinesOfCode + $nonCommentLinesOfCode');
        }

        $this->linesOfCode           = $linesOfCode;
        $this->commentLinesOfCode    = $commentLinesOfCode;
        $this->nonCommentLinesOfCode = $nonCommentLinesOfCode;
        $this->logicalLinesOfCode    = $logicalLinesOfCode;
    }

    /**
<<<<<<< HEAD
     * @psalm-return non-negative-int
=======
     * @return non-negative-int
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function linesOfCode(): int
    {
        return $this->linesOfCode;
    }

    /**
<<<<<<< HEAD
     * @psalm-return non-negative-int
=======
     * @return non-negative-int
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function commentLinesOfCode(): int
    {
        return $this->commentLinesOfCode;
    }

    /**
<<<<<<< HEAD
     * @psalm-return non-negative-int
=======
     * @return non-negative-int
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function nonCommentLinesOfCode(): int
    {
        return $this->nonCommentLinesOfCode;
    }

    /**
<<<<<<< HEAD
     * @psalm-return non-negative-int
=======
     * @return non-negative-int
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function logicalLinesOfCode(): int
    {
        return $this->logicalLinesOfCode;
    }

    public function plus(self $other): self
    {
        return new self(
            $this->linesOfCode() + $other->linesOfCode(),
            $this->commentLinesOfCode() + $other->commentLinesOfCode(),
            $this->nonCommentLinesOfCode() + $other->nonCommentLinesOfCode(),
            $this->logicalLinesOfCode() + $other->logicalLinesOfCode(),
        );
    }
}
