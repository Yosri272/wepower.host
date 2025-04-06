<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
<<<<<<< HEAD
=======
use Illuminate\Support\Facades\Artisan;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RoleSeeder::class);
<<<<<<< HEAD
        $this->call(LegalPageSeeder::class);
        $this->call(PaymentGatewaySeeder::class);
        $this->call(SocialLinkSeeder::class);

        if (app()->environment('local')) {
            $this->call(UserSeeder::class);
            $this->call(CustomerSeeder::class);
            $this->call(CategorySeeder::class);
            $this->call(ShopSeeder::class);
            $this->call(BrandSeeder::class);
            $this->call(SizeSeeder::class);
            $this->call(ColorSeeder::class);
=======
        $this->call(PermissionSeeder::class);
        $this->call(CurrencySeeder::class);
        $this->call(GeneraleSettingSeeder::class);
        $this->call(LegalPageSeeder::class);
        $this->call(PaymentGatewaySeeder::class);
        $this->call(SocialLinkSeeder::class);
        $this->call(ThemeColorSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(SocialAuthSeeder::class);
        $this->call(VerifyManageSeeder::class);
        $this->call(PageSeeder::class);
        $this->call(MenuSeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(FooterSeeder::class);

        if (app()->environment('local')) {
            $this->call(CustomerSeeder::class);
            $this->call(RiderSeeder::class);
            $this->call(ShopSeeder::class);
            $this->call(CategorySeeder::class);
            $this->call(BrandSeeder::class);
            $this->call(SizeSeeder::class);
            $this->call(ColorSeeder::class);
            $this->call(UnitSeeder::class);
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            $this->call(ProductSeeder::class);
            $this->call(BannerSeeder::class);
            $this->call(CouponSeeder::class);
            $this->call(AddressSeeder::class);
            $this->call(OrderSeeder::class);
            $this->call(ReviewSeeder::class);
            $this->call(FavoriteSeeder::class);
<<<<<<< HEAD
            $this->call(WalletSeeder::class);
        } else {
            $this->call(ProductionUserSeeder::class);
        }
        $this->call(AdminShopSeeder::class);
        $this->call(WalletSeeder::class);
        $this->command->info('Database seeded successfully');

        if (app()->environment('local')) {
            $this->userInfo();
        }
=======
            $this->call(BlogSeeder::class);
        } else {
            $this->call(RootAdminShopSeeder::class);
        }

        $this->call(WalletSeeder::class);
        $this->command->info('Database seeded successfully');

        // clear cache
        Artisan::call('cache:clear');

        $this->userInfo();
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }

    private function userInfo()
    {
        // info for root user in command line
        $this->command->line('');
        $this->command->info('Root user created:');
        $this->command->warn('- Email: root@readyecommerce.com');
        $this->command->warn('- Password: secret');
        $this->command->info('');

<<<<<<< HEAD
        //info for shop user in command line
        $this->command->info('Shop created:');
        $this->command->warn('- Email: shop@readyecommerce.com');
        $this->command->warn('- Password: secret');
=======
        if (app()->environment('local')) {
            // info for shop user in command line
            $this->command->info('Demo Shop created:');
            $this->command->warn('- Email: shop@readyecommerce.com');
            $this->command->warn('- Password: secret');

            // info for rider user in command line
            $this->command->info('Rider created:');
            $this->command->warn('- Email: rider@readyecommerce.com');
            $this->command->warn('- Password: secret');
        }
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    }
}
