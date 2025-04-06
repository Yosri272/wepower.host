<?php

namespace Database\Seeders;

<<<<<<< HEAD
use App\Models\Shop;
=======
use App\Models\Color;
use App\Models\User;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
<<<<<<< HEAD
        $colors = ['red', 'blue', 'green', 'yellow', 'orange', 'purple', 'black', 'white',
        ];
        $shops = Shop::all();

        foreach ($shops as $shop) {
            foreach ($colors as $color) {
                $shop->colors()->create([
                    'name' => $color,
                ]);
            }
        }

=======
        $shop = User::role('root')->whereHas('shop')->first()?->shop;

        $colors = [
            [
                'name' => 'Red',
                'color_code' => '#ff0000',
                'shop_id' => $shop->id ?? 1,
                'is_active' => true,
            ],
            [
                'name' => 'Green',
                'color_code' => '#00ff00',
                'shop_id' => $shop->id ?? 1,
                'is_active' => true,
            ],
            [
                'name' => 'Blue',
                'color_code' => '#0000ff',
                'shop_id' => $shop->id ?? 1,
                'is_active' => true,
            ],
            [
                'name' => 'Yellow',
                'color_code' => '#ffff00',
                'shop_id' => $shop->id ?? 1,
                'is_active' => true,
            ],
            [
                'name' => 'Black',
                'color_code' => '#000000',
                'shop_id' => $shop->id ?? 1,
                'is_active' => true,
            ],
            [
                'name' => 'White',
                'color_code' => '#ffffff',
                'shop_id' => $shop->id ?? 1,
                'is_active' => true,
            ],
            [
                'name' => 'Orange',
                'color_code' => '#ffa500',
                'shop_id' => $shop->id ?? 1,
                'is_active' => true,
            ],
            [
                'name' => 'Multicolour',
                'color_code' => '#ffffff',
                'shop_id' => $shop->id ?? 1,
                'is_active' => true,
            ],
            [
                'name' => 'Grey',
                'color_code' => '#808080',
                'shop_id' => $shop->id ?? 1,
                'is_active' => true,
            ],
            [
                'name' => 'Pink',
                'color_code' => '#ffc0cb',
                'shop_id' => $shop->id ?? 1,
                'is_active' => true,
            ],
            [
                'name' => 'Purple',
                'color_code' => '#800080',
                'shop_id' => $shop->id ?? 1,
                'is_active' => true,
            ],
            [
                'name' => 'Brown',
                'color_code' => '#a52a2a',
                'shop_id' => $shop->id ?? 1,
                'is_active' => true,
            ],
        ];

        Color::insert($colors);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }
}
