<?php

namespace Database\Seeders;

use App\Models\SocialLink;
use Illuminate\Database\Seeder;

class SocialLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SocialLink::truncate();

        $data = [
            [
                'link' => null,
<<<<<<< HEAD
                'logo' => '/assets/icons/Facebook.svg',
=======
                'logo' => '/assets/social/facebook.png',
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                'name' => 'Facebook',
            ],
            [
                'link' => 'https://www.linkedin.com/company/razinsoft',
<<<<<<< HEAD
                'logo' => '/assets/icons/LinkedIn.svg',
=======
                'logo' => '/assets/social/linkedin.png',
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                'name' => 'LinkedIn',
            ],
            [
                'link' => null,
<<<<<<< HEAD
                'logo' => '/assets/icons/Instagram.svg',
=======
                'logo' => '/assets/social/instagram.png',
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
                'name' => 'Instagram',
            ],
            [
                'link' => 'https://www.youtube.com/@razinsoft',
<<<<<<< HEAD
                'logo' => '/assets/icons/YouTube.svg',
                'name' => 'YouTube',
            ],
=======
                'logo' => '/assets/social/youtube.png',
                'name' => 'YouTube',
            ],
            [
                'link' => null,
                'logo' => '/assets/social/whatsapp.png',
                'name' => 'WhatsApp',
            ],
            [
                'link' => null,
                'logo' => '/assets/social/twitter.png',
                'name' => 'Twitter',
            ],
            [
                'link' => null,
                'logo' => '/assets/social/telegram.png',
                'name' => 'Telegram',
            ],
            [
                'link' => null,
                'logo' => '/assets/social/google-plus.png',
                'name' => 'Google Plus',
            ],
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        ];

        SocialLink::insert($data);
    }
}
