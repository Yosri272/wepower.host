<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
=======
use Illuminate\Database\Eloquent\Relations\HasMany;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

class Brand extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    /**
     * Get the shop from the brand.
     */
    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }

<<<<<<< HEAD
=======
    public function translations(): HasMany
    {
        return $this->hasMany(TranslateUtility::class);
    }

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    /**
     * Get the products from the brand.
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    /**
     * Scope a query to only include active brands.
     */
    public function scopeIsActive($query)
    {
        return $query->where('is_active', 1);
    }
}
