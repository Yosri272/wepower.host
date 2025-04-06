<?php

namespace Database\Seeders;

use App\Models\Category;
<<<<<<< HEAD
=======
use App\Models\User;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
<<<<<<< HEAD
            "Women's", "Men's", 'Beauty',
            'Jewelry', 'Home', 'Kids',
            'Electronics', 'Sports', 'Books',
        ];

        foreach ($categories as $category) {
            Category::factory()->create([
                'name' => $category,
            ]);
=======
            "Women's",
            "Men's",
            'Beauty',
            'Jewelry',
            'Home',
            'Kids',
            'Electronics',
            'Sports',
            'Books',
        ];

        $shop = User::role('root')->whereHas('shop')->first()?->shop;

        foreach ($categories as $category) {
            $category = Category::factory()->create([
                'name' => $category,
            ]);

            $shop->categories()->attach($category);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        }
    }
}
