<?php

namespace Illuminate\Console\Concerns;

<<<<<<< HEAD
use Illuminate\Support\Str;
=======
use Illuminate\Support\Stringable;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use Symfony\Component\Console\Input\InputOption;

trait CreatesMatchingTest
{
    /**
     * Add the standard command options for generating matching tests.
     *
     * @return void
     */
    protected function addTestOptions()
    {
<<<<<<< HEAD
        foreach (['test' => 'PHPUnit', 'pest' => 'Pest'] as $option => $name) {
=======
        foreach (['test' => 'Test', 'pest' => 'Pest', 'phpunit' => 'PHPUnit'] as $option => $name) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $this->getDefinition()->addOption(new InputOption(
                $option,
                null,
                InputOption::VALUE_NONE,
                "Generate an accompanying {$name} test for the {$this->type}"
            ));
        }
    }

    /**
     * Create the matching test case if requested.
     *
     * @param  string  $path
     * @return bool
     */
    protected function handleTestCreation($path)
    {
<<<<<<< HEAD
        if (! $this->option('test') && ! $this->option('pest')) {
            return false;
        }

        return $this->callSilent('make:test', [
            'name' => Str::of($path)->after($this->laravel['path'])->beforeLast('.php')->append('Test')->replace('\\', '/'),
            '--pest' => $this->option('pest'),
=======
        if (! $this->option('test') && ! $this->option('pest') && ! $this->option('phpunit')) {
            return false;
        }

        return $this->call('make:test', [
            'name' => (new Stringable($path))->after($this->laravel['path'])->beforeLast('.php')->append('Test')->replace('\\', '/'),
            '--pest' => $this->option('pest'),
            '--phpunit' => $this->option('phpunit'),
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        ]) == 0;
    }
}
