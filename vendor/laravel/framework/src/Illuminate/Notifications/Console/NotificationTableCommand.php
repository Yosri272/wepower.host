<?php

namespace Illuminate\Notifications\Console;

use Illuminate\Console\MigrationGeneratorCommand;
use Symfony\Component\Console\Attribute\AsCommand;

<<<<<<< HEAD
#[AsCommand(name: 'notifications:table')]
=======
#[AsCommand(name: 'make:notifications-table', aliases: ['notifications:table'])]
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
class NotificationTableCommand extends MigrationGeneratorCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
<<<<<<< HEAD
    protected $name = 'notifications:table';
=======
    protected $name = 'make:notifications-table';

    /**
     * The console command name aliases.
     *
     * @var array
     */
    protected $aliases = ['notifications:table'];
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a migration for the notifications table';

    /**
     * Get the migration table name.
     *
     * @return string
     */
    protected function migrationTableName()
    {
        return 'notifications';
    }

    /**
     * Get the path to the migration stub file.
     *
     * @return string
     */
    protected function migrationStubFile()
    {
        return __DIR__.'/stubs/notifications.stub';
    }
}
