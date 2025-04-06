<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Cache;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

class Language extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
<<<<<<< HEAD
=======

    protected static function boot()
    {
        parent::boot();

        static::created(function () {
            Cache::forget('languages');
        });

        static::updated(function () {
            Cache::forget('languages');
        });

        static::deleted(function () {
            Cache::forget('languages');
        });
    }
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
}
