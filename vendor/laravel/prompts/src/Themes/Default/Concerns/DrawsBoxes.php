<?php

namespace Laravel\Prompts\Themes\Default\Concerns;

use Laravel\Prompts\Prompt;

trait DrawsBoxes
{
    use InteractsWithStrings;

    protected int $minWidth = 60;

    /**
     * Draw a box.
     *
     * @return $this
     */
    protected function box(
        string $title,
        string $body,
        string $footer = '',
        string $color = 'gray',
        string $info = '',
    ): self {
        $this->minWidth = min($this->minWidth, Prompt::terminal()->cols() - 6);

<<<<<<< HEAD
        $bodyLines = collect(explode(PHP_EOL, $body));
        $footerLines = collect(explode(PHP_EOL, $footer))->filter();
        $width = $this->longest(
            $bodyLines
                ->merge($footerLines)
                ->push($title)
                ->toArray()
        );
=======
        $bodyLines = explode(PHP_EOL, $body);
        $footerLines = array_filter(explode(PHP_EOL, $footer));

        $width = $this->longest(array_merge($bodyLines, $footerLines, [$title]));
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        $titleLength = mb_strwidth($this->stripEscapeSequences($title));
        $titleLabel = $titleLength > 0 ? " {$title} " : '';
        $topBorder = str_repeat('─', $width - $titleLength + ($titleLength > 0 ? 0 : 2));

        $this->line("{$this->{$color}(' ┌')}{$titleLabel}{$this->{$color}($topBorder.'┐')}");

<<<<<<< HEAD
        $bodyLines->each(function ($line) use ($width, $color) {
            $this->line("{$this->{$color}(' │')} {$this->pad($line, $width)} {$this->{$color}('│')}");
        });

        if ($footerLines->isNotEmpty()) {
            $this->line($this->{$color}(' ├'.str_repeat('─', $width + 2).'┤'));

            $footerLines->each(function ($line) use ($width, $color) {
                $this->line("{$this->{$color}(' │')} {$this->pad($line, $width)} {$this->{$color}('│')}");
            });
=======
        foreach ($bodyLines as $line) {
            $this->line("{$this->{$color}(' │')} {$this->pad($line, $width)} {$this->{$color}('│')}");
        }

        if (count($footerLines) > 0) {
            $this->line($this->{$color}(' ├'.str_repeat('─', $width + 2).'┤'));

            foreach ($footerLines as $line) {
                $this->line("{$this->{$color}(' │')} {$this->pad($line, $width)} {$this->{$color}('│')}");
            }
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        }

        $this->line($this->{$color}(' └'.str_repeat(
            '─', $info ? ($width - mb_strwidth($this->stripEscapeSequences($info))) : ($width + 2)
        ).($info ? " {$info} " : '').'┘'));

        return $this;
    }
}
