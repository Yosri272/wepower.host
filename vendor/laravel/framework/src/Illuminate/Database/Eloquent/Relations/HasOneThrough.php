<?php

namespace Illuminate\Database\Eloquent\Relations;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Collection;
=======
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Concerns\InteractsWithDictionary;
use Illuminate\Database\Eloquent\Relations\Concerns\SupportsDefaultModels;

<<<<<<< HEAD
class HasOneThrough extends HasManyThrough
{
    use InteractsWithDictionary, SupportsDefaultModels;

    /**
     * Get the results of the relationship.
     *
     * @return mixed
     */
=======
/**
 * @template TRelatedModel of \Illuminate\Database\Eloquent\Model
 * @template TIntermediateModel of \Illuminate\Database\Eloquent\Model
 * @template TDeclaringModel of \Illuminate\Database\Eloquent\Model
 *
 * @extends \Illuminate\Database\Eloquent\Relations\HasOneOrManyThrough<TRelatedModel, TIntermediateModel, TDeclaringModel, ?TRelatedModel>
 */
class HasOneThrough extends HasOneOrManyThrough
{
    use InteractsWithDictionary, SupportsDefaultModels;

    /** @inheritDoc */
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function getResults()
    {
        return $this->first() ?: $this->getDefaultFor($this->farParent);
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
        $dictionary = $this->buildDictionary($results);

        // Once we have the dictionary we can simply spin through the parent models to
        // link them up with their children using the keyed dictionary to make the
        // matching very convenient and easy work. Then we'll just return them.
        foreach ($models as $model) {
            if (isset($dictionary[$key = $this->getDictionaryKey($model->getAttribute($this->localKey))])) {
                $value = $dictionary[$key];
                $model->setRelation(
                    $relation, reset($value)
                );
            }
        }

        return $models;
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
    public function newRelatedInstanceFor(Model $parent)
    {
        return $this->related->newInstance();
    }
}
