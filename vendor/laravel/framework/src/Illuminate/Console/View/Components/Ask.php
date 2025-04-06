<?php

namespace Illuminate\Console\View\Components;

<<<<<<< HEAD
=======
use Symfony\Component\Console\Question\Question;

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
class Ask extends Component
{
    /**
     * Renders the component using the given arguments.
     *
     * @param  string  $question
     * @param  string  $default
<<<<<<< HEAD
     * @return mixed
     */
    public function render($question, $default = null)
    {
        return $this->usingQuestionHelper(fn () => $this->output->ask($question, $default));
=======
     * @param  bool  $multiline
     * @return mixed
     */
    public function render($question, $default = null, $multiline = false)
    {
        return $this->usingQuestionHelper(
            fn () => $this->output->askQuestion(
                (new Question($question, $default))
                    ->setMultiline($multiline)
            )
        );
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }
}
