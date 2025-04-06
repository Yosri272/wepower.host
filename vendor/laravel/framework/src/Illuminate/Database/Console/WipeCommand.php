<?php

namespace Illuminate\Database\Console;

use Illuminate\Console\Command;
use Illuminate\Console\ConfirmableTrait;
<<<<<<< HEAD
=======
use Illuminate\Console\Prohibitable;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Input\InputOption;

#[AsCommand(name: 'db:wipe')]
class WipeCommand extends Command
{
<<<<<<< HEAD
    use ConfirmableTrait;
=======
    use ConfirmableTrait, Prohibitable;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'db:wipe';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Drop all tables, views, and types';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
<<<<<<< HEAD
        if (! $this->confirmToProceed()) {
            return 1;
=======
        if ($this->isProhibited() ||
            ! $this->confirmToProceed()) {
            return Command::FAILURE;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        }

        $database = $this->input->getOption('database');

        if ($this->option('drop-views')) {
            $this->dropAllViews($database);

            $this->components->info('Dropped all views successfully.');
        }

        $this->dropAllTables($database);

        $this->components->info('Dropped all tables successfully.');

        if ($this->option('drop-types')) {
            $this->dropAllTypes($database);

            $this->components->info('Dropped all types successfully.');
        }

        return 0;
    }

    /**
     * Drop all of the database tables.
     *
     * @param  string  $database
     * @return void
     */
    protected function dropAllTables($database)
    {
        $this->laravel['db']->connection($database)
<<<<<<< HEAD
                    ->getSchemaBuilder()
                    ->dropAllTables();
=======
            ->getSchemaBuilder()
            ->dropAllTables();
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Drop all of the database views.
     *
     * @param  string  $database
     * @return void
     */
    protected function dropAllViews($database)
    {
        $this->laravel['db']->connection($database)
<<<<<<< HEAD
                    ->getSchemaBuilder()
                    ->dropAllViews();
=======
            ->getSchemaBuilder()
            ->dropAllViews();
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Drop all of the database types.
     *
     * @param  string  $database
     * @return void
     */
    protected function dropAllTypes($database)
    {
        $this->laravel['db']->connection($database)
<<<<<<< HEAD
                    ->getSchemaBuilder()
                    ->dropAllTypes();
=======
            ->getSchemaBuilder()
            ->dropAllTypes();
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [
            ['database', null, InputOption::VALUE_OPTIONAL, 'The database connection to use'],
            ['drop-views', null, InputOption::VALUE_NONE, 'Drop all tables and views'],
            ['drop-types', null, InputOption::VALUE_NONE, 'Drop all tables and types (Postgres only)'],
            ['force', null, InputOption::VALUE_NONE, 'Force the operation to run when in production'],
        ];
    }
}
