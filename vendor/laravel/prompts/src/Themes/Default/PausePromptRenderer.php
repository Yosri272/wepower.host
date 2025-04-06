<?php

namespace Laravel\Prompts\Themes\Default;

use Laravel\Prompts\PausePrompt;

class PausePromptRenderer extends Renderer
{
    use Concerns\DrawsBoxes;

    /**
     * Render the pause prompt.
     */
    public function __invoke(PausePrompt $prompt): string
    {
<<<<<<< HEAD
        match ($prompt->state) {
            'submit' => collect(explode(PHP_EOL, $prompt->message))
                ->each(fn ($line) => $this->line($this->gray(" {$line}"))),
            default => collect(explode(PHP_EOL, $prompt->message))
                ->each(fn ($line) => $this->line($this->green(" {$line}")))
        };
=======
        $lines = explode(PHP_EOL, $prompt->message);

        $color = $prompt->state === 'submit' ? 'green' : 'gray';

        foreach ($lines as $line) {
            $this->line(" {$this->{$color}($line)}");
        }
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        return $this;
    }
}
