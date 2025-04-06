<?php

namespace Illuminate\Console;

use Illuminate\Console\View\Components\TwoColumnDetail;
<<<<<<< HEAD
=======
use Illuminate\Support\Stringable;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use Symfony\Component\Console\Formatter\OutputFormatter;
use Symfony\Component\Console\Helper\SymfonyQuestionHelper;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\ChoiceQuestion;
use Symfony\Component\Console\Question\ConfirmationQuestion;
use Symfony\Component\Console\Question\Question;

class QuestionHelper extends SymfonyQuestionHelper
{
    /**
     * {@inheritdoc}
     *
     * @return void
     */
<<<<<<< HEAD
    protected function writePrompt(OutputInterface $output, Question $question)
=======
    #[\Override]
    protected function writePrompt(OutputInterface $output, Question $question): void
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $text = OutputFormatter::escapeTrailingBackslash($question->getQuestion());

        $text = $this->ensureEndsWithPunctuation($text);

        $text = "  <fg=default;options=bold>$text</></>";

        $default = $question->getDefault();

        if ($question->isMultiline()) {
            $text .= sprintf(' (press %s to continue)', 'Windows' == PHP_OS_FAMILY
                ? '<comment>Ctrl+Z</comment> then <comment>Enter</comment>'
                : '<comment>Ctrl+D</comment>');
        }

        switch (true) {
            case null === $default:
                $text = sprintf('<info>%s</info>', $text);

                break;

            case $question instanceof ConfirmationQuestion:
                $text = sprintf('<info>%s (yes/no)</info> [<comment>%s</comment>]', $text, $default ? 'yes' : 'no');

                break;

            case $question instanceof ChoiceQuestion:
                $choices = $question->getChoices();
                $text = sprintf('<info>%s</info> [<comment>%s</comment>]', $text, OutputFormatter::escape($choices[$default] ?? $default));

                break;

            default:
                $text = sprintf('<info>%s</info> [<comment>%s</comment>]', $text, OutputFormatter::escape($default));

                break;
        }

        $output->writeln($text);

        if ($question instanceof ChoiceQuestion) {
            foreach ($question->getChoices() as $key => $value) {
                with(new TwoColumnDetail($output))->render($value, $key);
            }
        }

        $output->write('<options=bold>❯ </>');
    }

    /**
     * Ensures the given string ends with punctuation.
     *
     * @param  string  $string
     * @return string
     */
    protected function ensureEndsWithPunctuation($string)
    {
<<<<<<< HEAD
        if (! str($string)->endsWith(['?', ':', '!', '.'])) {
=======
        if (! (new Stringable($string))->endsWith(['?', ':', '!', '.'])) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            return "$string:";
        }

        return $string;
    }
}
