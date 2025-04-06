<?php

namespace Laravel\Prompts\Themes\Default;

use Laravel\Prompts\Note;

class NoteRenderer extends Renderer
{
    /**
     * Render the note.
     */
    public function __invoke(Note $note): string
    {
<<<<<<< HEAD
        $lines = collect(explode(PHP_EOL, $note->message));
=======
        $lines = explode(PHP_EOL, $note->message);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        switch ($note->type) {
            case 'intro':
            case 'outro':
<<<<<<< HEAD
                $lines = $lines->map(fn ($line) => " {$line} ");
                $longest = $lines->map(fn ($line) => strlen($line))->max();

                $lines
                    ->each(function ($line) use ($longest) {
                        $line = str_pad($line, $longest, ' ');
                        $this->line(" {$this->bgCyan($this->black($line))}");
                    });
=======
                $lines = array_map(fn ($line) => " {$line} ", $lines);
                $longest = max(array_map(fn ($line) => strlen($line), $lines));

                foreach ($lines as $line) {
                    $line = str_pad($line, $longest, ' ');
                    $this->line(" {$this->bgCyan($this->black($line))}");
                }
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

                return $this;

            case 'warning':
<<<<<<< HEAD
                $lines->each(fn ($line) => $this->line($this->yellow(" {$line}")));
=======
                foreach ($lines as $line) {
                    $this->line($this->yellow(" {$line}"));
                }
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

                return $this;

            case 'error':
<<<<<<< HEAD
                $lines->each(fn ($line) => $this->line($this->red(" {$line}")));
=======
                foreach ($lines as $line) {
                    $this->line($this->red(" {$line}"));
                }
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

                return $this;

            case 'alert':
<<<<<<< HEAD
                $lines->each(fn ($line) => $this->line(" {$this->bgRed($this->white(" {$line} "))}"));
=======
                foreach ($lines as $line) {
                    $this->line(" {$this->bgRed($this->white(" {$line} "))}");
                }
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

                return $this;

            case 'info':
<<<<<<< HEAD
                $lines->each(fn ($line) => $this->line($this->green(" {$line}")));
=======
                foreach ($lines as $line) {
                    $this->line($this->green(" {$line}"));
                }
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

                return $this;

            default:
<<<<<<< HEAD
                $lines->each(fn ($line) => $this->line(" {$line}"));
=======
                foreach ($lines as $line) {
                    $this->line(" {$line}");
                }
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

                return $this;
        }
    }
}
