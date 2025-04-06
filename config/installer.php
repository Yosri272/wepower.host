<?php

return [

    'name' => 'Laravel Web Installer',

<<<<<<< HEAD
     /*
=======
    /*
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    |--------------------------------------------------------------------------
    | Seeder run permission here
    |--------------------------------------------------------------------------
    */
    'seeder_run' => true,

    /*
    |--------------------------------------------------------------------------
    | minimum php version
    |--------------------------------------------------------------------------
    */
    'minPhpVersion' => '8.2.0',

    /*
    |--------------------------------------------------------------------------
    | Php and server Requirements
    |--------------------------------------------------------------------------
    | php extensions and apache modules requirements
    */
    'php_extensions' => [
        'mysqli',
        'openssl',
        'pdo',
        'mbstring',
        'JSON',
        'cURL',
        'fileinfo',
        'gmp',
        'xml',
        'zip',
        'sodium',
        'bcMath',
    ],

    /*
    |--------------------------------------------------------------------------
    | Folders Permissions
    |--------------------------------------------------------------------------
    | This is the default Laravel folders permissions, if your application
    | requires more permissions just add them to the array list bellow.
    |
    */
    'permissions' => [
        'storage/' => 777,
        'bootstrap/' => 777,
        'app/Providers/' => 775,
        'routes/' => 775,
<<<<<<< HEAD
=======
        'lang/' => 775,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    ],

    /*
    |--------------------------------------------------------------------------
    | Environment Form
    |--------------------------------------------------------------------------
    | environment form fields
    |
    */
    'environment_fields' => [
        [
            'APP_NAME' => [
                'rule' => 'required|string|max:50',
                'label' => 'App name',
                'placeholder' => 'e.g: Web-installer',
<<<<<<< HEAD
                'type' => 'text'
=======
                'type' => 'text',
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            ],
            'APP_URL' => [
                'rule' => 'required|url',
                'label' => 'App base url',
                'placeholder' => 'e.g: http://example.com',
<<<<<<< HEAD
                'type' => 'text'
=======
                'type' => 'text',
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            ],
            'APP_ENV' => [
                'rule' => 'required|string|max:50',
                'label' => 'App eneverment',
                'placeholder' => 'Select app enverment',
                'type' => 'select',
<<<<<<< HEAD
                'option' => ['local', 'production', 'staging', 'development']
=======
                'option' => ['local', 'production', 'staging', 'development'],
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            ],
            'FILESYSTEM_DISK' => [
                'rule' => 'required|string',
                'label' => 'App file system',
                'placeholder' => 'Select a file system',
                'type' => 'select',
<<<<<<< HEAD
                'option' => ['local', 'public']
=======
                'option' => ['local', 'public'],
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            ],
            'APP_DEBUG' => [
                'rule' => 'required|string',
                'label' => 'App debug:',
                'placeholder' => 'Choose app debug mode',
                'option' => [true, false],
<<<<<<< HEAD
                'type' => 'radio'
            ],
        ],[
=======
                'type' => 'radio',
            ],
        ], [
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            'DB_CONNECTION' => [
                'rule' => 'required|string|max:50',
                'label' => 'Database Connection',
                'placeholder' => 'Select Databese',
                'type' => 'select',
<<<<<<< HEAD
                'option' => ['mysql', 'sqlite', 'pgsql', 'sqlsrv']
=======
                'option' => ['mysql', 'sqlite', 'pgsql', 'sqlsrv'],
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            ],
            'DB_HOST' => [
                'rule' => 'required|string|max:50',
                'label' => 'Database Host',
                'type' => 'text',
<<<<<<< HEAD
                'placeholder' => 'e.g: 127.0.0.1'
=======
                'placeholder' => 'e.g: 127.0.0.1',
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            ],
            'DB_PORT' => [
                'rule' => 'required|numeric',
                'label' => 'Database Port',
                'type' => 'number',
                'placeholder' => 'e.g: 3306',
            ],
            'DB_DATABASE' => [
                'rule' => 'required|string|max:50',
                'label' => 'Database Name',
                'type' => 'text',
<<<<<<< HEAD
                'placeholder' => 'e.g: web_installer'
=======
                'placeholder' => 'e.g: web_installer',
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            ],
            'DB_USERNAME' => [
                'rule' => 'required|string|max:50',
                'label' => 'Database Username',
                'type' => 'text',
<<<<<<< HEAD
                'placeholder' => 'e.g: root'
=======
                'placeholder' => 'e.g: root',
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
            ],
            'DB_PASSWORD' => [
                'rule' => 'nullable|string|max:50',
                'label' => 'Database Password',
                'type' => 'password',
<<<<<<< HEAD
                'placeholder' => 'e.g: **********'
            ],
        ]
=======
                'placeholder' => 'e.g: **********',
            ],
        ],
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    ],
    /*
    |--------------------------------------------------------------------------
    | Mendetory items which you want to install
    |--------------------------------------------------------------------------
    */
    'need_to_know' => [
        'Codecanyon Purchase Code',

        'Database Name',
        'Database Username',
        'Database Password',
        'Database Hostname',
        'Database Port',
<<<<<<< HEAD

        'Mail Driver',
        'Mail Host',
        'Mail Port',
        'Mail Username',
        'Mail Password',
        'Mail Encryption'
=======
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    ],

    /*
    |--------------------------------------------------------------------------
    | Applications User access
    |--------------------------------------------------------------------------
    */
    'users' => [
        'root' => [
            'name' => 'Joynal Abedin',
            'email' => 'abedin.dev@gmail.com',
            'password' => 'secret',
<<<<<<< HEAD
            'email_verified_at' => now()
        ]
=======
            'email_verified_at' => now(),
        ],
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    ],

    /*
    |--------------------------------------------------------------------------
    | Market place validation
    | set a verification code for active from market
    |--------------------------------------------------------------------------
    */
<<<<<<< HEAD
    'product' => '', //which product you verify same as supported server
=======
    'product' => 'Ready Ecommerce', // which product you verify same as supported server
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    'verify_code' => 'Tg49OTUM4f8ZRgFJ4kPadHVHeW16enJHbWVkcVQzWWJlTTc2NE5YMi9IYlFFeFhpaHhlNHBTWkN2a091ejg5QWowSTZLZ1J6aVhSZGpGN3UrVURnZm5UNzVIdThTbVNFTG5sV0l3PT0=',
    'verify_purchase' => true,
    'verify_rules' => [
        'email' => [
            'rule' => 'required|string',
            'label' => 'Your Email',
            'type' => 'email',
<<<<<<< HEAD
            'placeholder' => 'e.g: example@email.com'
        ],
        'domain' => [
            'rule' => 'required|string',
            'label' => 'Your Domain Name',
            'type' => 'text',
            'placeholder' => 'e.g: https://example.com'
=======
            'placeholder' => 'e.g: example@email.com',
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        ],
        'username' => [
            'rule' => 'required|string',
            'label' => 'Your Codecanyon Username',
            'type' => 'text',
<<<<<<< HEAD
            'placeholder' => 'e.g: example'
=======
            'placeholder' => 'e.g: example',
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        ],
        'purchase_code' => [
            'rule' => 'required|string',
            'label' => 'Purchase Code',
            'type' => 'text',
<<<<<<< HEAD
            'placeholder' => 'e.g: 040afd3f-4cxa-4241-9e70-4gde9e4t674b'
        ],
    ],

     /*
=======
            'placeholder' => 'e.g: 040afd3f-4cxa-4241-9e70-4gde9e4t674b',
        ],
    ],

    /*
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    |--------------------------------------------------------------------------
    | Install commands
    | defind your installation commands
    |--------------------------------------------------------------------------
    */
    'install_commands' => [
<<<<<<< HEAD
        'php artisan module:enable SupportTicket'
=======
        'php artisan migrate:fresh --force',
        'php artisan db:seed --force',
        'php artisan storage:link',
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    ],

    /*
    |--------------------------------------------------------------------------
    | Update commands
    | defind your update commands
    |--------------------------------------------------------------------------
    */
    'update_commands' => [
        'composer update',
        'php artisan migrate',
        'php artisan cache:clear',
<<<<<<< HEAD
        'php artisan module:enable SupportTicket'
    ],

=======
        'php artisan db:seed SocialLinkSeeder --force',
        'php artisan db:Seed VerifyManageSeeder --force',
        'php artisan db:seed CurrencySeeder --force',
        'php artisan db:Seed PermissionSeeder --force',
        'php artisan db:seed PageSeeder --force',
        'php artisan db:seed MenuSeeder --force',
        'php artisan db:seed CountrySeeder --force',
        'php artisan db:seed FooterSeeder --force'
    ],

    'regular_license' => [
        'link' => 'https://codecanyon.net/checkout/from_item/52519302/?license=regular&size=source&ref=pds',
        'price' => 29,
    ],
    'extende_license' => [
        'link' => 'https://codecanyon.net/checkout/from_item/52519302/?license=extended&size=source&ref=pds',
        'price' => 199,
    ],
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
];
