<?php

namespace App\Repositories;

<<<<<<< HEAD
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
=======
use Abedin\Maker\Repositories\Repository;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Models\TranslateUtility;
use Illuminate\Support\Str;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

class CategoryRepository extends Repository
{
    /**
     * base method
     *
     * @method model()
     */
    public static function model()
    {
        return Category::class;
    }

    /**
     * store a new category
     */
    public static function storeByRequest(CategoryRequest $request): Category
    {
        $thumbnail = MediaRepository::storeByRequest(
            $request->file('thumbnail'),
            'categories',
            'image'
        );

<<<<<<< HEAD
        return self::create([
=======
        $category = self::create([
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            'name' => $request->name,
            'media_id' => $thumbnail->id ?? null,
            'description' => $request->description,
            'status' => true,
        ]);
<<<<<<< HEAD
=======

        // create translation
        foreach ($request->names ?? [] as $lang => $name) {
            if (! $lang || ! $name) {
                continue;
            }
            TranslateUtility::create([
                'category_id' => $category->id,
                'name' => $name,
                'lang' => $lang,
                'slug' => Str::slug($name, '-'),
            ]);
        }

        return $category;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    /**
     * update a category
     */
    public static function updateByRequest(CategoryRequest $request, Category $category): Category
    {
        $thumbnail = $category->media;
        if ($request->hasFile('thumbnail')) {
            $thumbnail = MediaRepository::updateByRequest(
                $request->file('thumbnail'),
                'categories',
                'image',
                $thumbnail
            );
        }
<<<<<<< HEAD
=======

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        $category->update([
            'name' => $request->name,
            'media_id' => $thumbnail->id ?? null,
            'description' => $request->description,
        ]);

<<<<<<< HEAD
=======
        // update and create translation
        foreach ($request->names ?? [] as $lang => $name) {
            if (! $lang || ! $name) {
                continue;
            }
            TranslateUtility::updateOrCreate([
                'category_id' => $category->id,
                'lang' => $lang,
            ], [
                'name' => $name,
                'slug' => Str::slug($name, '-'),
            ]);
        }

>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        return $category;
    }
}
