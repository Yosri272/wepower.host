<?php

namespace Illuminate\Foundation\Testing\Concerns;

use Illuminate\Contracts\Support\Jsonable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Events\QueryExecuted;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Testing\Constraints\CountInDatabase;
use Illuminate\Testing\Constraints\HasInDatabase;
use Illuminate\Testing\Constraints\NotSoftDeletedInDatabase;
use Illuminate\Testing\Constraints\SoftDeletedInDatabase;
use PHPUnit\Framework\Constraint\LogicalNot as ReverseConstraint;

trait InteractsWithDatabase
{
    /**
     * Assert that a given where condition exists in the database.
     *
<<<<<<< HEAD
     * @param  \Illuminate\Database\Eloquent\Model|string  $table
     * @param  array  $data
     * @param  string|null  $connection
     * @return $this
     */
    protected function assertDatabaseHas($table, array $data, $connection = null)
    {
=======
     * @param  \Illuminate\Database\Eloquent\Model|class-string<\Illuminate\Database\Eloquent\Model>|string  $table
     * @param  array<string, mixed>  $data
     * @param  string|null  $connection
     * @return $this
     */
    protected function assertDatabaseHas($table, array $data = [], $connection = null)
    {
        if ($table instanceof Model) {
            $data = [
                $table->getKeyName() => $table->getKey(),
                ...$data,
            ];
        }

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        $this->assertThat(
            $this->getTable($table), new HasInDatabase($this->getConnection($connection, $table), $data)
        );

        return $this;
    }

    /**
     * Assert that a given where condition does not exist in the database.
     *
<<<<<<< HEAD
     * @param  \Illuminate\Database\Eloquent\Model|string  $table
     * @param  array  $data
     * @param  string|null  $connection
     * @return $this
     */
    protected function assertDatabaseMissing($table, array $data, $connection = null)
    {
=======
     * @param  \Illuminate\Database\Eloquent\Model|class-string<\Illuminate\Database\Eloquent\Model>|string  $table
     * @param  array<string, mixed>  $data
     * @param  string|null  $connection
     * @return $this
     */
    protected function assertDatabaseMissing($table, array $data = [], $connection = null)
    {
        if ($table instanceof Model) {
            $data = [
                $table->getKeyName() => $table->getKey(),
                ...$data,
            ];
        }

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        $constraint = new ReverseConstraint(
            new HasInDatabase($this->getConnection($connection, $table), $data)
        );

        $this->assertThat($this->getTable($table), $constraint);

        return $this;
    }

    /**
     * Assert the count of table entries.
     *
<<<<<<< HEAD
     * @param  \Illuminate\Database\Eloquent\Model|string  $table
=======
     * @param  \Illuminate\Database\Eloquent\Model|class-string<\Illuminate\Database\Eloquent\Model>|string  $table
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * @param  int  $count
     * @param  string|null  $connection
     * @return $this
     */
    protected function assertDatabaseCount($table, int $count, $connection = null)
    {
        $this->assertThat(
            $this->getTable($table), new CountInDatabase($this->getConnection($connection, $table), $count)
        );

        return $this;
    }

    /**
     * Assert that the given table has no entries.
     *
<<<<<<< HEAD
     * @param  \Illuminate\Database\Eloquent\Model|string  $table
=======
     * @param  \Illuminate\Database\Eloquent\Model|class-string<\Illuminate\Database\Eloquent\Model>|string  $table
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * @param  string|null  $connection
     * @return $this
     */
    protected function assertDatabaseEmpty($table, $connection = null)
    {
        $this->assertThat(
            $this->getTable($table), new CountInDatabase($this->getConnection($connection, $table), 0)
        );

        return $this;
    }

    /**
     * Assert the given record has been "soft deleted".
     *
<<<<<<< HEAD
     * @param  \Illuminate\Database\Eloquent\Model|string  $table
     * @param  array  $data
=======
     * @param  \Illuminate\Database\Eloquent\Model|class-string<\Illuminate\Database\Eloquent\Model>|string  $table
     * @param  array<string, mixed>  $data
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * @param  string|null  $connection
     * @param  string|null  $deletedAtColumn
     * @return $this
     */
    protected function assertSoftDeleted($table, array $data = [], $connection = null, $deletedAtColumn = 'deleted_at')
    {
        if ($this->isSoftDeletableModel($table)) {
            return $this->assertSoftDeleted(
                $table->getTable(),
                array_merge($data, [$table->getKeyName() => $table->getKey()]),
                $table->getConnectionName(),
                $table->getDeletedAtColumn()
            );
        }

        $this->assertThat(
            $this->getTable($table),
            new SoftDeletedInDatabase(
                $this->getConnection($connection, $table),
                $data,
                $this->getDeletedAtColumn($table, $deletedAtColumn)
            )
        );

        return $this;
    }

    /**
     * Assert the given record has not been "soft deleted".
     *
<<<<<<< HEAD
     * @param  \Illuminate\Database\Eloquent\Model|string  $table
     * @param  array  $data
=======
     * @param  \Illuminate\Database\Eloquent\Model|class-string<\Illuminate\Database\Eloquent\Model>|string  $table
     * @param  array<string, mixed>  $data
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * @param  string|null  $connection
     * @param  string|null  $deletedAtColumn
     * @return $this
     */
    protected function assertNotSoftDeleted($table, array $data = [], $connection = null, $deletedAtColumn = 'deleted_at')
    {
        if ($this->isSoftDeletableModel($table)) {
            return $this->assertNotSoftDeleted(
                $table->getTable(),
                array_merge($data, [$table->getKeyName() => $table->getKey()]),
                $table->getConnectionName(),
                $table->getDeletedAtColumn()
            );
        }

        $this->assertThat(
            $this->getTable($table),
            new NotSoftDeletedInDatabase(
                $this->getConnection($connection, $table),
                $data,
                $this->getDeletedAtColumn($table, $deletedAtColumn)
            )
        );

        return $this;
    }

    /**
     * Assert the given model exists in the database.
     *
<<<<<<< HEAD
     * @param  \Illuminate\Database\Eloquent\Model  $model
=======
     * @param  \Illuminate\Database\Eloquent\Model|class-string<\Illuminate\Database\Eloquent\Model>|string  $model
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * @return $this
     */
    protected function assertModelExists($model)
    {
<<<<<<< HEAD
        return $this->assertDatabaseHas(
            $model->getTable(),
            [$model->getKeyName() => $model->getKey()],
            $model->getConnectionName()
        );
=======
        return $this->assertDatabaseHas($model);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Assert the given model does not exist in the database.
     *
<<<<<<< HEAD
     * @param  \Illuminate\Database\Eloquent\Model  $model
=======
     * @param  \Illuminate\Database\Eloquent\Model|class-string<\Illuminate\Database\Eloquent\Model>|string  $model
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * @return $this
     */
    protected function assertModelMissing($model)
    {
<<<<<<< HEAD
        return $this->assertDatabaseMissing(
            $model->getTable(),
            [$model->getKeyName() => $model->getKey()],
            $model->getConnectionName()
        );
=======
        return $this->assertDatabaseMissing($model);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Specify the number of database queries that should occur throughout the test.
     *
     * @param  int  $expected
     * @param  string|null  $connection
     * @return $this
     */
    public function expectsDatabaseQueryCount($expected, $connection = null)
    {
        with($this->getConnection($connection), function ($connectionInstance) use ($expected, $connection) {
            $actual = 0;

            $connectionInstance->listen(function (QueryExecuted $event) use (&$actual, $connectionInstance, $connection) {
                if (is_null($connection) || $connectionInstance === $event->connection) {
                    $actual++;
                }
            });

            $this->beforeApplicationDestroyed(function () use (&$actual, $expected, $connectionInstance) {
                $this->assertSame(
<<<<<<< HEAD
                    $actual,
                    $expected,
=======
                    $expected,
                    $actual,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                    "Expected {$expected} database queries on the [{$connectionInstance->getName()}] connection. {$actual} occurred."
                );
            });
        });

        return $this;
    }

    /**
     * Determine if the argument is a soft deletable model.
     *
     * @param  mixed  $model
     * @return bool
     */
    protected function isSoftDeletableModel($model)
    {
        return $model instanceof Model
            && in_array(SoftDeletes::class, class_uses_recursive($model));
    }

    /**
     * Cast a JSON string to a database compatible type.
     *
     * @param  array|object|string  $value
<<<<<<< HEAD
     * @return \Illuminate\Contracts\Database\Query\Expression
     */
    public function castAsJson($value)
=======
     * @param  string|null  $connection
     * @return \Illuminate\Contracts\Database\Query\Expression
     */
    public function castAsJson($value, $connection = null)
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        if ($value instanceof Jsonable) {
            $value = $value->toJson();
        } elseif (is_array($value) || is_object($value)) {
            $value = json_encode($value);
        }

<<<<<<< HEAD
        $value = DB::connection()->getPdo()->quote($value);

        return DB::raw(
            DB::connection()->getQueryGrammar()->compileJsonValueCast($value)
=======
        $db = DB::connection($connection);

        $value = $db->getPdo()->quote($value);

        return $db->raw(
            $db->getQueryGrammar()->compileJsonValueCast($value)
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        );
    }

    /**
     * Get the database connection.
     *
     * @param  string|null  $connection
<<<<<<< HEAD
     * @param  string|null  $table
=======
     * @param  \Illuminate\Database\Eloquent\Model|class-string<\Illuminate\Database\Eloquent\Model>|string  $table
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * @return \Illuminate\Database\Connection
     */
    protected function getConnection($connection = null, $table = null)
    {
        $database = $this->app->make('db');

        $connection = $connection ?: $this->getTableConnection($table) ?: $database->getDefaultConnection();

        return $database->connection($connection);
    }

    /**
     * Get the table name from the given model or string.
     *
<<<<<<< HEAD
     * @param  \Illuminate\Database\Eloquent\Model|string  $table
=======
     * @param  \Illuminate\Database\Eloquent\Model|class-string<\Illuminate\Database\Eloquent\Model>|string  $table
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * @return string
     */
    protected function getTable($table)
    {
<<<<<<< HEAD
=======
        if ($table instanceof Model) {
            return $table->getTable();
        }

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        return $this->newModelFor($table)?->getTable() ?: $table;
    }

    /**
     * Get the table connection specified in the given model.
     *
<<<<<<< HEAD
     * @param  \Illuminate\Database\Eloquent\Model|string  $table
=======
     * @param  \Illuminate\Database\Eloquent\Model|class-string<\Illuminate\Database\Eloquent\Model>|string  $table
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * @return string|null
     */
    protected function getTableConnection($table)
    {
<<<<<<< HEAD
=======
        if ($table instanceof Model) {
            return $table->getConnectionName();
        }

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        return $this->newModelFor($table)?->getConnectionName();
    }

    /**
     * Get the table column name used for soft deletes.
     *
<<<<<<< HEAD
     * @param  string  $table
=======
     * @param  \Illuminate\Database\Eloquent\Model|class-string<\Illuminate\Database\Eloquent\Model>|string  $table
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * @param  string  $defaultColumnName
     * @return string
     */
    protected function getDeletedAtColumn($table, $defaultColumnName = 'deleted_at')
    {
        return $this->newModelFor($table)?->getDeletedAtColumn() ?: $defaultColumnName;
    }

    /**
     * Get the model entity from the given model or string.
     *
<<<<<<< HEAD
     * @param  \Illuminate\Database\Eloquent\Model|string  $table
=======
     * @param  \Illuminate\Database\Eloquent\Model|class-string<\Illuminate\Database\Eloquent\Model>|string  $table
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    protected function newModelFor($table)
    {
        return is_subclass_of($table, Model::class) ? (new $table) : null;
    }

    /**
     * Seed a given database connection.
     *
<<<<<<< HEAD
     * @param  array|string  $class
=======
     * @param  list<string>|class-string<\Illuminate\Database\Seeder>|string  $class
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * @return $this
     */
    public function seed($class = 'Database\\Seeders\\DatabaseSeeder')
    {
        foreach (Arr::wrap($class) as $class) {
            $this->artisan('db:seed', ['--class' => $class, '--no-interaction' => true]);
        }

        return $this;
    }
}
