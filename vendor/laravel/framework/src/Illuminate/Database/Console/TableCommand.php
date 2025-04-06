<?php

namespace Illuminate\Database\Console;

<<<<<<< HEAD
use Doctrine\DBAL\Schema\Column;
use Doctrine\DBAL\Schema\ForeignKeyConstraint;
use Doctrine\DBAL\Schema\Index;
use Doctrine\DBAL\Schema\Table;
use Illuminate\Database\ConnectionResolverInterface;
use Illuminate\Support\Str;
=======
use Illuminate\Database\ConnectionResolverInterface;
use Illuminate\Database\Schema\Builder;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Number;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use Symfony\Component\Console\Attribute\AsCommand;

use function Laravel\Prompts\select;

#[AsCommand(name: 'db:table')]
class TableCommand extends DatabaseInspectionCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:table
                            {table? : The name of the table}
                            {--database= : The database connection}
                            {--json : Output the table information as JSON}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Display information about the given database table';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(ConnectionResolverInterface $connections)
    {
<<<<<<< HEAD
        if (! $this->ensureDependenciesExist()) {
            return 1;
        }

        $connection = $connections->connection($this->input->getOption('database'));

        $schema = $connection->getDoctrineSchemaManager();

        $this->registerTypeMappings($connection->getDoctrineConnection()->getDatabasePlatform());

        $table = $this->argument('table') ?: select(
            'Which table would you like to inspect?',
            collect($schema->listTables())->flatMap(fn (Table $table) => [$table->getName()])->toArray()
        );

        if (! $schema->tablesExist([$table])) {
            return $this->components->warn("Table [{$table}] doesn't exist.");
        }

        $table = $schema->introspectTable($table);

        $columns = $this->columns($table);
        $indexes = $this->indexes($table);
        $foreignKeys = $this->foreignKeys($table);

        $data = [
            'table' => [
                'name' => $table->getName(),
                'columns' => $columns->count(),
                'size' => $this->getTableSize($connection, $table->getName()),
=======
        $connection = $connections->connection($this->input->getOption('database'));
        $schema = $connection->getSchemaBuilder();
        $tables = (new Collection($schema->getTables()))
            ->keyBy(fn ($table) => $table['schema'] ? $table['schema'].'.'.$table['name'] : $table['name'])
            ->all();

        $tableName = $this->argument('table') ?: select(
            'Which table would you like to inspect?',
            array_keys($tables)
        );

        $table = $tables[$tableName] ?? Arr::first($tables, fn ($table) => $table['name'] === $tableName);

        if (! $table) {
            $this->components->warn("Table [{$tableName}] doesn't exist.");

            return 1;
        }

        $tableName = ($table['schema'] ? $table['schema'].'.' : '').$this->withoutTablePrefix($connection, $table['name']);

        $columns = $this->columns($schema, $tableName);
        $indexes = $this->indexes($schema, $tableName);
        $foreignKeys = $this->foreignKeys($schema, $tableName);

        $data = [
            'table' => [
                'schema' => $table['schema'],
                'name' => $table['name'],
                'columns' => count($columns),
                'size' => $table['size'],
                'comment' => $table['comment'],
                'collation' => $table['collation'],
                'engine' => $table['engine'],
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            ],
            'columns' => $columns,
            'indexes' => $indexes,
            'foreign_keys' => $foreignKeys,
        ];

        $this->display($data);

        return 0;
    }

    /**
     * Get the information regarding the table's columns.
     *
<<<<<<< HEAD
     * @param  \Doctrine\DBAL\Schema\Table  $table
     * @return \Illuminate\Support\Collection
     */
    protected function columns(Table $table)
    {
        return collect($table->getColumns())->map(fn (Column $column) => [
            'column' => $column->getName(),
            'attributes' => $this->getAttributesForColumn($column),
            'default' => $column->getDefault(),
            'type' => $column->getType()->getName(),
=======
     * @param  \Illuminate\Database\Schema\Builder  $schema
     * @param  string  $table
     * @return \Illuminate\Support\Collection
     */
    protected function columns(Builder $schema, string $table)
    {
        return (new Collection($schema->getColumns($table)))->map(fn ($column) => [
            'column' => $column['name'],
            'attributes' => $this->getAttributesForColumn($column),
            'default' => $column['default'],
            'type' => $column['type'],
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        ]);
    }

    /**
     * Get the attributes for a table column.
     *
<<<<<<< HEAD
     * @param  \Doctrine\DBAL\Schema\Column  $column
     * @return \Illuminate\Support\Collection
     */
    protected function getAttributesForColumn(Column $column)
    {
        return collect([
            $column->getAutoincrement() ? 'autoincrement' : null,
            'type' => $column->getType()->getName(),
            $column->getUnsigned() ? 'unsigned' : null,
            ! $column->getNotNull() ? 'nullable' : null,
        ])->filter();
=======
     * @param  array  $column
     * @return \Illuminate\Support\Collection
     */
    protected function getAttributesForColumn($column)
    {
        return (new Collection([
            $column['type_name'],
            $column['generation'] ? $column['generation']['type'] : null,
            $column['auto_increment'] ? 'autoincrement' : null,
            $column['nullable'] ? 'nullable' : null,
            $column['collation'],
        ]))->filter();
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Get the information regarding the table's indexes.
     *
<<<<<<< HEAD
     * @param  \Doctrine\DBAL\Schema\Table  $table
     * @return \Illuminate\Support\Collection
     */
    protected function indexes(Table $table)
    {
        return collect($table->getIndexes())->map(fn (Index $index) => [
            'name' => $index->getName(),
            'columns' => collect($index->getColumns()),
=======
     * @param  \Illuminate\Database\Schema\Builder  $schema
     * @param  string  $table
     * @return \Illuminate\Support\Collection
     */
    protected function indexes(Builder $schema, string $table)
    {
        return (new Collection($schema->getIndexes($table)))->map(fn ($index) => [
            'name' => $index['name'],
            'columns' => new Collection($index['columns']),
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            'attributes' => $this->getAttributesForIndex($index),
        ]);
    }

    /**
     * Get the attributes for a table index.
     *
<<<<<<< HEAD
     * @param  \Doctrine\DBAL\Schema\Index  $index
     * @return \Illuminate\Support\Collection
     */
    protected function getAttributesForIndex(Index $index)
    {
        return collect([
            'compound' => count($index->getColumns()) > 1,
            'unique' => $index->isUnique(),
            'primary' => $index->isPrimary(),
        ])->filter()->keys()->map(fn ($attribute) => Str::lower($attribute));
=======
     * @param  array  $index
     * @return \Illuminate\Support\Collection
     */
    protected function getAttributesForIndex($index)
    {
        return (new Collection([
            $index['type'],
            count($index['columns']) > 1 ? 'compound' : null,
            $index['unique'] && ! $index['primary'] ? 'unique' : null,
            $index['primary'] ? 'primary' : null,
        ]))->filter();
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Get the information regarding the table's foreign keys.
     *
<<<<<<< HEAD
     * @param  \Doctrine\DBAL\Schema\Table  $table
     * @return \Illuminate\Support\Collection
     */
    protected function foreignKeys(Table $table)
    {
        return collect($table->getForeignKeys())->map(fn (ForeignKeyConstraint $foreignKey) => [
            'name' => $foreignKey->getName(),
            'local_table' => $table->getName(),
            'local_columns' => collect($foreignKey->getLocalColumns()),
            'foreign_table' => $foreignKey->getForeignTableName(),
            'foreign_columns' => collect($foreignKey->getForeignColumns()),
            'on_update' => Str::lower(rescue(fn () => $foreignKey->getOption('onUpdate'), 'N/A')),
            'on_delete' => Str::lower(rescue(fn () => $foreignKey->getOption('onDelete'), 'N/A')),
=======
     * @param  \Illuminate\Database\Schema\Builder  $schema
     * @param  string  $table
     * @return \Illuminate\Support\Collection
     */
    protected function foreignKeys(Builder $schema, string $table)
    {
        return (new Collection($schema->getForeignKeys($table)))->map(fn ($foreignKey) => [
            'name' => $foreignKey['name'],
            'columns' => new Collection($foreignKey['columns']),
            'foreign_schema' => $foreignKey['foreign_schema'],
            'foreign_table' => $foreignKey['foreign_table'],
            'foreign_columns' => new Collection($foreignKey['foreign_columns']),
            'on_update' => $foreignKey['on_update'],
            'on_delete' => $foreignKey['on_delete'],
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        ]);
    }

    /**
     * Render the table information.
     *
     * @param  array  $data
     * @return void
     */
    protected function display(array $data)
    {
        $this->option('json') ? $this->displayJson($data) : $this->displayForCli($data);
    }

    /**
     * Render the table information as JSON.
     *
     * @param  array  $data
     * @return void
     */
    protected function displayJson(array $data)
    {
        $this->output->writeln(json_encode($data));
    }

    /**
     * Render the table information formatted for the CLI.
     *
     * @param  array  $data
     * @return void
     */
    protected function displayForCli(array $data)
    {
        [$table, $columns, $indexes, $foreignKeys] = [
            $data['table'], $data['columns'], $data['indexes'], $data['foreign_keys'],
        ];

        $this->newLine();

<<<<<<< HEAD
        $this->components->twoColumnDetail('<fg=green;options=bold>'.$table['name'].'</>');
        $this->components->twoColumnDetail('Columns', $table['columns']);

        if ($size = $table['size']) {
            $this->components->twoColumnDetail('Size', number_format($size / 1024 / 1024, 2).'MiB');
=======
        $this->components->twoColumnDetail('<fg=green;options=bold>'.($table['schema'] ? $table['schema'].'.'.$table['name'] : $table['name']).'</>', $table['comment'] ? '<fg=gray>'.$table['comment'].'</>' : null);
        $this->components->twoColumnDetail('Columns', $table['columns']);

        if (! is_null($table['size'])) {
            $this->components->twoColumnDetail('Size', Number::fileSize($table['size'], 2));
        }

        if ($table['engine']) {
            $this->components->twoColumnDetail('Engine', $table['engine']);
        }

        if ($table['collation']) {
            $this->components->twoColumnDetail('Collation', $table['collation']);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        }

        $this->newLine();

        if ($columns->isNotEmpty()) {
            $this->components->twoColumnDetail('<fg=green;options=bold>Column</>', 'Type');

            $columns->each(function ($column) {
                $this->components->twoColumnDetail(
                    $column['column'].' <fg=gray>'.$column['attributes']->implode(', ').'</>',
<<<<<<< HEAD
                    (! is_null($column['default']) ? '<fg=gray>'.$column['default'].'</> ' : '').''.$column['type'].''
=======
                    (! is_null($column['default']) ? '<fg=gray>'.$column['default'].'</> ' : '').$column['type']
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                );
            });

            $this->newLine();
        }

        if ($indexes->isNotEmpty()) {
            $this->components->twoColumnDetail('<fg=green;options=bold>Index</>');

            $indexes->each(function ($index) {
                $this->components->twoColumnDetail(
                    $index['name'].' <fg=gray>'.$index['columns']->implode(', ').'</>',
                    $index['attributes']->implode(', ')
                );
            });

            $this->newLine();
        }

        if ($foreignKeys->isNotEmpty()) {
            $this->components->twoColumnDetail('<fg=green;options=bold>Foreign Key</>', 'On Update / On Delete');

            $foreignKeys->each(function ($foreignKey) {
                $this->components->twoColumnDetail(
<<<<<<< HEAD
                    $foreignKey['name'].' <fg=gray;options=bold>'.$foreignKey['local_columns']->implode(', ').' references '.$foreignKey['foreign_columns']->implode(', ').' on '.$foreignKey['foreign_table'].'</>',
=======
                    $foreignKey['name'].' <fg=gray;options=bold>'.$foreignKey['columns']->implode(', ').' references '.$foreignKey['foreign_columns']->implode(', ').' on '.$foreignKey['foreign_table'].'</>',
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                    $foreignKey['on_update'].' / '.$foreignKey['on_delete'],
                );
            });

            $this->newLine();
        }
    }
}
