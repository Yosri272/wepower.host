<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Media;
use App\Models\Shop;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $brands = Brand::all();

        return [
<<<<<<< HEAD
            'shop_id' => 1,
            'shop_id' => Shop::all()->random()->id,
            'media_id' => Media::factory()->create(),
            'brand_id' => $brands->random()->id,
=======
            'shop_id' => Shop::all()->random()->id,
            'media_id' => Media::factory()->create(),
            'brand_id' => $brands->random()->id,
            'unit_id' => 1,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            'name' => $this->faker->word,
            'quantity' => $this->faker->numberBetween(1, 100),
            'short_description' => $this->faker->sentence,
            'description' => $this->faker->sentence,
            'discount_price' => $this->faker->randomFloat(2, 10, 100),
            'price' => $this->faker->randomFloat(2, 10, 100),
            'is_active' => $this->faker->boolean(),
<<<<<<< HEAD
=======
            'is_approve' => true,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        ];
    }
}
