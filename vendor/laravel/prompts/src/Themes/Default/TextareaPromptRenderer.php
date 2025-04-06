<?php

namespace Laravel\Prompts\Themes\Default;

use Laravel\Prompts\TextareaPrompt;
use Laravel\Prompts\Themes\Contracts\Scrolling;

class TextareaPromptRenderer extends Renderer implements Scrolling
{
    use Concerns\DrawsBoxes;
    use Concerns\DrawsScrollbars;

    /**
     * Render the textarea prompt.
     */
    public function __invoke(TextareaPrompt $prompt): string
    {
        $prompt->width = $prompt->terminal()->cols() - 8;

        return match ($prompt->state) {
            'submit' => $this
                ->box(
                    $this->dim($this->truncate($prompt->label, $prompt->width)),
<<<<<<< HEAD
                    collect($prompt->lines())->implode(PHP_EOL),
=======
                    implode(PHP_EOL, $prompt->lines()),
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                ),

            'cancel' => $this
                ->box(
                    $this->truncate($prompt->label, $prompt->width),
<<<<<<< HEAD
                    collect($prompt->lines())->map(fn ($line) => $this->strikethrough($this->dim($line)))->implode(PHP_EOL),
=======
                    implode(PHP_EOL, array_map(fn ($line) => $this->strikethrough($this->dim($line)), $prompt->lines())),
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                    color: 'red',
                )
                ->error($prompt->cancelMessage),

            'error' => $this
                ->box(
                    $this->truncate($prompt->label, $prompt->width),
                    $this->renderText($prompt),
                    color: 'yellow',
                    info: 'Ctrl+D to submit'
                )
                ->warning($this->truncate($prompt->error, $prompt->terminal()->cols() - 5)),

            default => $this
                ->box(
                    $this->cyan($this->truncate($prompt->label, $prompt->width)),
                    $this->renderText($prompt),
                    info: 'Ctrl+D to submit'
                )
                ->when(
                    $prompt->hint,
                    fn () => $this->hint($prompt->hint),
                    fn () => $this->newLine() // Space for errors
                )
        };
    }

    /**
     * Render the text in the prompt.
     */
    protected function renderText(TextareaPrompt $prompt): string
    {
<<<<<<< HEAD
        $visible = collect($prompt->visible());

        while ($visible->count() < $prompt->scroll) {
            $visible->push('');
=======
        $visible = $prompt->visible();

        while (count($visible) < $prompt->scroll) {
            $visible[] = '';
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        }

        $longest = $this->longest($prompt->lines()) + 2;

<<<<<<< HEAD
        return $this->scrollbar(
=======
        return implode(PHP_EOL, $this->scrollbar(
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $visible,
            $prompt->firstVisible,
            $prompt->scroll,
            count($prompt->lines()),
            min($longest, $prompt->width + 2),
<<<<<<< HEAD
        )->implode(PHP_EOL);
=======
        ));
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * The number of lines to reserve outside of the scrollable area.
     */
    public function reservedLines(): int
    {
        return 5;
    }
}
