<?php

namespace Illuminate\Database\Schema;

use Illuminate\Database\Connection;
<<<<<<< HEAD
=======
use Illuminate\Support\Collection;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

class SqliteSchemaState extends SchemaState
{
    /**
     * Dump the database's schema into a file.
     *
     * @param  \Illuminate\Database\Connection  $connection
     * @param  string  $path
     * @return void
     */
    public function dump(Connection $connection, $path)
    {
        with($process = $this->makeProcess(
<<<<<<< HEAD
            $this->baseCommand().' .schema'
=======
            $this->baseCommand().' ".schema --indent"'
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        ))->setTimeout(null)->mustRun(null, array_merge($this->baseVariables($this->connection->getConfig()), [
            //
        ]));

<<<<<<< HEAD
        $migrations = collect(preg_split("/\r\n|\n|\r/", $process->getOutput()))->filter(function ($line) {
            return stripos($line, 'sqlite_sequence') === false &&
                   strlen($line) > 0;
        })->all();

        $this->files->put($path, implode(PHP_EOL, $migrations).PHP_EOL);
=======
        $migrations = preg_replace('/CREATE TABLE sqlite_.+?\);[\r\n]+/is', '', $process->getOutput());

        $this->files->put($path, $migrations.PHP_EOL);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        if ($this->hasMigrationTable()) {
            $this->appendMigrationData($path);
        }
    }

    /**
     * Append the migration data to the schema dump.
     *
     * @param  string  $path
     * @return void
     */
    protected function appendMigrationData(string $path)
    {
        with($process = $this->makeProcess(
<<<<<<< HEAD
            $this->baseCommand().' ".dump \''.$this->migrationTable.'\'"'
=======
            $this->baseCommand().' ".dump \''.$this->getMigrationTable().'\'"'
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        ))->mustRun(null, array_merge($this->baseVariables($this->connection->getConfig()), [
            //
        ]));

<<<<<<< HEAD
        $migrations = collect(preg_split("/\r\n|\n|\r/", $process->getOutput()))->filter(function ($line) {
            return preg_match('/^\s*(--|INSERT\s)/iu', $line) === 1 &&
                   strlen($line) > 0;
        })->all();
=======
        $migrations = (new Collection(preg_split("/\r\n|\n|\r/", $process->getOutput())))
            ->filter(fn ($line) => preg_match('/^\s*(--|INSERT\s)/iu', $line) === 1 && strlen($line) > 0)
            ->all();
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        $this->files->append($path, implode(PHP_EOL, $migrations).PHP_EOL);
    }

    /**
     * Load the given schema file into the database.
     *
     * @param  string  $path
     * @return void
     */
    public function load($path)
    {
<<<<<<< HEAD
        if ($this->connection->getDatabaseName() === ':memory:') {
=======
        $database = $this->connection->getDatabaseName();

        if ($database === ':memory:' ||
            str_contains($database, '?mode=memory') ||
            str_contains($database, '&mode=memory')
        ) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $this->connection->getPdo()->exec($this->files->get($path));

            return;
        }

        $process = $this->makeProcess($this->baseCommand().' < "${:LARAVEL_LOAD_PATH}"');

        $process->mustRun(null, array_merge($this->baseVariables($this->connection->getConfig()), [
            'LARAVEL_LOAD_PATH' => $path,
        ]));
    }

    /**
     * Get the base sqlite command arguments as a string.
     *
     * @return string
     */
    protected function baseCommand()
    {
        return 'sqlite3 "${:LARAVEL_LOAD_DATABASE}"';
    }

    /**
     * Get the base variables for a dump / load command.
     *
     * @param  array  $config
     * @return array
     */
    protected function baseVariables(array $config)
    {
        return [
            'LARAVEL_LOAD_DATABASE' => $config['database'],
        ];
    }
}
