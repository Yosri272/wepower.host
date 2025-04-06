<?php

namespace Illuminate\Cache\Console;

use Illuminate\Console\MigrationGeneratorCommand;
use Symfony\Component\Console\Attribute\AsCommand;

<<<<<<< HEAD
#[AsCommand(name: 'cache:table')]
=======
#[AsCommand(name: 'make:cache-table', aliases: ['cache:table'])]
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
class CacheTableCommand extends MigrationGeneratorCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
<<<<<<< HEAD
    protected $name = 'cache:table';
=======
    protected $name = 'make:cache-table';

    /**
     * The console command name aliases.
     *
     * @var array
     */
    protected $aliases = ['cache:table'];
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a migration for the cache database table';

    /**
     * Get the migration table name.
     *
     * @return string
     */
    protected function migrationTableName()
    {
        return 'cache';
    }

    /**
     * Get the path to the migration stub file.
     *
     * @return string
     */
    protected function migrationStubFile()
    {
        return __DIR__.'/stubs/cache.stub';
    }
}
