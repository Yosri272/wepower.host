<?php

namespace App\Repositories;

<<<<<<< HEAD
use App\Models\Gallery;
use Arafat\LaravelRepository\Repository;
=======
use Abedin\Maker\Repositories\Repository;
use App\Models\Gallery;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class GalleryRepository extends Repository
{
    /**
     * base method
     *
     * @method model()
     */
    public static function model()
    {
        return Gallery::class;
    }

    /**
     * @param  Request  $request
     */
    public static function uploadByRequest($extractPath, $folderName): array
    {
        $extractedFile = File::allFiles(storage_path($extractPath));

        $total = self::storefileToDatabase($extractedFile, $folderName);

        File::deleteDirectory(storage_path($extractPath));

        return [
            'total' => $total,
        ];
    }

    /**
     * store file to database
     *
     * @return total
     */
    private static function storefileToDatabase($extractedFile, $folderName)
    {
<<<<<<< HEAD
        $invaildFiles = [];

        $shop = auth()->user()->shop;
=======
        $invalidFiles = [];

        $shop = generaleSetting('shop');
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        $total = 0;

        foreach ($extractedFile as $file) {

            $originalName = pathinfo($file, PATHINFO_BASENAME);

            if (in_array(pathinfo($file, PATHINFO_EXTENSION), ['jpg', 'png', 'jpeg', 'gif'])) {

                $filePath = 'gallery/shop'.$shop->id.'/'.$folderName;

                Storage::disk('public')->put($filePath.'/'.$originalName, File::get($file));

                $total = $total + 1;
            } else {
<<<<<<< HEAD
                $invaildFiles[] = $file;
=======
                $invalidFiles[] = $file;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            }
        }

        self::create([
            'shop_id' => $shop->id,
            'name' => $folderName,
            'total_image' => $total,
        ]);

        return $total;
    }
}
