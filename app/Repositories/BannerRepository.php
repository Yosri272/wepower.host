<?php

namespace App\Repositories;

<<<<<<< HEAD
=======
use Abedin\Maker\Repositories\Repository;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use App\Http\Requests\BannerRequest;
use App\Models\Banner;
use Illuminate\Support\Facades\Storage;

class BannerRepository extends Repository
{
    /**
     * base method
     *
     * @method model()
     */
    public static function model()
    {
        return Banner::class;
    }

    /**
     * store new banner
     *
     * */
    public static function storeByRequest(BannerRequest $request): Banner
    {
        $thumbnail = MediaRepository::storeByRequest($request->banner, 'banners', 'thumbnail', 'image');

<<<<<<< HEAD
        $shopId = auth()->user()->shop?->id ?? null;
        if ($shopId && $request->is('admin/*')) {
=======
        // shop
        $shop = generaleSetting('shop');

        $shopId = $shop?->id;

        $user = $shop?->user;
        if ($user && $user->hasRole('root') && ! $request->for_shop) {
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $shopId = null;
        }

        return self::create([
            'shop_id' => $shopId,
            'title' => $request->title,
            'description' => $request->description,
            'media_id' => $thumbnail->id,
            'status' => true,
        ]);
    }

    /**
     * Update the banner.
     */
    public static function updateByRequest($request, Banner $banner): Banner
    {
        $thumbnail = $banner->media;
        if ($request->hasFile('banner')) {
            $thumbnail = MediaRepository::updateByRequest(
                $request->banner,
                'banners',
                'image',
                $thumbnail
            );
        }
<<<<<<< HEAD
        $banner->update([
=======

        $shop = generaleSetting('shop');
        $shopId = $request->for_shop ? $shop?->id : $banner->shop_id;
        $user = $shop?->user;
        if ($user && $user->hasRole('root') && ! $request->for_shop) {
            $shopId = null;
        }

        $banner->update([
            'shop_id' => $shopId,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            'title' => $request->title,
            'description' => $request->description,
            'media_id' => $thumbnail ? $thumbnail->id : null,
        ]);

        return $banner;
    }

    /**
     * delete banner
     *
     * */
    public static function destroy(Banner $banner): bool
    {
        $media = $banner->media;
        if (Storage::exists($media->src)) {
            Storage::delete($media->src);
        }
        $banner->delete();
        $media->delete();

        return true;
    }
}
