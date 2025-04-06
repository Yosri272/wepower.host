<?php

namespace Database\Seeders;

use App\Models\LegalPage;
use Faker\Factory;
use Illuminate\Database\Seeder;

class LegalPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();
        // Legal Pages
        $legalPages = [
            [
                'title' => 'Privacy Policy',
                'slug' => 'privacy-policy',
                'description' => $faker->randomHtml(),
            ],
            [
<<<<<<< HEAD
                'title' => 'Terms and Conditions',
=======
                'title' => 'Terms of Service',
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                'slug' => 'terms-and-conditions',
                'description' => $faker->randomHtml(),
            ],
            [
<<<<<<< HEAD
                'title' => 'Return and Refund Policy',
=======
                'title' => 'Return policy / Refund Policy',
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                'slug' => 'return-and-refund-policy',
                'description' => $faker->randomHtml(),
            ],
            [
<<<<<<< HEAD
                'title' => 'Shipping and Delivery Policy',
=======
                'title' => 'Shipping & Delivery Policy',
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                'slug' => 'shipping-and-delivery-policy',
                'description' => $faker->randomHtml(),
            ],
            [
                'title' => 'About Us',
                'slug' => 'about-us',
                'description' => $faker->randomHtml(4, rand(4, 10)),
            ],
        ];

        foreach ($legalPages as $legalPage) {
            LegalPage::create($legalPage);
        }
    }
}
