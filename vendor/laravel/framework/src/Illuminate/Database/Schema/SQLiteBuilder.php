<?php

namespace Illuminate\Database\Schema;

use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\File;

class SQLiteBuilder extends Builder
{
    /**
     * Create a database in the schema.
     *
     * @param  string  $name
     * @return bool
     */
    public function createDatabase($name)
    {
        return File::put($name, '') !== false;
    }

    /**
     * Drop a database from the schema if the database exists.
     *
     * @param  string  $name
     * @return bool
     */
    public function dropDatabaseIfExists($name)
    {
        return File::exists($name)
            ? File::delete($name)
            : true;
    }

    /**
<<<<<<< HEAD
=======
     * Determine if the given table exists.
     *
     * @param  string  $table
     * @return bool
     */
    public function hasTable($table)
    {
        $table = $this->connection->getTablePrefix().$table;

        return (bool) $this->connection->scalar(
            $this->grammar->compileTableExists($table)
        );
    }

    /**
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * Get the tables for the database.
     *
     * @param  bool  $withSize
     * @return array
     */
    public function getTables($withSize = true)
    {
        if ($withSize) {
            try {
                $withSize = $this->connection->scalar($this->grammar->compileDbstatExists());
            } catch (QueryException $e) {
                $withSize = false;
            }
        }

        return $this->connection->getPostProcessor()->processTables(
            $this->connection->selectFromWriteConnection($this->grammar->compileTables($withSize))
        );
    }

    /**
<<<<<<< HEAD
     * Get all of the table names for the database.
     *
     * @deprecated Will be removed in a future Laravel version.
     *
     * @return array
     */
    public function getAllTables()
    {
        return $this->connection->select(
            $this->grammar->compileGetAllTables()
        );
    }

    /**
     * Get all of the view names for the database.
     *
     * @deprecated Will be removed in a future Laravel version.
     *
     * @return array
     */
    public function getAllViews()
    {
        return $this->connection->select(
            $this->grammar->compileGetAllViews()
=======
     * Get the columns for a given table.
     *
     * @param  string  $table
     * @return array
     */
    public function getColumns($table)
    {
        $table = $this->connection->getTablePrefix().$table;

        return $this->connection->getPostProcessor()->processColumns(
            $this->connection->selectFromWriteConnection($this->grammar->compileColumns($table)),
            $this->connection->scalar($this->grammar->compileSqlCreateStatement($table))
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        );
    }

    /**
     * Drop all tables from the database.
     *
     * @return void
     */
    public function dropAllTables()
    {
<<<<<<< HEAD
        if ($this->connection->getDatabaseName() !== ':memory:') {
=======
        $database = $this->connection->getDatabaseName();

        if ($database !== ':memory:' &&
            ! str_contains($database, '?mode=memory') &&
            ! str_contains($database, '&mode=memory')
        ) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            return $this->refreshDatabaseFile();
        }

        $this->connection->select($this->grammar->compileEnableWriteableSchema());

        $this->connection->select($this->grammar->compileDropAllTables());

        $this->connection->select($this->grammar->compileDisableWriteableSchema());

        $this->connection->select($this->grammar->compileRebuild());
    }

    /**
     * Drop all views from the database.
     *
     * @return void
     */
    public function dropAllViews()
    {
        $this->connection->select($this->grammar->compileEnableWriteableSchema());

        $this->connection->select($this->grammar->compileDropAllViews());

        $this->connection->select($this->grammar->compileDisableWriteableSchema());

        $this->connection->select($this->grammar->compileRebuild());
    }

    /**
<<<<<<< HEAD
=======
     * Set the busy timeout.
     *
     * @param  int  $milliseconds
     * @return bool
     */
    public function setBusyTimeout($milliseconds)
    {
        return $this->connection->statement(
            $this->grammar->compileSetBusyTimeout($milliseconds)
        );
    }

    /**
     * Set the journal mode.
     *
     * @param  string  $mode
     * @return bool
     */
    public function setJournalMode($mode)
    {
        return $this->connection->statement(
            $this->grammar->compileSetJournalMode($mode)
        );
    }

    /**
     * Set the synchronous mode.
     *
     * @param  int  $mode
     * @return bool
     */
    public function setSynchronous($mode)
    {
        return $this->connection->statement(
            $this->grammar->compileSetSynchronous($mode)
        );
    }

    /**
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * Empty the database file.
     *
     * @return void
     */
    public function refreshDatabaseFile()
    {
        file_put_contents($this->connection->getDatabaseName(), '');
    }
}
