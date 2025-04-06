<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
<<<<<<< HEAD
use App\Models\LegalPage;
=======
use App\Models\Page;
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

class LegalPageController extends Controller
{
    /**
     * Get a legal page by its slug.
     *
     * @param  string  $slug  The slug of the legal page
     */
    public function index($slug)
    {
<<<<<<< HEAD
        $page = LegalPage::where('slug', $slug)->first();
=======
        $page = Page::where('slug', $slug)->first();
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

        return $this->json('Legal Page', [
            'content' => [
                'title' => $page?->title,
                'description' => $page?->description,
            ],
        ]);
    }

    /**
     * get contact us page.
     */
    public function contactUs()
    {
        $contact = ContactUs::first();

        return $this->json('Contact Us', [
            'phone' => $contact?->phone,
            'email' => $contact?->email,
            'whatsapp' => $contact?->whatsapp,
            'messenger' => $contact?->messenger,
        ]);
    }
}
