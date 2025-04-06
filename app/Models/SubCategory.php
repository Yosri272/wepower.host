<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
<<<<<<< HEAD
=======
use Illuminate\Database\Eloquent\Relations\HasMany;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use Illuminate\Support\Facades\Storage;

class SubCategory extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

<<<<<<< HEAD
=======
    public function translations(): HasMany
    {
        return $this->hasMany(TranslateUtility::class);
    }

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_subcategories');
    }

    /**
     * Scopes a query to only include active records.
     *
     * @param  mixed  $query  The query parameter.
     * @return mixed The return value.
     */
    public function scopeIsActive($query)
    {
        return $query->where('is_active', 1);
    }

    /**
     * Retrieves the associated media for this model.
     */
    public function media(): BelongsTo
    {
        return $this->belongsTo(Media::class, 'media_id');
    }

    /**
     * Generates a thumbnail attribute for the media.
     *
     * @return Attribute The generated thumbnail attribute.
     */
    public function thumbnail(): Attribute
    {
<<<<<<< HEAD
        $thumbnail = asset('defualt/defualt.jpg');
=======
        $thumbnail = asset('default/default.jpg');
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        if ($this->media && Storage::exists($this->media->src)) {
            $thumbnail = Storage::url($this->media->src);
        }

        return Attribute::make(
            get: fn () => $thumbnail
        );
    }
}
