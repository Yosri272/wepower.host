<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Media;
<<<<<<< HEAD
=======
use App\Models\User;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = ['Nike', 'Adidas', 'Apple', 'Samsung', 'Sony', 'HP', 'Dell', 'Lenovo', 'Canon', 'Sony', 'LG', 'Microsoft', 'Puma', 'H&M', 'Zara', 'Gucci', 'Toyota', 'Honda', 'BMW', 'Mercedes-Benz'];

<<<<<<< HEAD
        foreach ($brands as $brand) {
            Brand::create([
                'name' => $brand,
=======
        $shop = User::role('root')->whereHas('shop')->first()?->shop;

        foreach ($brands as $brand) {
            Brand::create([
                'name' => $brand,
                'shop_id' => $shop->id,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                'media_id' => Media::factory()->create()->id,
                'is_default' => true,
            ]);
        }
    }
}
