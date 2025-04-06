Translation Component
=====================

The Translation component provides tools to internationalize your application.

Getting Started
---------------

<<<<<<< HEAD
```
$ composer require symfony/translation
=======
```bash
composer require symfony/translation
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
```

```php
use Symfony\Component\Translation\Translator;
use Symfony\Component\Translation\Loader\ArrayLoader;

$translator = new Translator('fr_FR');
$translator->addLoader('array', new ArrayLoader());
$translator->addResource('array', [
    'Hello World!' => 'Bonjour !',
], 'fr_FR');

echo $translator->trans('Hello World!'); // outputs « Bonjour ! »
```

Sponsor
-------

<<<<<<< HEAD
Help Symfony by [sponsoring][1] its development!
=======
The Translation component for Symfony 7.1 is [backed][1] by:

 * [Crowdin][2], a cloud-based localization management software helping teams to go global and stay agile.

Help Symfony by [sponsoring][3] its development!
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)

Resources
---------

 * [Documentation](https://symfony.com/doc/current/translation.html)
 * [Contributing](https://symfony.com/doc/current/contributing/index.html)
 * [Report issues](https://github.com/symfony/symfony/issues) and
   [send Pull Requests](https://github.com/symfony/symfony/pulls)
   in the [main Symfony repository](https://github.com/symfony/symfony)

<<<<<<< HEAD
[1]: https://symfony.com/sponsor
=======
[1]: https://symfony.com/backers
[2]: https://crowdin.com
[3]: https://symfony.com/sponsor
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
