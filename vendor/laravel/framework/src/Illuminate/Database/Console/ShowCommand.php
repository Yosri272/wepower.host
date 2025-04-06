<?php

namespace Illuminate\Database\Console;

<<<<<<< HEAD
use Doctrine\DBAL\Schema\AbstractSchemaManager;
use Doctrine\DBAL\Schema\Table;
use Doctrine\DBAL\Schema\View;
use Illuminate\Database\ConnectionInterface;
use Illuminate\Database\ConnectionResolverInterface;
use Illuminate\Support\Arr;
=======
use Illuminate\Database\ConnectionInterface;
use Illuminate\Database\ConnectionResolverInterface;
use Illuminate\Database\Schema\Builder;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Number;
use Illuminate\Support\Stringable;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use Symfony\Component\Console\Attribute\AsCommand;

#[AsCommand(name: 'db:show')]
class ShowCommand extends DatabaseInspectionCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:show {--database= : The database connection}
                {--json : Output the database information as JSON}
<<<<<<< HEAD
                {--counts : Show the table row count <bg=red;options=bold> Note: This can be slow on large databases </>};
                {--views : Show the database views <bg=red;options=bold> Note: This can be slow on large databases </>}';
=======
                {--counts : Show the table row count <bg=red;options=bold> Note: This can be slow on large databases </>}
                {--views : Show the database views <bg=red;options=bold> Note: This can be slow on large databases </>}
                {--types : Show the user defined types}';
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Display information about the given database';

    /**
     * Execute the console command.
     *
     * @param  \Illuminate\Database\ConnectionResolverInterface  $connections
     * @return int
     */
    public function handle(ConnectionResolverInterface $connections)
    {
<<<<<<< HEAD
        if (! $this->ensureDependenciesExist()) {
            return 1;
        }

        $connection = $connections->connection($database = $this->input->getOption('database'));

        $doctrineConnection = $connection->getDoctrineConnection();
        $schema = $connection->getDoctrineSchemaManager();

        $this->registerTypeMappings($doctrineConnection->getDatabasePlatform());
=======
        $connection = $connections->connection($database = $this->input->getOption('database'));

        $schema = $connection->getSchemaBuilder();
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        $data = [
            'platform' => [
                'config' => $this->getConfigFromDatabase($database),
<<<<<<< HEAD
                'name' => $this->getPlatformName($doctrineConnection->getDatabasePlatform(), $database),
                'open_connections' => $this->getConnectionCount($connection),
=======
                'name' => $connection->getDriverTitle(),
                'connection' => $connection->getName(),
                'version' => $connection->getServerVersion(),
                'open_connections' => $connection->threadCount(),
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            ],
            'tables' => $this->tables($connection, $schema),
        ];

        if ($this->option('views')) {
<<<<<<< HEAD
            $data['views'] = $this->collectViews($connection, $schema);
=======
            $data['views'] = $this->views($connection, $schema);
        }

        if ($this->option('types')) {
            $data['types'] = $this->types($connection, $schema);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        }

        $this->display($data);

        return 0;
    }

    /**
     * Get information regarding the tables within the database.
     *
     * @param  \Illuminate\Database\ConnectionInterface  $connection
<<<<<<< HEAD
     * @param  \Doctrine\DBAL\Schema\AbstractSchemaManager  $schema
     * @return \Illuminate\Support\Collection
     */
    protected function tables(ConnectionInterface $connection, AbstractSchemaManager $schema)
    {
        return collect($schema->listTables())->map(fn (Table $table, $index) => [
            'table' => $table->getName(),
            'size' => $this->getTableSize($connection, $table->getName()),
            'rows' => $this->option('counts') ? $connection->table($table->getName())->count() : null,
            'engine' => rescue(fn () => $table->getOption('engine'), null, false),
            'comment' => $table->getComment(),
=======
     * @param  \Illuminate\Database\Schema\Builder  $schema
     * @return \Illuminate\Support\Collection
     */
    protected function tables(ConnectionInterface $connection, Builder $schema)
    {
        return (new Collection($schema->getTables()))->map(fn ($table) => [
            'table' => $table['name'],
            'schema' => $table['schema'],
            'size' => $table['size'],
            'rows' => $this->option('counts')
                ? ($connection->table($table['schema'] ? $table['schema'].'.'.$table['name'] : $table['name'])->count())
                : null,
            'engine' => $table['engine'],
            'collation' => $table['collation'],
            'comment' => $table['comment'],
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        ]);
    }

    /**
     * Get information regarding the views within the database.
     *
     * @param  \Illuminate\Database\ConnectionInterface  $connection
<<<<<<< HEAD
     * @param  \Doctrine\DBAL\Schema\AbstractSchemaManager  $schema
     * @return \Illuminate\Support\Collection
     */
    protected function collectViews(ConnectionInterface $connection, AbstractSchemaManager $schema)
    {
        return collect($schema->listViews())
            ->reject(fn (View $view) => str($view->getName())
                ->startsWith(['pg_catalog', 'information_schema', 'spt_']))
            ->map(fn (View $view) => [
                'view' => $view->getName(),
                'rows' => $connection->table($view->getName())->count(),
=======
     * @param  \Illuminate\Database\Schema\Builder  $schema
     * @return \Illuminate\Support\Collection
     */
    protected function views(ConnectionInterface $connection, Builder $schema)
    {
        return (new Collection($schema->getViews()))
            ->reject(fn ($view) => (new Stringable($view['name']))->startsWith(['pg_catalog', 'information_schema', 'spt_']))
            ->map(fn ($view) => [
                'view' => $view['name'],
                'schema' => $view['schema'],
                'rows' => $connection->table($view['schema'] ? $view['schema'].'.'.$view['name'] : $view['name'])->count(),
            ]);
    }

    /**
     * Get information regarding the user-defined types within the database.
     *
     * @param  \Illuminate\Database\ConnectionInterface  $connection
     * @param  \Illuminate\Database\Schema\Builder  $schema
     * @return \Illuminate\Support\Collection
     */
    protected function types(ConnectionInterface $connection, Builder $schema)
    {
        return (new Collection($schema->getTypes()))
            ->map(fn ($type) => [
                'name' => $type['name'],
                'schema' => $type['schema'],
                'type' => $type['type'],
                'category' => $type['category'],
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            ]);
    }

    /**
     * Render the database information.
     *
     * @param  array  $data
     * @return void
     */
    protected function display(array $data)
    {
        $this->option('json') ? $this->displayJson($data) : $this->displayForCli($data);
    }

    /**
     * Render the database information as JSON.
     *
     * @param  array  $data
     * @return void
     */
    protected function displayJson(array $data)
    {
        $this->output->writeln(json_encode($data));
    }

    /**
     * Render the database information formatted for the CLI.
     *
     * @param  array  $data
     * @return void
     */
    protected function displayForCli(array $data)
    {
        $platform = $data['platform'];
        $tables = $data['tables'];
        $views = $data['views'] ?? null;
<<<<<<< HEAD

        $this->newLine();

        $this->components->twoColumnDetail('<fg=green;options=bold>'.$platform['name'].'</>');
=======
        $types = $data['types'] ?? null;

        $this->newLine();

        $this->components->twoColumnDetail('<fg=green;options=bold>'.$platform['name'].'</>', $platform['version']);
        $this->components->twoColumnDetail('Connection', $platform['connection']);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        $this->components->twoColumnDetail('Database', Arr::get($platform['config'], 'database'));
        $this->components->twoColumnDetail('Host', Arr::get($platform['config'], 'host'));
        $this->components->twoColumnDetail('Port', Arr::get($platform['config'], 'port'));
        $this->components->twoColumnDetail('Username', Arr::get($platform['config'], 'username'));
        $this->components->twoColumnDetail('URL', Arr::get($platform['config'], 'url'));
        $this->components->twoColumnDetail('Open Connections', $platform['open_connections']);
        $this->components->twoColumnDetail('Tables', $tables->count());

        if ($tableSizeSum = $tables->sum('size')) {
<<<<<<< HEAD
            $this->components->twoColumnDetail('Total Size', number_format($tableSizeSum / 1024 / 1024, 2).'MiB');
=======
            $this->components->twoColumnDetail('Total Size', Number::fileSize($tableSizeSum, 2));
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        }

        $this->newLine();

        if ($tables->isNotEmpty()) {
<<<<<<< HEAD
            $this->components->twoColumnDetail('<fg=green;options=bold>Table</>', 'Size (MiB)'.($this->option('counts') ? ' <fg=gray;options=bold>/</> <fg=yellow;options=bold>Rows</>' : ''));

            $tables->each(function ($table) {
                if ($tableSize = $table['size']) {
                    $tableSize = number_format($tableSize / 1024 / 1024, 2);
                }

                $this->components->twoColumnDetail(
                    $table['table'].($this->output->isVerbose() ? ' <fg=gray>'.$table['engine'].'</>' : null),
                    ($tableSize ? $tableSize : '—').($this->option('counts') ? ' <fg=gray;options=bold>/</> <fg=yellow;options=bold>'.number_format($table['rows']).'</>' : '')
=======
            $hasSchema = ! is_null($tables->first()['schema']);

            $this->components->twoColumnDetail(
                ($hasSchema ? '<fg=green;options=bold>Schema</> <fg=gray;options=bold>/</> ' : '').'<fg=green;options=bold>Table</>',
                'Size'.($this->option('counts') ? ' <fg=gray;options=bold>/</> <fg=yellow;options=bold>Rows</>' : '')
            );

            $tables->each(function ($table) {
                $tableSize = is_null($table['size']) ? null : Number::fileSize($table['size'], 2);

                $this->components->twoColumnDetail(
                    ($table['schema'] ? $table['schema'].' <fg=gray;options=bold>/</> ' : '').$table['table'].($this->output->isVerbose() ? ' <fg=gray>'.$table['engine'].'</>' : null),
                    ($tableSize ?? '—').($this->option('counts') ? ' <fg=gray;options=bold>/</> <fg=yellow;options=bold>'.Number::format($table['rows']).'</>' : '')
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                );

                if ($this->output->isVerbose()) {
                    if ($table['comment']) {
                        $this->components->bulletList([
                            $table['comment'],
                        ]);
                    }
                }
            });

            $this->newLine();
        }

        if ($views && $views->isNotEmpty()) {
<<<<<<< HEAD
            $this->components->twoColumnDetail('<fg=green;options=bold>View</>', '<fg=green;options=bold>Rows</>');

            $views->each(fn ($view) => $this->components->twoColumnDetail($view['view'], number_format($view['rows'])));
=======
            $hasSchema = ! is_null($views->first()['schema']);

            $this->components->twoColumnDetail(
                ($hasSchema ? '<fg=green;options=bold>Schema</> <fg=gray;options=bold>/</> ' : '').'<fg=green;options=bold>View</>',
                '<fg=green;options=bold>Rows</>'
            );

            $views->each(fn ($view) => $this->components->twoColumnDetail(
                ($view['schema'] ? $view['schema'].' <fg=gray;options=bold>/</> ' : '').$view['view'],
                Number::format($view['rows'])
            ));

            $this->newLine();
        }

        if ($types && $types->isNotEmpty()) {
            $hasSchema = ! is_null($types->first()['schema']);

            $this->components->twoColumnDetail(
                ($hasSchema ? '<fg=green;options=bold>Schema</> <fg=gray;options=bold>/</> ' : '').'<fg=green;options=bold>Type</>',
                '<fg=green;options=bold>Type</> <fg=gray;options=bold>/</> <fg=green;options=bold>Category</>'
            );

            $types->each(fn ($type) => $this->components->twoColumnDetail(
                ($type['schema'] ? $type['schema'].' <fg=gray;options=bold>/</> ' : '').$type['name'],
                $type['type'].' <fg=gray;options=bold>/</> '.$type['category']
            ));
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

            $this->newLine();
        }
    }
}
