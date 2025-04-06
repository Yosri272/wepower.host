<?php

namespace Illuminate\Database\Eloquent\Relations;

use Closure;
use Illuminate\Contracts\Database\Eloquent\Builder as BuilderContract;
use Illuminate\Database\Eloquent\Builder;
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Collection;
=======
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\MultipleRecordsFoundException;
use Illuminate\Database\Query\Expression;
<<<<<<< HEAD
use Illuminate\Support\Traits\ForwardsCalls;
use Illuminate\Support\Traits\Macroable;

=======
use Illuminate\Support\Collection as BaseCollection;
use Illuminate\Support\Traits\ForwardsCalls;
use Illuminate\Support\Traits\Macroable;

/**
 * @template TRelatedModel of \Illuminate\Database\Eloquent\Model
 * @template TDeclaringModel of \Illuminate\Database\Eloquent\Model
 * @template TResult
 *
 * @mixin \Illuminate\Database\Eloquent\Builder<TRelatedModel>
 */
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
abstract class Relation implements BuilderContract
{
    use ForwardsCalls, Macroable {
        Macroable::__call as macroCall;
    }

    /**
     * The Eloquent query builder instance.
     *
<<<<<<< HEAD
     * @var \Illuminate\Database\Eloquent\Builder
=======
     * @var \Illuminate\Database\Eloquent\Builder<TRelatedModel>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    protected $query;

    /**
     * The parent model instance.
     *
<<<<<<< HEAD
     * @var \Illuminate\Database\Eloquent\Model
=======
     * @var TDeclaringModel
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    protected $parent;

    /**
     * The related model instance.
     *
<<<<<<< HEAD
     * @var \Illuminate\Database\Eloquent\Model
=======
     * @var TRelatedModel
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    protected $related;

    /**
     * Indicates whether the eagerly loaded relation should implicitly return an empty collection.
     *
     * @var bool
     */
    protected $eagerKeysWereEmpty = false;

    /**
     * Indicates if the relation is adding constraints.
     *
     * @var bool
     */
    protected static $constraints = true;

    /**
<<<<<<< HEAD
     * An array to map class names to their morph names in the database.
     *
     * @var array
=======
     * An array to map morph names to their class names in the database.
     *
     * @var array<string, class-string<\Illuminate\Database\Eloquent\Model>>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public static $morphMap = [];

    /**
     * Prevents morph relationships without a morph map.
     *
     * @var bool
     */
    protected static $requireMorphMap = false;

    /**
     * The count of self joins.
     *
     * @var int
     */
    protected static $selfJoinCount = 0;

    /**
     * Create a new relation instance.
     *
<<<<<<< HEAD
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  \Illuminate\Database\Eloquent\Model  $parent
=======
     * @param  \Illuminate\Database\Eloquent\Builder<TRelatedModel>  $query
     * @param  TDeclaringModel  $parent
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * @return void
     */
    public function __construct(Builder $query, Model $parent)
    {
        $this->query = $query;
        $this->parent = $parent;
        $this->related = $query->getModel();

        $this->addConstraints();
    }

    /**
     * Run a callback with constraints disabled on the relation.
     *
<<<<<<< HEAD
     * @param  \Closure  $callback
     * @return mixed
=======
     * @template TReturn of mixed
     *
     * @param  Closure(): TReturn  $callback
     * @return TReturn
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public static function noConstraints(Closure $callback)
    {
        $previous = static::$constraints;

        static::$constraints = false;

        // When resetting the relation where clause, we want to shift the first element
        // off of the bindings, leaving only the constraints that the developers put
        // as "extra" on the relationships, and not original relation constraints.
        try {
            return $callback();
        } finally {
            static::$constraints = $previous;
        }
    }

    /**
     * Set the base constraints on the relation query.
     *
     * @return void
     */
    abstract public function addConstraints();

    /**
     * Set the constraints for an eager load of the relation.
     *
<<<<<<< HEAD
     * @param  array  $models
=======
     * @param  array<int, TDeclaringModel>  $models
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * @return void
     */
    abstract public function addEagerConstraints(array $models);

    /**
     * Initialize the relation on a set of models.
     *
<<<<<<< HEAD
     * @param  array  $models
     * @param  string  $relation
     * @return array
=======
     * @param  array<int, TDeclaringModel>  $models
     * @param  string  $relation
     * @return array<int, TDeclaringModel>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    abstract public function initRelation(array $models, $relation);

    /**
     * Match the eagerly loaded results to their parents.
     *
<<<<<<< HEAD
     * @param  array  $models
     * @param  \Illuminate\Database\Eloquent\Collection  $results
     * @param  string  $relation
     * @return array
     */
    abstract public function match(array $models, Collection $results, $relation);
=======
     * @param  array<int, TDeclaringModel>  $models
     * @param  \Illuminate\Database\Eloquent\Collection<int, TRelatedModel>  $results
     * @param  string  $relation
     * @return array<int, TDeclaringModel>
     */
    abstract public function match(array $models, EloquentCollection $results, $relation);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

    /**
     * Get the results of the relationship.
     *
<<<<<<< HEAD
     * @return mixed
=======
     * @return TResult
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    abstract public function getResults();

    /**
     * Get the relationship for eager loading.
     *
<<<<<<< HEAD
     * @return \Illuminate\Database\Eloquent\Collection
=======
     * @return \Illuminate\Database\Eloquent\Collection<int, TRelatedModel>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function getEager()
    {
        return $this->eagerKeysWereEmpty
                    ? $this->query->getModel()->newCollection()
                    : $this->get();
    }

    /**
     * Execute the query and get the first result if it's the sole matching record.
     *
     * @param  array|string  $columns
<<<<<<< HEAD
     * @return \Illuminate\Database\Eloquent\Model
     *
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException<\Illuminate\Database\Eloquent\Model>
=======
     * @return TRelatedModel
     *
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException<TRelatedModel>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * @throws \Illuminate\Database\MultipleRecordsFoundException
     */
    public function sole($columns = ['*'])
    {
        $result = $this->take(2)->get($columns);

        $count = $result->count();

        if ($count === 0) {
            throw (new ModelNotFoundException)->setModel(get_class($this->related));
        }

        if ($count > 1) {
            throw new MultipleRecordsFoundException($count);
        }

        return $result->first();
    }

    /**
     * Execute the query as a "select" statement.
     *
     * @param  array  $columns
<<<<<<< HEAD
     * @return \Illuminate\Database\Eloquent\Collection
=======
     * @return \Illuminate\Database\Eloquent\Collection<int, TRelatedModel>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function get($columns = ['*'])
    {
        return $this->query->get($columns);
    }

    /**
     * Touch all of the related models for the relationship.
     *
     * @return void
     */
    public function touch()
    {
        $model = $this->getRelated();

        if (! $model::isIgnoringTouch()) {
            $this->rawUpdate([
                $model->getUpdatedAtColumn() => $model->freshTimestampString(),
            ]);
        }
    }

    /**
     * Run a raw update against the base query.
     *
     * @param  array  $attributes
     * @return int
     */
    public function rawUpdate(array $attributes = [])
    {
        return $this->query->withoutGlobalScopes()->update($attributes);
    }

    /**
     * Add the constraints for a relationship count query.
     *
<<<<<<< HEAD
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  \Illuminate\Database\Eloquent\Builder  $parentQuery
     * @return \Illuminate\Database\Eloquent\Builder
=======
     * @param  \Illuminate\Database\Eloquent\Builder<TRelatedModel>  $query
     * @param  \Illuminate\Database\Eloquent\Builder<TDeclaringModel>  $parentQuery
     * @return \Illuminate\Database\Eloquent\Builder<TRelatedModel>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function getRelationExistenceCountQuery(Builder $query, Builder $parentQuery)
    {
        return $this->getRelationExistenceQuery(
            $query, $parentQuery, new Expression('count(*)')
        )->setBindings([], 'select');
    }

    /**
     * Add the constraints for an internal relationship existence query.
     *
     * Essentially, these queries compare on column names like whereColumn.
     *
<<<<<<< HEAD
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  \Illuminate\Database\Eloquent\Builder  $parentQuery
     * @param  array|mixed  $columns
     * @return \Illuminate\Database\Eloquent\Builder
=======
     * @param  \Illuminate\Database\Eloquent\Builder<TRelatedModel>  $query
     * @param  \Illuminate\Database\Eloquent\Builder<TDeclaringModel>  $parentQuery
     * @param  array|mixed  $columns
     * @return \Illuminate\Database\Eloquent\Builder<TRelatedModel>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function getRelationExistenceQuery(Builder $query, Builder $parentQuery, $columns = ['*'])
    {
        return $query->select($columns)->whereColumn(
            $this->getQualifiedParentKeyName(), '=', $this->getExistenceCompareKey()
        );
    }

    /**
     * Get a relationship join table hash.
     *
     * @param  bool  $incrementJoinCount
     * @return string
     */
    public function getRelationCountHash($incrementJoinCount = true)
    {
        return 'laravel_reserved_'.($incrementJoinCount ? static::$selfJoinCount++ : static::$selfJoinCount);
    }

    /**
     * Get all of the primary keys for an array of models.
     *
<<<<<<< HEAD
     * @param  array  $models
     * @param  string|null  $key
     * @return array
     */
    protected function getKeys(array $models, $key = null)
    {
        return collect($models)->map(function ($value) use ($key) {
=======
     * @param  array<int, TDeclaringModel>  $models
     * @param  string|null  $key
     * @return array<int, int|string|null>
     */
    protected function getKeys(array $models, $key = null)
    {
        return (new BaseCollection($models))->map(function ($value) use ($key) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            return $key ? $value->getAttribute($key) : $value->getKey();
        })->values()->unique(null, true)->sort()->all();
    }

    /**
     * Get the query builder that will contain the relationship constraints.
     *
<<<<<<< HEAD
     * @return \Illuminate\Database\Eloquent\Builder
=======
     * @return \Illuminate\Database\Eloquent\Builder<TRelatedModel>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    protected function getRelationQuery()
    {
        return $this->query;
    }

    /**
     * Get the underlying query for the relation.
     *
<<<<<<< HEAD
     * @return \Illuminate\Database\Eloquent\Builder
=======
     * @return \Illuminate\Database\Eloquent\Builder<TRelatedModel>
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * Get the base query builder driving the Eloquent builder.
     *
     * @return \Illuminate\Database\Query\Builder
     */
    public function getBaseQuery()
    {
        return $this->query->getQuery();
    }

    /**
     * Get a base query builder instance.
     *
     * @return \Illuminate\Database\Query\Builder
     */
    public function toBase()
    {
        return $this->query->toBase();
    }

    /**
     * Get the parent model of the relation.
     *
<<<<<<< HEAD
     * @return \Illuminate\Database\Eloquent\Model
=======
     * @return TDeclaringModel
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Get the fully qualified parent key name.
     *
     * @return string
     */
    public function getQualifiedParentKeyName()
    {
        return $this->parent->getQualifiedKeyName();
    }

    /**
     * Get the related model of the relation.
     *
<<<<<<< HEAD
     * @return \Illuminate\Database\Eloquent\Model
=======
     * @return TRelatedModel
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function getRelated()
    {
        return $this->related;
    }

    /**
     * Get the name of the "created at" column.
     *
     * @return string
     */
    public function createdAt()
    {
        return $this->parent->getCreatedAtColumn();
    }

    /**
     * Get the name of the "updated at" column.
     *
     * @return string
     */
    public function updatedAt()
    {
        return $this->parent->getUpdatedAtColumn();
    }

    /**
     * Get the name of the related model's "updated at" column.
     *
     * @return string
     */
    public function relatedUpdatedAt()
    {
        return $this->related->getUpdatedAtColumn();
    }

    /**
     * Add a whereIn eager constraint for the given set of model keys to be loaded.
     *
     * @param  string  $whereIn
     * @param  string  $key
     * @param  array  $modelKeys
<<<<<<< HEAD
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return void
     */
    protected function whereInEager(string $whereIn, string $key, array $modelKeys, $query = null)
=======
     * @param  \Illuminate\Database\Eloquent\Builder<TRelatedModel>|null  $query
     * @return void
     */
    protected function whereInEager(string $whereIn, string $key, array $modelKeys, ?Builder $query = null)
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        ($query ?? $this->query)->{$whereIn}($key, $modelKeys);

        if ($modelKeys === []) {
            $this->eagerKeysWereEmpty = true;
        }
    }

    /**
     * Get the name of the "where in" method for eager loading.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @param  string  $key
     * @return string
     */
    protected function whereInMethod(Model $model, $key)
    {
        return $model->getKeyName() === last(explode('.', $key))
                    && in_array($model->getKeyType(), ['int', 'integer'])
                        ? 'whereIntegerInRaw'
                        : 'whereIn';
    }

    /**
     * Prevent polymorphic relationships from being used without model mappings.
     *
     * @param  bool  $requireMorphMap
     * @return void
     */
    public static function requireMorphMap($requireMorphMap = true)
    {
        static::$requireMorphMap = $requireMorphMap;
    }

    /**
     * Determine if polymorphic relationships require explicit model mapping.
     *
     * @return bool
     */
    public static function requiresMorphMap()
    {
        return static::$requireMorphMap;
    }

    /**
     * Define the morph map for polymorphic relations and require all morphed models to be explicitly mapped.
     *
<<<<<<< HEAD
     * @param  array  $map
=======
     * @param  array<string, class-string<\Illuminate\Database\Eloquent\Model>>  $map
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * @param  bool  $merge
     * @return array
     */
    public static function enforceMorphMap(array $map, $merge = true)
    {
        static::requireMorphMap();

        return static::morphMap($map, $merge);
    }

    /**
     * Set or get the morph map for polymorphic relations.
     *
<<<<<<< HEAD
     * @param  array|null  $map
     * @param  bool  $merge
     * @return array
     */
    public static function morphMap(array $map = null, $merge = true)
=======
     * @param  array<string, class-string<\Illuminate\Database\Eloquent\Model>>|null  $map
     * @param  bool  $merge
     * @return array<string, class-string<\Illuminate\Database\Eloquent\Model>>
     */
    public static function morphMap(?array $map = null, $merge = true)
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        $map = static::buildMorphMapFromModels($map);

        if (is_array($map)) {
            static::$morphMap = $merge && static::$morphMap
                            ? $map + static::$morphMap : $map;
        }

        return static::$morphMap;
    }

    /**
     * Builds a table-keyed array from model class names.
     *
<<<<<<< HEAD
     * @param  string[]|null  $models
     * @return array|null
     */
    protected static function buildMorphMapFromModels(array $models = null)
=======
     * @param  list<class-string<\Illuminate\Database\Eloquent\Model>>|null  $models
     * @return array<string, class-string<\Illuminate\Database\Eloquent\Model>>|null
     */
    protected static function buildMorphMapFromModels(?array $models = null)
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        if (is_null($models) || ! array_is_list($models)) {
            return $models;
        }

        return array_combine(array_map(function ($model) {
            return (new $model)->getTable();
        }, $models), $models);
    }

    /**
     * Get the model associated with a custom polymorphic type.
     *
     * @param  string  $alias
<<<<<<< HEAD
     * @return string|null
=======
     * @return class-string<\Illuminate\Database\Eloquent\Model>|null
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public static function getMorphedModel($alias)
    {
        return static::$morphMap[$alias] ?? null;
    }

    /**
<<<<<<< HEAD
=======
     * Get the alias associated with a custom polymorphic class.
     *
     * @param  class-string<\Illuminate\Database\Eloquent\Model>  $className
     * @return int|string
     */
    public static function getMorphAlias(string $className)
    {
        return array_search($className, static::$morphMap, strict: true) ?: $className;
    }

    /**
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * Handle dynamic method calls to the relationship.
     *
     * @param  string  $method
     * @param  array  $parameters
     * @return mixed
     */
    public function __call($method, $parameters)
    {
        if (static::hasMacro($method)) {
            return $this->macroCall($method, $parameters);
        }

        return $this->forwardDecoratedCallTo($this->query, $method, $parameters);
    }

    /**
     * Force a clone of the underlying query builder when cloning.
     *
     * @return void
     */
    public function __clone()
    {
        $this->query = clone $this->query;
    }
}
