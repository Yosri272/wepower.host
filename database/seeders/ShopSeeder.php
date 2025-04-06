<?php

namespace Database\Seeders;

<<<<<<< HEAD
use App\Models\Category;
use App\Models\Shop;
use App\Models\User;
use Faker\Factory;
=======
use App\Models\Shop;
use App\Models\User;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
use Illuminate\Database\Seeder;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
<<<<<<< HEAD
        $faker = Factory::create();
        $categories = Category::pluck('id')->toArray();
=======
        // Root Shop
        $this->call(RootAdminShopSeeder::class);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        // Test shop for testing
        $user = User::factory()->create([
            'name' => 'Test Shop',
            'phone' => '01100000001',
            'email' => 'shop@readyecommerce.com',
            'is_active' => true,
        ]);

        $shop = Shop::factory()->create([
            'name' => 'Demo Shop',
            'user_id' => $user->id,
        ]);
<<<<<<< HEAD
        $shop->categories()->sync($faker->randomElements($categories, rand(3, 7)));
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        $shop->user->assignRole('shop');

        // Create 10 shops
        for ($i = 1; $i <= 10; $i++) {
            $shop = Shop::factory()->create();
<<<<<<< HEAD
            $shop->categories()->sync($faker->randomElements($categories, rand(3, 7)));
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

            $shop->user->assignRole('shop');
        }
    }
}
