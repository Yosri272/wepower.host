<?php

namespace Illuminate\Database\Eloquent\Relations;

<<<<<<< HEAD
use BackedEnum;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
=======
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Concerns\ComparesRelatedModels;
use Illuminate\Database\Eloquent\Relations\Concerns\InteractsWithDictionary;
use Illuminate\Database\Eloquent\Relations\Concerns\SupportsDefaultModels;

<<<<<<< HEAD
=======
use function Illuminate\Support\enum_value;

/**
 * @template TRelatedModel of \Illuminate\Database\Eloquent\Model
 * @template TDeclaringModel of \Illuminate\Database\Eloquent\Model
 *
 * @extends \Illuminate\Database\Eloquent\Relations\Relation<TRelatedModel, TDeclaringModel, ?TRelatedModel>
 */
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
class BelongsTo extends Relation
{
    use ComparesRelatedModels,
        InteractsWithDictionary,
        SupportsDefaultModels;

    /**
     * The child model instance of the relation.
     *
<<<<<<< HEAD
     * @var \Illuminate\Database\Eloquent\Model
=======
     * @var TDeclaringModel
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    protected $child;

    /**
     * The foreign key of the parent model.
     *
     * @var string
     */
    protected $foreignKey;

    /**
     * The associated key on the parent model.
     *
     * @var string
     */
    protected $ownerKey;

    /**
     * The name of the relationship.
     *
     * @var string
     */
    protected $relationName;

    /**
     * Create a new belongs to relationship instance.
     *
<<<<<<< HEAD
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  \Illuminate\Database\Eloquent\Model  $child
=======
     * @param  \Illuminate\Database\Eloquent\Builder<TRelatedModel>  $query
     * @param  TDeclaringModel  $child
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * @param  string  $foreignKey
     * @param  string  $ownerKey
     * @param  string  $relationName
     * @return void
     */
    public function __construct(Builder $query, Model $child, $foreignKey, $ownerKey, $relationName)
    {
        $this->ownerKey = $ownerKey;
        $this->relationName = $relationName;
        $this->foreignKey = $foreignKey;

        // In the underlying base relationship class, this variable is referred to as
        // the "parent" since most relationships are not inversed. But, since this
        // one is we will create a "child" variable for much better readability.
        $this->child = $child;

        parent::__construct($query, $child);
    }

<<<<<<< HEAD
    /**
     * Get the results of the relationship.
     *
     * @return mixed
     */
=======
    /** @inheritDoc */
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function getResults()
    {
        if (is_null($this->getForeignKeyFrom($this->child))) {
            return $this->getDefaultFor($this->parent);
        }

        return $this->query->first() ?: $this->getDefaultFor($this->parent);
    }

    /**
     * Set the base constraints on the relation query.
     *
     * @return void
     */
    public function addConstraints()
    {
        if (static::$constraints) {
            // For belongs to relationships, which are essentially the inverse of has one
            // or has many relationships, we need to actually query on the primary key
            // of the related models matching on the foreign key that's on a parent.
<<<<<<< HEAD
            $table = $this->related->getTable();

            $this->query->where($table.'.'.$this->ownerKey, '=', $this->getForeignKeyFrom($this->child));
        }
    }

    /**
     * Set the constraints for an eager load of the relation.
     *
     * @param  array  $models
     * @return void
     */
=======
            $key = $this->getQualifiedOwnerKeyName();

            $this->query->where($key, '=', $this->getForeignKeyFrom($this->child));
        }
    }

    /** @inheritDoc */
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function addEagerConstraints(array $models)
    {
        // We'll grab the primary key name of the related models since it could be set to
        // a non-standard name and not "id". We will then construct the constraint for
        // our eagerly loading query so it returns the proper models from execution.
<<<<<<< HEAD
        $key = $this->related->getTable().'.'.$this->ownerKey;
=======
        $key = $this->getQualifiedOwnerKeyName();
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        $whereIn = $this->whereInMethod($this->related, $this->ownerKey);

        $this->whereInEager($whereIn, $key, $this->getEagerModelKeys($models));
    }

    /**
     * Gather the keys from an array of related models.
     *
<<<<<<< HEAD
     * @param  array  $models
=======
     * @param  array<int, TDeclaringModel>  $models
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * @return array
     */
    protected function getEagerModelKeys(array $models)
    {
        $keys = [];

        // First we need to gather all of the keys from the parent models so we know what
        // to query for via the eager loading query. We will add them to an array then
        // execute a "where in" statement to gather up all of those related records.
        foreach ($models as $model) {
            if (! is_null($value = $this->getForeignKeyFrom($model))) {
                $keys[] = $value;
            }
        }

        sort($keys);

        return array_values(array_unique($keys));
    }

<<<<<<< HEAD
    /**
     * Initialize the relation on a set of models.
     *
     * @param  array  $models
     * @param  string  $relation
     * @return array
     */
=======
    /** @inheritDoc */
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function initRelation(array $models, $relation)
    {
        foreach ($models as $model) {
            $model->setRelation($relation, $this->getDefaultFor($model));
        }

        return $models;
    }

<<<<<<< HEAD
    /**
     * Match the eagerly loaded results to their parents.
     *
     * @param  array  $models
     * @param  \Illuminate\Database\Eloquent\Collection  $results
     * @param  string  $relation
     * @return array
     */
    public function match(array $models, Collection $results, $relation)
=======
    /** @inheritDoc */
    public function match(array $models, EloquentCollection $results, $relation)
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    {
        // First we will get to build a dictionary of the child models by their primary
        // key of the relationship, then we can easily match the children back onto
        // the parents using that dictionary and the primary key of the children.
        $dictionary = [];

        foreach ($results as $result) {
            $attribute = $this->getDictionaryKey($this->getRelatedKeyFrom($result));

            $dictionary[$attribute] = $result;
        }

        // Once we have the dictionary constructed, we can loop through all the parents
        // and match back onto their children using these keys of the dictionary and
        // the primary key of the children to map them onto the correct instances.
        foreach ($models as $model) {
            $attribute = $this->getDictionaryKey($this->getForeignKeyFrom($model));

            if (isset($dictionary[$attribute])) {
                $model->setRelation($relation, $dictionary[$attribute]);
            }
        }

        return $models;
    }

    /**
     * Associate the model instance to the given parent.
     *
<<<<<<< HEAD
     * @param  \Illuminate\Database\Eloquent\Model|int|string|null  $model
     * @return \Illuminate\Database\Eloquent\Model
=======
     * @param  TRelatedModel|int|string|null  $model
     * @return TDeclaringModel
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function associate($model)
    {
        $ownerKey = $model instanceof Model ? $model->getAttribute($this->ownerKey) : $model;

        $this->child->setAttribute($this->foreignKey, $ownerKey);

        if ($model instanceof Model) {
            $this->child->setRelation($this->relationName, $model);
        } else {
            $this->child->unsetRelation($this->relationName);
        }

        return $this->child;
    }

    /**
     * Dissociate previously associated model from the given parent.
     *
<<<<<<< HEAD
     * @return \Illuminate\Database\Eloquent\Model
=======
     * @return TDeclaringModel
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function dissociate()
    {
        $this->child->setAttribute($this->foreignKey, null);

        return $this->child->setRelation($this->relationName, null);
    }

    /**
     * Alias of "dissociate" method.
     *
<<<<<<< HEAD
     * @return \Illuminate\Database\Eloquent\Model
=======
     * @return TDeclaringModel
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function disassociate()
    {
        return $this->dissociate();
    }

    /**
<<<<<<< HEAD
     * Add the constraints for a relationship query.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  \Illuminate\Database\Eloquent\Builder  $parentQuery
     * @param  array|mixed  $columns
     * @return \Illuminate\Database\Eloquent\Builder
     */
=======
     * Touch all of the related models for the relationship.
     *
     * @return void
     */
    public function touch()
    {
        if (! is_null($this->getParentKey())) {
            parent::touch();
        }
    }

    /** @inheritDoc */
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function getRelationExistenceQuery(Builder $query, Builder $parentQuery, $columns = ['*'])
    {
        if ($parentQuery->getQuery()->from == $query->getQuery()->from) {
            return $this->getRelationExistenceQueryForSelfRelation($query, $parentQuery, $columns);
        }

        return $query->select($columns)->whereColumn(
            $this->getQualifiedForeignKeyName(), '=', $query->qualifyColumn($this->ownerKey)
        );
    }

    /**
     * Add the constraints for a relationship query on the same table.
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
    public function getRelationExistenceQueryForSelfRelation(Builder $query, Builder $parentQuery, $columns = ['*'])
    {
        $query->select($columns)->from(
            $query->getModel()->getTable().' as '.$hash = $this->getRelationCountHash()
        );

        $query->getModel()->setTable($hash);

        return $query->whereColumn(
            $hash.'.'.$this->ownerKey, '=', $this->getQualifiedForeignKeyName()
        );
    }

    /**
     * Determine if the related model has an auto-incrementing ID.
     *
     * @return bool
     */
    protected function relationHasIncrementingId()
    {
        return $this->related->getIncrementing() &&
            in_array($this->related->getKeyType(), ['int', 'integer']);
    }

    /**
     * Make a new related instance for the given model.
     *
<<<<<<< HEAD
     * @param  \Illuminate\Database\Eloquent\Model  $parent
     * @return \Illuminate\Database\Eloquent\Model
=======
     * @param  TDeclaringModel  $parent
     * @return TRelatedModel
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    protected function newRelatedInstanceFor(Model $parent)
    {
        return $this->related->newInstance();
    }

    /**
     * Get the child of the relationship.
     *
<<<<<<< HEAD
     * @return \Illuminate\Database\Eloquent\Model
=======
     * @return TDeclaringModel
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function getChild()
    {
        return $this->child;
    }

    /**
     * Get the foreign key of the relationship.
     *
     * @return string
     */
    public function getForeignKeyName()
    {
        return $this->foreignKey;
    }

    /**
     * Get the fully qualified foreign key of the relationship.
     *
     * @return string
     */
    public function getQualifiedForeignKeyName()
    {
        return $this->child->qualifyColumn($this->foreignKey);
    }

    /**
     * Get the key value of the child's foreign key.
     *
     * @return mixed
     */
    public function getParentKey()
    {
        return $this->getForeignKeyFrom($this->child);
    }

    /**
     * Get the associated key of the relationship.
     *
     * @return string
     */
    public function getOwnerKeyName()
    {
        return $this->ownerKey;
    }

    /**
     * Get the fully qualified associated key of the relationship.
     *
     * @return string
     */
    public function getQualifiedOwnerKeyName()
    {
        return $this->related->qualifyColumn($this->ownerKey);
    }

    /**
<<<<<<< HEAD
     * Get the value of the model's associated key.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @return mixed
=======
     * Get the value of the model's foreign key.
     *
     * @param  TRelatedModel  $model
     * @return int|string
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    protected function getRelatedKeyFrom(Model $model)
    {
        return $model->{$this->ownerKey};
    }

    /**
     * Get the value of the model's foreign key.
     *
<<<<<<< HEAD
     * @param  \Illuminate\Database\Eloquent\Model  $model
=======
     * @param  TDeclaringModel  $model
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     * @return mixed
     */
    protected function getForeignKeyFrom(Model $model)
    {
        $foreignKey = $model->{$this->foreignKey};

<<<<<<< HEAD
        return $foreignKey instanceof BackedEnum ? $foreignKey->value : $foreignKey;
=======
        return enum_value($foreignKey);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Get the name of the relationship.
     *
     * @return string
     */
    public function getRelationName()
    {
        return $this->relationName;
    }
}
