<?php

namespace Illuminate\Database\Schema;

use Illuminate\Database\Concerns\ParsesSearchPath;
<<<<<<< HEAD
=======
use InvalidArgumentException;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

class PostgresBuilder extends Builder
{
    use ParsesSearchPath {
        parseSearchPath as baseParseSearchPath;
    }

    /**
     * Create a database in the schema.
     *
     * @param  string  $name
     * @return bool
     */
    public function createDatabase($name)
    {
        return $this->connection->statement(
            $this->grammar->compileCreateDatabase($name, $this->connection)
        );
    }

    /**
     * Drop a database from the schema if the database exists.
     *
     * @param  string  $name
     * @return bool
     */
    public function dropDatabaseIfExists($name)
    {
        return $this->connection->statement(
            $this->grammar->compileDropDatabaseIfExists($name)
        );
    }

    /**
     * Determine if the given table exists.
     *
     * @param  string  $table
     * @return bool
     */
    public function hasTable($table)
    {
<<<<<<< HEAD
        [$database, $schema, $table] = $this->parseSchemaAndTable($table);

        $table = $this->connection->getTablePrefix().$table;

        return count($this->connection->selectFromWriteConnection(
            $this->grammar->compileTableExists(), [$database, $schema, $table]
        )) > 0;
=======
        [$schema, $table] = $this->parseSchemaAndTable($table);

        $table = $this->connection->getTablePrefix().$table;

        return (bool) $this->connection->scalar(
            $this->grammar->compileTableExists($schema, $table)
        );
    }

    /**
     * Determine if the given view exists.
     *
     * @param  string  $view
     * @return bool
     */
    public function hasView($view)
    {
        [$schema, $view] = $this->parseSchemaAndTable($view);

        $view = $this->connection->getTablePrefix().$view;

        foreach ($this->getViews() as $value) {
            if (strtolower($view) === strtolower($value['name'])
                && strtolower($schema) === strtolower($value['schema'])) {
                return true;
            }
        }

        return false;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Get the user-defined types that belong to the database.
     *
     * @return array
     */
    public function getTypes()
    {
        return $this->connection->getPostProcessor()->processTypes(
            $this->connection->selectFromWriteConnection($this->grammar->compileTypes())
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
            $this->grammar->compileGetAllTables(
                $this->parseSearchPath(
                    $this->connection->getConfig('search_path') ?: $this->connection->getConfig('schema')
                )
            )
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
            $this->grammar->compileGetAllViews(
                $this->parseSearchPath(
                    $this->connection->getConfig('search_path') ?: $this->connection->getConfig('schema')
                )
            )
        );
    }

    /**
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * Drop all tables from the database.
     *
     * @return void
     */
    public function dropAllTables()
    {
        $tables = [];

<<<<<<< HEAD
        $excludedTables = $this->grammar->escapeNames(
            $this->connection->getConfig('dont_drop') ?? ['spatial_ref_sys']
        );

        $schemas = $this->grammar->escapeNames($this->getSchemas());
=======
        $excludedTables = $this->connection->getConfig('dont_drop') ?? ['spatial_ref_sys'];

        $schemas = $this->getSchemas();
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        foreach ($this->getTables() as $table) {
            $qualifiedName = $table['schema'].'.'.$table['name'];

<<<<<<< HEAD
            if (empty(array_intersect($this->grammar->escapeNames([$table['name'], $qualifiedName]), $excludedTables))
                && in_array($this->grammar->escapeNames([$table['schema']])[0], $schemas)) {
=======
            if (in_array($table['schema'], $schemas) &&
                empty(array_intersect([$table['name'], $qualifiedName], $excludedTables))) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                $tables[] = $qualifiedName;
            }
        }

        if (empty($tables)) {
            return;
        }

        $this->connection->statement(
            $this->grammar->compileDropAllTables($tables)
        );
    }

    /**
     * Drop all views from the database.
     *
     * @return void
     */
    public function dropAllViews()
    {
        $views = [];

<<<<<<< HEAD
        $schemas = $this->grammar->escapeNames($this->getSchemas());

        foreach ($this->getViews() as $view) {
            if (in_array($this->grammar->escapeNames([$view['schema']])[0], $schemas)) {
=======
        $schemas = $this->getSchemas();

        foreach ($this->getViews() as $view) {
            if (in_array($view['schema'], $schemas)) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                $views[] = $view['schema'].'.'.$view['name'];
            }
        }

        if (empty($views)) {
            return;
        }

        $this->connection->statement(
            $this->grammar->compileDropAllViews($views)
        );
    }

    /**
<<<<<<< HEAD
     * Get all of the type names for the database.
     *
     * @deprecated Will be removed in a future Laravel version.
     *
     * @return array
     */
    public function getAllTypes()
    {
        return $this->connection->select(
            $this->grammar->compileGetAllTypes()
        );
    }

    /**
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * Drop all types from the database.
     *
     * @return void
     */
    public function dropAllTypes()
    {
        $types = [];
        $domains = [];

<<<<<<< HEAD
        $schemas = $this->grammar->escapeNames($this->getSchemas());

        foreach ($this->getTypes() as $type) {
            if (! $type['implicit'] && in_array($this->grammar->escapeNames([$type['schema']])[0], $schemas)) {
=======
        $schemas = $this->getSchemas();

        foreach ($this->getTypes() as $type) {
            if (! $type['implicit'] && in_array($type['schema'], $schemas)) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                if ($type['type'] === 'domain') {
                    $domains[] = $type['schema'].'.'.$type['name'];
                } else {
                    $types[] = $type['schema'].'.'.$type['name'];
                }
            }
        }

        if (! empty($types)) {
            $this->connection->statement($this->grammar->compileDropAllTypes($types));
        }

        if (! empty($domains)) {
            $this->connection->statement($this->grammar->compileDropAllDomains($domains));
        }
    }

    /**
     * Get the columns for a given table.
     *
     * @param  string  $table
     * @return array
     */
    public function getColumns($table)
    {
<<<<<<< HEAD
        [$database, $schema, $table] = $this->parseSchemaAndTable($table);
=======
        [$schema, $table] = $this->parseSchemaAndTable($table);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        $table = $this->connection->getTablePrefix().$table;

        $results = $this->connection->selectFromWriteConnection(
<<<<<<< HEAD
            $this->grammar->compileColumns($database, $schema, $table)
=======
            $this->grammar->compileColumns($schema, $table)
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        );

        return $this->connection->getPostProcessor()->processColumns($results);
    }

    /**
     * Get the indexes for a given table.
     *
     * @param  string  $table
     * @return array
     */
    public function getIndexes($table)
    {
<<<<<<< HEAD
        [, $schema, $table] = $this->parseSchemaAndTable($table);
=======
        [$schema, $table] = $this->parseSchemaAndTable($table);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        $table = $this->connection->getTablePrefix().$table;

        return $this->connection->getPostProcessor()->processIndexes(
            $this->connection->selectFromWriteConnection($this->grammar->compileIndexes($schema, $table))
        );
    }

    /**
     * Get the foreign keys for a given table.
     *
     * @param  string  $table
     * @return array
     */
    public function getForeignKeys($table)
    {
<<<<<<< HEAD
        [, $schema, $table] = $this->parseSchemaAndTable($table);
=======
        [$schema, $table] = $this->parseSchemaAndTable($table);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        $table = $this->connection->getTablePrefix().$table;

        return $this->connection->getPostProcessor()->processForeignKeys(
            $this->connection->selectFromWriteConnection($this->grammar->compileForeignKeys($schema, $table))
        );
    }

    /**
     * Get the schemas for the connection.
     *
     * @return array
     */
<<<<<<< HEAD
    protected function getSchemas()
=======
    public function getSchemas()
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        return $this->parseSearchPath(
            $this->connection->getConfig('search_path') ?: $this->connection->getConfig('schema') ?: 'public'
        );
    }

    /**
<<<<<<< HEAD
     * Parse the database object reference and extract the database, schema, and table.
=======
     * Parse the database object reference and extract the schema and table.
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     *
     * @param  string  $reference
     * @return array
     */
<<<<<<< HEAD
    protected function parseSchemaAndTable($reference)
    {
        $parts = explode('.', $reference);

        $database = $this->connection->getConfig('database');

        // If the reference contains a database name, we will use that instead of the
        // default database name for the connection. This allows the database name
        // to be specified in the query instead of at the full connection level.
        if (count($parts) === 3) {
            $database = $parts[0];
            array_shift($parts);
=======
    public function parseSchemaAndTable($reference)
    {
        $parts = explode('.', $reference);

        if (count($parts) > 2) {
            $database = $parts[0];

            throw new InvalidArgumentException("Using three-part reference is not supported, you may use `Schema::connection('$database')` instead.");
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        }

        // We will use the default schema unless the schema has been specified in the
        // query. If the schema has been specified in the query then we can use it
        // instead of a default schema configured in the connection search path.
        $schema = $this->getSchemas()[0];

        if (count($parts) === 2) {
            $schema = $parts[0];
            array_shift($parts);
        }

<<<<<<< HEAD
        return [$database, $schema, $parts[0]];
=======
        return [$schema, $parts[0]];
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Parse the "search_path" configuration value into an array.
     *
     * @param  string|array|null  $searchPath
     * @return array
     */
    protected function parseSearchPath($searchPath)
    {
        return array_map(function ($schema) {
            return $schema === '$user'
                ? $this->connection->getConfig('username')
                : $schema;
        }, $this->baseParseSearchPath($searchPath));
    }
}
