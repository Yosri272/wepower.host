<?php

namespace Database\Seeders;

<<<<<<< HEAD
use App\Models\Shop;
=======
use App\Models\User;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use Illuminate\Database\Seeder;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
<<<<<<< HEAD
        $shops = Shop::all();

        foreach ($shops as $shop) {
            $sizes = ['s', 'm', 'l', 'xl', 'xxl', 'xxxl'];
            foreach ($sizes as $size) {
                $shop->sizes()->create([
                    'name' => $size,
                ]);
            }
=======
        $shop = User::role('root')->whereHas('shop')->first()?->shop;

        $sizes = ['S', 'M', 'L', 'XL', 'XXL', 'XXXL'];

        foreach ($sizes as $size) {
            $shop->sizes()->create([
                'name' => $size,
            ]);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        }
    }
}
