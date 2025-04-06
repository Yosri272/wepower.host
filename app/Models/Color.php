<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
=======
use Illuminate\Database\Eloquent\Relations\HasMany;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

class Color extends Model
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
    /**
     * Scope a query to only include active colors.
     */
    public function scopeIsActive($query)
    {
        return $query->where('is_active', 1);
    }
}
