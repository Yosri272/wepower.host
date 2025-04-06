<?php

namespace Database\Seeders;

use App\Models\Media;
use App\Models\Product;
<<<<<<< HEAD
=======
use App\Models\User;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD

        for ($i = 1; $i <= rand(50, 120); $i++) {
            $product = Product::factory()->create();
=======
        $shop = User::role('root')->whereHas('shop')->first()?->shop;

        $colors = $shop->colors;
        $sizes = $shop->sizes;
        $categories = $shop->categories;
        $units = $shop->units;

        for ($i = 1; $i <= rand(50, 120); $i++) {
            $product = Product::factory()->create([
                'unit_id' => $units->random()?->id,
            ]);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

            for ($j = 0; $j < 4; $j++) {
                $media = Media::factory()->create();
                $product->medias()->attach($media);
            }

<<<<<<< HEAD
            $colors = $product->shop->colors;
            $product->colors()->attach($colors->random(3));

            $sizes = $product->shop->sizes;
            $product->sizes()->attach($sizes->random(4));

            $categories = $product->shop->categories;
            $product->categories()->attach($categories->random(3));
=======
            $product->colors()->attach($colors->random(3));
            $product->sizes()->attach($sizes->random(4));
            $product->categories()->attach($categories->random(1));
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        }
    }
}
