<?php

namespace Illuminate\Database\Eloquent;

use BadMethodCallException;
use Illuminate\Database\Eloquent\Relations\HasMany;
<<<<<<< HEAD
use Illuminate\Support\Str;

=======
use Illuminate\Database\Eloquent\Relations\MorphOneOrMany;
use Illuminate\Support\Str;
use Illuminate\Support\Stringable;

/**
 * @template TIntermediateModel of \Illuminate\Database\Eloquent\Model
 * @template TDeclaringModel of \Illuminate\Database\Eloquent\Model
 * @template TLocalRelationship of \Illuminate\Database\Eloquent\Relations\HasOneOrMany<TIntermediateModel, TDeclaringModel>
 */
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
class PendingHasThroughRelationship
{
    /**
     * The root model that the relationship exists on.
     *
<<<<<<< HEAD
     * @var \Illuminate\Database\Eloquent\Model
=======
     * @var TDeclaringModel
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    protected $rootModel;

    /**
     * The local relationship.
     *
<<<<<<< HEAD
     * @var \Illuminate\Database\Eloquent\Relations\HasMany|\Illuminate\Database\Eloquent\Relations\HasOne
=======
     * @var TLocalRelationship
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    protected $localRelationship;

    /**
     * Create a pending has-many-through or has-one-through relationship.
     *
<<<<<<< HEAD
     * @param  \Illuminate\Database\Eloquent\Model  $rootModel
     * @param  \Illuminate\Database\Eloquent\Relations\HasMany|\Illuminate\Database\Eloquent\Relations\HasOne  $localRelationship
=======
     * @param  TDeclaringModel  $rootModel
     * @param  TLocalRelationship  $localRelationship
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function __construct($rootModel, $localRelationship)
    {
        $this->rootModel = $rootModel;

        $this->localRelationship = $localRelationship;
    }

    /**
     * Define the distant relationship that this model has.
     *
<<<<<<< HEAD
     * @param  string|(callable(\Illuminate\Database\Eloquent\Model): (\Illuminate\Database\Eloquent\Relations\HasOne|\Illuminate\Database\Eloquent\Relations\HasMany))  $callback
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough|\Illuminate\Database\Eloquent\Relations\HasOneThrough
=======
     * @template TRelatedModel of \Illuminate\Database\Eloquent\Model
     *
     * @param  string|(callable(TIntermediateModel): (\Illuminate\Database\Eloquent\Relations\HasOne<TRelatedModel, TIntermediateModel>|\Illuminate\Database\Eloquent\Relations\HasMany<TRelatedModel, TIntermediateModel>|\Illuminate\Database\Eloquent\Relations\MorphOneOrMany<TRelatedModel, TIntermediateModel>))  $callback
     * @return (
     *     $callback is string
     *     ? \Illuminate\Database\Eloquent\Relations\HasManyThrough<\Illuminate\Database\Eloquent\Model, TIntermediateModel, TDeclaringModel>|\Illuminate\Database\Eloquent\Relations\HasOneThrough<\Illuminate\Database\Eloquent\Model, TIntermediateModel, TDeclaringModel>
     *     : (
     *         TLocalRelationship is \Illuminate\Database\Eloquent\Relations\HasMany<TIntermediateModel, TDeclaringModel>
     *         ? \Illuminate\Database\Eloquent\Relations\HasManyThrough<TRelatedModel, TIntermediateModel, TDeclaringModel>
     *         : (
     *              $callback is callable(TIntermediateModel): \Illuminate\Database\Eloquent\Relations\HasMany<TRelatedModel, TIntermediateModel>
     *              ? \Illuminate\Database\Eloquent\Relations\HasManyThrough<TRelatedModel, TIntermediateModel, TDeclaringModel>
     *              : \Illuminate\Database\Eloquent\Relations\HasOneThrough<TRelatedModel, TIntermediateModel, TDeclaringModel>
     *         )
     *     )
     * )
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
     */
    public function has($callback)
    {
        if (is_string($callback)) {
            $callback = fn () => $this->localRelationship->getRelated()->{$callback}();
        }

        $distantRelation = $callback($this->localRelationship->getRelated());

<<<<<<< HEAD
        if ($distantRelation instanceof HasMany) {
            return $this->rootModel->hasManyThrough(
=======
        if ($distantRelation instanceof HasMany || $this->localRelationship instanceof HasMany) {
            $returnedRelation = $this->rootModel->hasManyThrough(
                $distantRelation->getRelated()::class,
                $this->localRelationship->getRelated()::class,
                $this->localRelationship->getForeignKeyName(),
                $distantRelation->getForeignKeyName(),
                $this->localRelationship->getLocalKeyName(),
                $distantRelation->getLocalKeyName(),
            );
        } else {
            $returnedRelation = $this->rootModel->hasOneThrough(
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                $distantRelation->getRelated()::class,
                $this->localRelationship->getRelated()::class,
                $this->localRelationship->getForeignKeyName(),
                $distantRelation->getForeignKeyName(),
                $this->localRelationship->getLocalKeyName(),
                $distantRelation->getLocalKeyName(),
            );
        }

<<<<<<< HEAD
        return $this->rootModel->hasOneThrough(
            $distantRelation->getRelated()::class,
            $this->localRelationship->getRelated()::class,
            $this->localRelationship->getForeignKeyName(),
            $distantRelation->getForeignKeyName(),
            $this->localRelationship->getLocalKeyName(),
            $distantRelation->getLocalKeyName(),
        );
=======
        if ($this->localRelationship instanceof MorphOneOrMany) {
            $returnedRelation->where($this->localRelationship->getQualifiedMorphType(), $this->localRelationship->getMorphClass());
        }

        return $returnedRelation;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * Handle dynamic method calls into the model.
     *
     * @param  string  $method
     * @param  array  $parameters
     * @return mixed
     */
    public function __call($method, $parameters)
    {
        if (Str::startsWith($method, 'has')) {
<<<<<<< HEAD
            return $this->has(Str::of($method)->after('has')->lcfirst()->toString());
=======
            return $this->has((new Stringable($method))->after('has')->lcfirst()->toString());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        }

        throw new BadMethodCallException(sprintf(
            'Call to undefined method %s::%s()', static::class, $method
        ));
    }
}
