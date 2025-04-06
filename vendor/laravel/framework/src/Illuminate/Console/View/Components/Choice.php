<?php

namespace Illuminate\Console\View\Components;

use Symfony\Component\Console\Question\ChoiceQuestion;

class Choice extends Component
{
    /**
     * Renders the component using the given arguments.
     *
     * @param  string  $question
     * @param  array<array-key, string>  $choices
     * @param  mixed  $default
     * @param  int  $attempts
     * @param  bool  $multiple
     * @return mixed
     */
    public function render($question, $choices, $default = null, $attempts = null, $multiple = false)
    {
        return $this->usingQuestionHelper(
            fn () => $this->output->askQuestion(
<<<<<<< HEAD
                (new ChoiceQuestion($question, $choices, $default))
=======
                $this->getChoiceQuestion($question, $choices, $default)
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                    ->setMaxAttempts($attempts)
                    ->setMultiselect($multiple)
            ),
        );
    }
<<<<<<< HEAD
=======

    /**
     * Get a ChoiceQuestion instance that handles array keys like Prompts.
     *
     * @param  string  $question
     * @param  array  $choices
     * @param  mixed  $default
     * @return \Symfony\Component\Console\Question\ChoiceQuestion
     */
    protected function getChoiceQuestion($question, $choices, $default)
    {
        return new class($question, $choices, $default) extends ChoiceQuestion
        {
            protected function isAssoc(array $array): bool
            {
                return ! array_is_list($array);
            }
        };
    }
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
}
